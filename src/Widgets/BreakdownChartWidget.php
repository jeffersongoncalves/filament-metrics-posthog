<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Concerns\InteractsWithPostHog;
use JeffersonGoncalves\MetricsPostHog\Data\StatsRow;
use JeffersonGoncalves\MetricsPostHog\PostHog;

/**
 * Doughnut chart of visitors for a single PostHog breakdown (browsers, devices...).
 */
abstract class BreakdownChartWidget extends ChartWidget
{
    use InteractsWithPostHog;

    protected int|string|array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(PostHog $posthog): array;

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $empty = ['datasets' => [], 'labels' => []];

        if (! $this->isPostHogConfigured()) {
            return $empty;
        }

        try {
            $rows = $this->cachedPostHogCall(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getPostHog())));

            if ($rows === []) {
                return $empty;
            }

            return [
                'datasets' => [
                    [
                        'data' => array_map(fn (array $row): int => (int) ($row['visitors'] ?? 0), $rows),
                        'backgroundColor' => [
                            '#6366f1', '#f59e0b', '#10b981', '#ef4444',
                            '#8b5cf6', '#06b6d4', '#f97316', '#ec4899',
                        ],
                    ],
                ],
                'labels' => array_map(fn (array $row): string => $row['label'] !== '' ? $row['label'] : __('filament-metrics-posthog::metrics-posthog.widgets.unknown'), $rows),
            ];
        } catch (\Throwable) {
            return $empty;
        }
    }
}
