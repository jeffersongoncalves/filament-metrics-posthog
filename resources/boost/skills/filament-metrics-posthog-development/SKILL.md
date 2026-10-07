---
name: filament-metrics-posthog-development
description: Build and work with the Filament Metrics PostHog plugin — PostHog web analytics dashboard widgets, the settings page for the personal API key, project ID and host, and custom breakdown widgets.
---

# Filament Metrics PostHog Development

## When to use this skill

Use this skill when:
- Showing PostHog web analytics in a Filament panel
- Adding or customizing PostHog widgets
- Debugging "not configured", 401/403 or query errors in the PostHog widgets

## Package Overview

- **Package**: `jeffersongoncalves/filament-metrics-posthog` (branch `1.x` for Filament 3.x)
- **Namespace**: `JeffersonGoncalves\Filament\MetricsPostHog`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-metrics-posthog:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsPlugin;

$panel->plugins([
    PostHogMetricsPlugin::make(),
]);
```

```bash
php artisan vendor:publish --tag=metrics-posthog-settings-migrations
php artisan migrate
```

## Custom Breakdown Widget

```php
use JeffersonGoncalves\Filament\MetricsPostHog\Widgets\BreakdownTableWidget;
use JeffersonGoncalves\MetricsPostHog\PostHog;

class TopOperatingSystemsWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string { return 'Operating systems'; }

    protected function tableLabelHeader(): string { return 'OS'; }

    protected function tableColumns(): array { return ['visitors' => 'Visitors', 'pageviews' => 'Pageviews']; }

    protected function fetchRows(PostHog $posthog): array
    {
        return $posthog->breakdown('$os', limit: 10);
    }
}
```

`breakdown()` accepts any `$pageview` event property name (letters, digits, `_`, optional leading `$`). For anything else use `$posthog->query('<HogQL>')`.

## Settings Fields

| Field | Description |
|-------|-------------|
| `personal_api_key` | Personal API key with the `query:read` scope (stored encrypted) |
| `project_id` | Numeric project ID (Project settings) |
| `host` | `https://us.posthog.com`, `https://eu.posthog.com` or your self-hosted URL |

## Troubleshooting

- **"Not configured"**: save both the personal API key and the project ID in the settings page.
- **401**: wrong key, or the key belongs to the other cloud region — check `host`.
- **403**: the key is missing the `query:read` scope or has no access to the project.
- **Stale numbers**: results are cached for 5 minutes (15 seconds for realtime visitors).
