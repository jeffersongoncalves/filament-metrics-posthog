<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog\Widgets;

use Filament\Widgets\Widget;
use JeffersonGoncalves\Filament\MetricsPostHog\Concerns\InteractsWithPostHog;
use JeffersonGoncalves\MetricsPostHog\Data\StatsRow;
use JeffersonGoncalves\MetricsPostHog\PostHog;

/**
 * Top-N table for a single PostHog breakdown (pages, sources, countries...).
 */
abstract class BreakdownTableWidget extends Widget
{
    use InteractsWithPostHog;

    protected string $view = 'filament-metrics-posthog::widgets.breakdown-table';

    protected int|string|array $columnSpan = 1;

    abstract protected function tableHeading(): string;

    /**
     * Metric columns to show after the label column, as [metric key => header].
     *
     * @return array<string, string>
     */
    abstract protected function tableColumns(): array;

    abstract protected function tableLabelHeader(): string;

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(PostHog $posthog): array;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        $base = [
            'heading' => $this->tableHeading(),
            'labelHeader' => $this->tableLabelHeader(),
            'columns' => $this->tableColumns(),
            'configured' => $this->isPostHogConfigured(),
            'error' => null,
            'data' => [],
        ];

        if (! $base['configured']) {
            return $base;
        }

        try {
            $base['data'] = $this->cachedPostHogCall(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getPostHog())));
        } catch (\Throwable $e) {
            $base['error'] = $e->getMessage();
        }

        return $base;
    }
}
