<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopDevicesWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.top_devices.label');
    }

    protected function fetchRows(PostHog $posthog): array
    {
        return $posthog->devices(limit: 8);
    }
}
