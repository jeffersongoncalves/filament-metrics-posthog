## Filament Metrics PostHog

PostHog web analytics dashboard widgets for Filament with a settings page powered by Spatie Laravel Settings. Reads PostHog through HogQL queries; works with PostHog Cloud (US/EU) and self-hosted.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-metrics-posthog:"^3.0"
php artisan vendor:publish --tag=metrics-posthog-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PostHogMetricsPlugin::make()
                // ->settingsPage(false)
                // ->widgets(false)
                ,
        ]);
}
</code-snippet>
@endverbatim

### Widgets
- `RealtimeVisitorsWidget` — visitors in the last 5 minutes + 30-day totals (15s cache for realtime)
- `VisitorsChartWidget` — daily visitors and pageviews
- `TopPagesWidget`, `TopSourcesWidget`, `TopCountriesWidget` — top-10 tables (extend `BreakdownTableWidget`)
- `TopBrowsersWidget`, `TopDevicesWidget` — doughnut charts (extend `BreakdownChartWidget`)

### Architecture
- `PostHogMetricsPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin`, registers `PostHogMetricsSettingsPage` and the widgets
- Widgets use the `InteractsWithPostHog` concern: configuration check, `PostHog` service and 5-minute cache keyed per project
- Settings: `JeffersonGoncalves\MetricsPostHog\Settings\PostHogSettings` (`personal_api_key` encrypted, `project_id`, `host`)
- Translations live under `filament-metrics-posthog::metrics-posthog.*`

### Best Practices
- Add a new breakdown table by extending `BreakdownTableWidget` and implementing `tableHeading()`, `tableLabelHeader()`, `tableColumns()` and `fetchRows()` (e.g. `$posthog->breakdown('$os', limit: 10)`)
- Use a personal API key with the `query:read` scope, not the project key from the tracking snippet
