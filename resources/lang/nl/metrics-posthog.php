<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog-instellingen',
    'sections' => [
        'api_configuration' => 'API-configuratie',
        'advanced_settings' => 'Geavanceerde instellingen',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Persoonlijke API-sleutel',
            'helper' => 'Een persoonlijke PostHog-API-sleutel met de scope query:read. Maak er een aan onder Settings > Personal API keys. Wordt versleuteld opgeslagen.',
        ],
        'project_id' => [
            'label' => 'Project-ID',
            'helper' => 'Numerieke project-ID, te vinden in PostHog onder Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (VS-cloud), https://eu.posthog.com (EU-cloud) of de URL van je zelfgehoste instantie.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Bezoekers op dit moment',
            'visitors' => 'Unieke bezoekers',
            'pageviews' => 'Paginaweergaven',
            'bounce_rate' => 'Bouncepercentage',
            'visit_duration' => 'Bezoekduur',
        ],
        'visitors_chart' => [
            'label' => 'Bezoekers en paginaweergaven (laatste 30 dagen)',
            'visitors' => 'Bezoekers',
            'pageviews' => 'Paginaweergaven',
        ],
        'top_pages' => [
            'label' => 'Toppagina\'s',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Topbronnen',
            'source' => 'Bron',
        ],
        'top_countries' => [
            'label' => 'Toplanden',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Topbrowsers',
        ],
        'top_devices' => [
            'label' => 'Apparaten',
        ],
        'visitors' => 'Bezoekers',
        'pageviews' => 'Paginaweergaven',
        'bounce_rate' => 'Bouncepercentage',
        'last_30_days' => 'Laatste 30 dagen',
        'direct' => 'Direct / Geen',
        'unknown' => 'Onbekend',
        'not_configured' => 'Niet geconfigureerd',
        'not_configured_description' => 'Configureer de persoonlijke PostHog-API-sleutel en project-ID in Instellingen.',
        'no_data' => 'Geen gegevens beschikbaar',
        'error' => 'Fout bij het laden van gegevens',
    ],
];
