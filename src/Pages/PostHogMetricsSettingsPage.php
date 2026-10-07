<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\MetricsPostHog\Settings\PostHogSettings;

class PostHogMetricsSettingsPage extends SettingsPage
{
    protected static string $settings = PostHogSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): ?string
    {
        return __('filament-metrics-posthog::metrics-posthog.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-metrics-posthog::metrics-posthog.sections.api_configuration'))
                    ->schema([
                        TextInput::make('personal_api_key')
                            ->label(__('filament-metrics-posthog::metrics-posthog.fields.personal_api_key.label'))
                            ->helperText(__('filament-metrics-posthog::metrics-posthog.fields.personal_api_key.helper'))
                            ->password()
                            ->revealable()
                            ->required(),

                        TextInput::make('project_id')
                            ->label(__('filament-metrics-posthog::metrics-posthog.fields.project_id.label'))
                            ->helperText(__('filament-metrics-posthog::metrics-posthog.fields.project_id.helper'))
                            ->placeholder('12345')
                            ->required(),
                    ]),

                Section::make(__('filament-metrics-posthog::metrics-posthog.sections.advanced_settings'))
                    ->schema([
                        TextInput::make('host')
                            ->label(__('filament-metrics-posthog::metrics-posthog.fields.host.label'))
                            ->helperText(__('filament-metrics-posthog::metrics-posthog.fields.host.helper'))
                            ->url()
                            ->default('https://us.posthog.com')
                            ->required(),
                    ])
                    ->collapsed(),
            ]);
    }
}
