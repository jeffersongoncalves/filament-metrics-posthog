<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'PostHog',
    'title' => 'Paramètres de PostHog',
    'sections' => [
        'api_configuration' => 'Configuration de l\'API',
        'advanced_settings' => 'Paramètres avancés',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Clé API personnelle',
            'helper' => 'Une clé API personnelle PostHog avec la portée query:read. Créez-en une sous Settings > Personal API keys. Stockée chiffrée.',
        ],
        'project_id' => [
            'label' => 'ID du projet',
            'helper' => 'ID numérique du projet, disponible dans PostHog sous Project settings.',
        ],
        'host' => [
            'label' => 'Hôte',
            'helper' => 'https://us.posthog.com (cloud US), https://eu.posthog.com (cloud UE) ou l\'URL de votre instance auto-hébergée.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visiteurs en ce moment',
            'visitors' => 'Visiteurs uniques',
            'pageviews' => 'Pages vues',
            'bounce_rate' => 'Taux de rebond',
            'visit_duration' => 'Durée de visite',
        ],
        'visitors_chart' => [
            'label' => 'Visiteurs et pages vues (30 derniers jours)',
            'visitors' => 'Visiteurs',
            'pageviews' => 'Pages vues',
        ],
        'top_pages' => [
            'label' => 'Pages principales',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Principales sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Principaux pays',
            'country' => 'Pays',
        ],
        'top_browsers' => [
            'label' => 'Principaux navigateurs',
        ],
        'top_devices' => [
            'label' => 'Appareils',
        ],
        'visitors' => 'Visiteurs',
        'pageviews' => 'Pages vues',
        'bounce_rate' => 'Taux de rebond',
        'last_30_days' => '30 derniers jours',
        'direct' => 'Direct / Aucun',
        'unknown' => 'Inconnu',
        'not_configured' => 'Non configuré',
        'not_configured_description' => 'Configurez la clé API personnelle et l\'ID du projet PostHog dans les Paramètres.',
        'no_data' => 'Aucune donnée disponible',
        'error' => 'Erreur lors du chargement des données',
    ],
];
