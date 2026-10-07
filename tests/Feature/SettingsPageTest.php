<?php

use JeffersonGoncalves\Filament\MetricsPostHog\Pages\PostHogMetricsSettingsPage;

it('can render the settings page', function () {
    $this->get(PostHogMetricsSettingsPage::getUrl())
        ->assertSuccessful();
})->skip('Requires authenticated user');

it('has the correct navigation label', function () {
    expect(PostHogMetricsSettingsPage::getNavigationLabel())
        ->toBe('PostHog');
});
