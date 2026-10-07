<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopBrowsersWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_browsers.label');
    }

    protected function fetchRows(PostHog $posthog): array
    {
        return $posthog->browsers(limit: 8);
    }
}
