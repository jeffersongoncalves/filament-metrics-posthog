<div class="filament-hidden">

![Filament Metrics PostHog](https://raw.githubusercontent.com/jeffersongoncalves/filament-metrics-posthog/1.x/art/jeffersongoncalves-filament-metrics-posthog.png)

</div>

# Filament Metrics PostHog

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-metrics-posthog.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-posthog)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-metrics-posthog/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-metrics-posthog/actions?query=workflow%3ATests+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-metrics-posthog.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-posthog)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-metrics-posthog.svg?style=flat-square)](LICENSE.md)

[PostHog](https://posthog.com) web analytics dashboard widgets for Filament, with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings) to manage your PostHog personal API key, project ID and host directly from the admin panel. Works with PostHog Cloud (US/EU) and self-hosted instances.

Built on top of [jeffersongoncalves/laravel-metrics-posthog](https://github.com/jeffersongoncalves/laravel-metrics-posthog) (HogQL query API).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-metrics-posthog:"^1.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=metrics-posthog-settings-migrations
php artisan migrate
```

## Usage

Add the plugin to your Filament panel provider:

```php
use JeffersonGoncalves\Filament\MetricsPostHog\PostHogMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PostHogMetricsPlugin::make(),
        ]);
}
```

Then open **Settings > PostHog** in your panel and fill in a personal API key (with the `query:read` scope) and the project ID. Change the host under **Advanced Settings** for the EU cloud or a self-hosted instance.

### Widgets

All widgets cover the last 30 days and are cached (15s for realtime, 5 minutes for the rest):

| Widget | Shows |
|--------|-------|
| `RealtimeVisitorsWidget` | Visitors in the last 5 minutes, unique visitors, pageviews, bounce rate and session duration |
| `VisitorsChartWidget` | Daily visitors and pageviews line chart |
| `TopPagesWidget` | Top 10 pages by visitors |
| `TopSourcesWidget` | Top 10 referring domains |
| `TopCountriesWidget` | Top 10 countries |
| `TopBrowsersWidget` | Browsers doughnut chart |
| `TopDevicesWidget` | Device types doughnut chart |

### Customization

```php
PostHogMetricsPlugin::make()
    ->settingsPage(false) // hide the settings page
    ->widgets(false),     // don't register the dashboard widgets
```

With `widgets(false)` you can still place the widget classes on any page yourself.

## Requirements

- PHP 8.2 or higher
- Filament 3.x

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
