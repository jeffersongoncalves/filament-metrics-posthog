<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog-Einstellungen',
    'sections' => [
        'api_configuration' => 'API-Konfiguration',
        'advanced_settings' => 'Erweiterte Einstellungen',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Persönlicher API-Schlüssel',
            'helper' => 'Ein persönlicher PostHog-API-Schlüssel mit dem Scope query:read. Erstellen Sie ihn unter Settings > Personal API keys. Wird verschlüsselt gespeichert.',
        ],
        'project_id' => [
            'label' => 'Projekt-ID',
            'helper' => 'Numerische Projekt-ID, zu finden in PostHog unter Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (US-Cloud), https://eu.posthog.com (EU-Cloud) oder die URL Ihrer selbst gehosteten Instanz.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Besucher gerade online',
            'visitors' => 'Eindeutige Besucher',
            'pageviews' => 'Seitenaufrufe',
            'bounce_rate' => 'Absprungrate',
            'visit_duration' => 'Besuchsdauer',
        ],
        'visitors_chart' => [
            'label' => 'Besucher & Seitenaufrufe (letzte 30 Tage)',
            'visitors' => 'Besucher',
            'pageviews' => 'Seitenaufrufe',
        ],
        'top_pages' => [
            'label' => 'Top-Seiten',
            'page' => 'Seite',
        ],
        'top_sources' => [
            'label' => 'Top-Quellen',
            'source' => 'Quelle',
        ],
        'top_countries' => [
            'label' => 'Top-Länder',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Top-Browser',
        ],
        'top_devices' => [
            'label' => 'Geräte',
        ],
        'visitors' => 'Besucher',
        'pageviews' => 'Seitenaufrufe',
        'bounce_rate' => 'Absprungrate',
        'last_30_days' => 'Letzte 30 Tage',
        'direct' => 'Direkt / Keine',
        'unknown' => 'Unbekannt',
        'not_configured' => 'Nicht konfiguriert',
        'not_configured_description' => 'Konfigurieren Sie den persönlichen PostHog-API-Schlüssel und die Projekt-ID in den Einstellungen.',
        'no_data' => 'Keine Daten verfügbar',
        'error' => 'Fehler beim Laden der Daten',
    ],
];
