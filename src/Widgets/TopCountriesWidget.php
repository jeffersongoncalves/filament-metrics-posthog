<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopCountriesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_countries.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_countries.country');
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
        return $posthog->countries(limit: 10);
    }
}
