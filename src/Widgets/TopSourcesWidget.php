<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopSourcesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_sources.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_sources.source');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-posthog::metrics-posthog.widgets.visitors'),
            'pageviews' => __('filament-metrics-posthog::metrics-posthog.widgets.pageviews'),
        ];
    }

    protected function fetchRows(PostHog $posthog): array
    {
        return $posthog->sources(limit: 10);
    }
}
