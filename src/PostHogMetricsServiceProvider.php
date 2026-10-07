<?php

namespace JeffersonGoncalves\Filament\MetricsPostHog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PostHogMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-metrics-posthog')
            ->hasTranslations()
            ->hasViews();
    }
}
