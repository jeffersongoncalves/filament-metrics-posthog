<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\SpatieLaravelSettingsPluginServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsServiceProvider;
use JeffersonGoncalves\Filament\MetricsPostHog\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\MetricsPostHog\MetricsPostHogServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelSettings\LaravelSettingsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
    }

    protected function getPackageProviders($app): array
    {
        return [
            ActionsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeIconsServiceProvider::class,
            FilamentServiceProvider::class,
            FormsServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
            NotificationsServiceProvider::class,
            SupportServiceProvider::class,
            TablesServiceProvider::class,
            WidgetsServiceProvider::class,
            LaravelSettingsServiceProvider::class,
            SpatieLaravelSettingsPluginServiceProvider::class,
            MetricsPostHogServiceProvider::class,
            PostHogMetricsServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('k', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase(): void
    {
        $this->app['db']->connection()->getSchemaBuilder()->create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('name');
            $table->boolean('locked')->default(false);
            $table->json('payload');
            $table->timestamps();
            $table->unique(['group', 'name']);
        });

        $this->seedSettings();
    }

    protected function seedSettings(): void
    {
        $settings = [
            ['group' => 'metrics-posthog', 'name' => 'personal_api_key', 'payload' => json_encode(encrypt(''))],
            ['group' => 'metrics-posthog', 'name' => 'project_id', 'payload' => json_encode('')],
            ['group' => 'metrics-posthog', 'name' => 'host', 'payload' => json_encode('https://us.posthog.com')],
        ];

        foreach ($settings as $setting) {
            $this->app['db']->connection()->table('settings')->insert(array_merge($setting, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
