# Changelog

All notable changes to this project will be documented in this file.

## 2.1.0 - 2026-10-09

`Plugin::make()->navigationGroup(string|Closure)` puts the settings page in one of your panel's own navigation groups (requires filament-analytics-core 2.1). Without it the translated group is kept.

## 2.0.0 - 2026-10-06

First release for Filament 4.x.

PostHog dashboard widgets for Filament on top of [jeffersongoncalves/laravel-metrics-posthog](https://github.com/jeffersongoncalves/laravel-metrics-posthog):

- `RealtimeVisitorsWidget`, `VisitorsChartWidget`
- `TopPagesWidget`, `TopSourcesWidget`, `TopCountriesWidget`
- `TopBrowsersWidget`, `TopDevicesWidget`
- Settings page powered by Spatie Laravel Settings
- Translations in 18 languages
