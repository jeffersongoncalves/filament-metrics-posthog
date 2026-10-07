<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Concerns\InteractsWithPostHog;

class VisitorsChartWidget extends ChartWidget
{
    use InteractsWithPostHog;

    protected int|string|array $columnSpan = 'full';

    protected ?string $maxHeight = '300px';

    public function getHeading(): string
    {
        return __('filament-metrics-posthog::metrics-posthog.widgets.visitors_chart.label');
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $empty = ['datasets' => [], 'labels' => []];

        if (! $this->isPostHogConfigured()) {
            return $empty;
        }

        try {
            $rows = $this->cachedPostHogCall('timeseries-30d', 300, fn (): array => $this->rowsToArray($this->getPostHog()->timeseries()));

            if ($rows === []) {
                return $empty;
            }

            return [
                'datasets' => [
                    [
                        'label' => __('filament-metrics-posthog::metrics-posthog.widgets.visitors_chart.visitors'),
                        'data' => array_map(fn (array $row): int => (int) ($row['visitors'] ?? 0), $rows),
                        'borderColor' => '#6366f1',
                        'backgroundColor' => 'rgba(99, 102, 241, 0.1)',
                        'fill' => true,
                    ],
                    [
                        'label' => __('filament-metrics-posthog::metrics-posthog.widgets.visitors_chart.pageviews'),
                        'data' => array_map(fn (array $row): int => (int) ($row['pageviews'] ?? 0), $rows),
                        'borderColor' => '#f59e0b',
                        'backgroundColor' => 'rgba(245, 158, 11, 0.1)',
                        'fill' => true,
                    ],
                ],
                'labels' => array_map(fn (array $row): string => date('M d', strtotime((string) $row['label']) ?: time()), $rows),
            ];
        } catch (\Throwable) {
            return $empty;
        }
    }
}
