<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'PostHog',
    'title' => 'Impostazioni di PostHog',
    'sections' => [
        'api_configuration' => 'Configurazione API',
        'advanced_settings' => 'Impostazioni avanzate',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Chiave API personale',
            'helper' => 'Una chiave API personale di PostHog con l\'ambito query:read. Creala in Settings > Personal API keys. Memorizzata cifrata.',
        ],
        'project_id' => [
            'label' => 'ID progetto',
            'helper' => 'ID numerico del progetto, disponibile in PostHog in Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (cloud USA), https://eu.posthog.com (cloud UE) o l\'URL della tua istanza self-hosted.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitatori in questo momento',
            'visitors' => 'Visitatori unici',
            'pageviews' => 'Visualizzazioni',
            'bounce_rate' => 'Frequenza di rimbalzo',
            'visit_duration' => 'Durata della visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitatori e visualizzazioni (ultimi 30 giorni)',
            'visitors' => 'Visitatori',
            'pageviews' => 'Visualizzazioni',
        ],
        'top_pages' => [
            'label' => 'Pagine principali',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Sorgenti principali',
            'source' => 'Sorgente',
        ],
        'top_countries' => [
            'label' => 'Paesi principali',
            'country' => 'Paese',
        ],
        'top_browsers' => [
            'label' => 'Browser principali',
        ],
        'top_devices' => [
            'label' => 'Dispositivi',
        ],
        'visitors' => 'Visitatori',
        'pageviews' => 'Visualizzazioni',
        'bounce_rate' => 'Frequenza di rimbalzo',
        'last_30_days' => 'Ultimi 30 giorni',
        'direct' => 'Diretto / Nessuno',
        'unknown' => 'Sconosciuto',
        'not_configured' => 'Non configurato',
        'not_configured_description' => 'Configura la chiave API personale e l\'ID progetto di PostHog nelle Impostazioni.',
        'no_data' => 'Nessun dato disponibile',
        'error' => 'Errore durante il caricamento dei dati',
    ],
];
