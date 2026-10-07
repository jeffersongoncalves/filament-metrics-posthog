<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\Filament\MetricsPostHog\Concerns\InteractsWithPostHog;

class RealtimeVisitorsWidget extends StatsOverviewWidget
{
    use InteractsWithPostHog;

    protected static ?string $pollingInterval = '30s';

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        if (! $this->isPostHogConfigured()) {
            return [
                Stat::make(
                    __('filament-metrics-posthog::metrics-posthog.widgets.not_configured'),
                    __('filament-metrics-posthog::metrics-posthog.widgets.not_configured_description'),
                ),
            ];
        }

        try {
            $realtime = $this->cachedPostHogCall('realtime-visitors', 15, fn (): int => $this->getPostHog()->realtimeVisitors());

            $totals = $this->cachedPostHogCall('aggregate-30d', 300, fn (): array => $this->getPostHog()->aggregate()->toArray());

            return [
                Stat::make(__('filament-metrics-posthog::metrics-posthog.widgets.realtime.current'), number_format($realtime))
                    ->icon('heroicon-o-signal'),
                Stat::make(__('filament-metrics-posthog::metrics-posthog.widgets.realtime.visitors'), number_format((int) ($totals['visitors'] ?? 0)))
                    ->description(__('filament-metrics-posthog::metrics-posthog.widgets.last_30_days'))
                    ->icon('heroicon-o-users'),
                Stat::make(__('filament-metrics-posthog::metrics-posthog.widgets.realtime.pageviews'), number_format((int) ($totals['pageviews'] ?? 0)))
                    ->description(__('filament-metrics-posthog::metrics-posthog.widgets.last_30_days'))
                    ->icon('heroicon-o-eye'),
                Stat::make(__('filament-metrics-posthog::metrics-posthog.widgets.realtime.bounce_rate'), round((float) ($totals['bounce_rate'] ?? 0)).'%')
                    ->description(__('filament-metrics-posthog::metrics-posthog.widgets.last_30_days'))
                    ->icon('heroicon-o-arrow-uturn-left'),
                Stat::make(__('filament-metrics-posthog::metrics-posthog.widgets.realtime.visit_duration'), gmdate('i:s', (int) ($totals['visit_duration'] ?? 0)))
                    ->description(__('filament-metrics-posthog::metrics-posthog.widgets.last_30_days'))
                    ->icon('heroicon-o-clock'),
            ];
        } catch (\Throwable $e) {
            return [
                Stat::make(
                    __('filament-metrics-posthog::metrics-posthog.widgets.error'),
                    $e->getMessage(),
                ),
            ];
        }
    }
}
