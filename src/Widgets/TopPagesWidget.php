<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopPagesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_pages.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_pages.page');
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
        return $posthog->pages(limit: 10);
    }
}
