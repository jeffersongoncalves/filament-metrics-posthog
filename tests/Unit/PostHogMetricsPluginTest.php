<?php

use JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsPlugin;

function pluginFlag(PostHogMetricsPlugin $plugin, string $property): bool
{
    $reflection = new ReflectionProperty($plugin, $property);
    $reflection->setAccessible(true);

    return $reflection->getValue($plugin);
}

it('can be instantiated', function () {
    expect(PostHogMetricsPlugin::make())->toBeInstanceOf(PostHogMetricsPlugin::class);
});

it('has the correct id', function () {
    expect(PostHogMetricsPlugin::make()->getId())->toBe('filament-metrics-posthog');
});

it('enables the settings page and widgets by default', function () {
    $plugin = PostHogMetricsPlugin::make();

    expect(pluginFlag($plugin, 'hasSettingsPage'))->toBeTrue()
        ->and(pluginFlag($plugin, 'hasWidgets'))->toBeTrue();
});

it('can disable the settings page', function () {
    expect(pluginFlag(PostHogMetricsPlugin::make()->settingsPage(false), 'hasSettingsPage'))->toBeFalse();
});

it('can disable the widgets', function () {
    expect(pluginFlag(PostHogMetricsPlugin::make()->widgets(false), 'hasWidgets'))->toBeFalse();
});
