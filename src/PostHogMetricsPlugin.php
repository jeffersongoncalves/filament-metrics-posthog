<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog;

use Filament\Panel;
use JeffersonGoncalves\Filament\MetricsPostHog\Pages\PostHogMetricsSettingsPage;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\RealtimeVisitorsWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\TopBrowsersWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\TopCountriesWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\TopDevicesWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\TopPagesWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\TopSourcesWidget;
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\VisitorsChartWidget;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class PostHogMetricsPlugin extends AbstractAnalyticsPlugin
{
    protected bool $hasWidgets = true;

    public function getId(): string
    {
        return 'filament-metrics-posthog';
    }

    protected function getSettingsPageClass(): ?string
    {
        return PostHogMetricsSettingsPage::class;
    }

    public function register(Panel $panel): void
    {
        parent::register($panel);

        if ($this->hasWidgets) {
            $panel->widgets([
                RealtimeVisitorsWidget::class,
                VisitorsChartWidget::class,
                TopPagesWidget::class,
                TopSourcesWidget::class,
                TopCountriesWidget::class,
                TopBrowsersWidget::class,
                TopDevicesWidget::class,
            ]);
        }
    }

    public function widgets(bool $condition = true): static
    {
        $this->hasWidgets = $condition;

        return $this;
    }
}
