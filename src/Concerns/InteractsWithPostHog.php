<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Concerns;

use Illuminate\Support\Facades\Cache;
use JeffersonGoncalves\MetricsPostHog\Data\StatsRow;
use JeffersonGoncalves\MetricsPostHog\PostHog;
use JeffersonGoncalves\MetricsPostHog\Settings\PostHogSettings;

trait InteractsWithPostHog
{
    protected function isPostHogConfigured(): bool
    {
        $settings = app(PostHogSettings::class);

        return $settings->personal_api_key !== '' && $settings->project_id !== '';
    }

    protected function getPostHog(): PostHog
    {
        return app(PostHog::class);
    }

    /**
     * @return mixed
     */
    protected function cachedPostHogCall(string $key, int $ttl, callable $callback)
    {
        $projectId = app(PostHogSettings::class)->project_id;

        return Cache::remember("filament-metrics-posthog:{$projectId}:{$key}", $ttl, $callback);
    }

    /**
     * Flatten stats rows into plain arrays (label + metrics) so they cache and render cleanly.
     *
     * @param  list<StatsRow>  $rows
     * @return list<array<string, mixed>>
     */
    protected function rowsToArray(array $rows): array
    {
        return array_map(
            fn (StatsRow $row): array => ['label' => $row->label] + $row->metrics,
            $rows,
        );
    }
}
