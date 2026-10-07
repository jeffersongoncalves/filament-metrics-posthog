<?php

use JeffersonGoncalves\Filament\MetricsPostHog\Concerns\InteractsWithPostHog;
use JeffersonGoncalves\MetricsPostHog\Data\StatsRow;
use JeffersonGoncalves\MetricsPostHog\Settings\PostHogSettings;

function posthogProbe(): object
{
    return new class
    {
        use InteractsWithPostHog;

        public function configured(): bool
        {
            return $this->isPostHogConfigured();
        }

        /**
         * @param  list<StatsRow>  $rows
         * @return list<array<string, mixed>>
         */
        public function flatten(array $rows): array
        {
            return $this->rowsToArray($rows);
        }
    };
}

it('detects when posthog is not configured', function () {
    expect(posthogProbe()->configured())->toBeFalse();
});

it('detects when posthog is configured', function () {
    $settings = app(PostHogSettings::class);
    $settings->personal_api_key = 'phx_test';
    $settings->project_id = '12345';
    $settings->save();

    expect(posthogProbe()->configured())->toBeTrue();
});

it('flattens stats rows into label + metrics arrays', function () {
    $rows = [
        new StatsRow('/pricing', ['visitors' => 12, 'pageviews' => 30]),
    ];

    expect(posthogProbe()->flatten($rows))->toBe([
        ['label' => '/pricing', 'visitors' => 12, 'pageviews' => 30],
    ]);
});
