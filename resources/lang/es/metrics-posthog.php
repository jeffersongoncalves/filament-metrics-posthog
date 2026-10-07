<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'PostHog',
    'title' => 'Configuración de PostHog',
    'sections' => [
        'api_configuration' => 'Configuración de la API',
        'advanced_settings' => 'Configuración avanzada',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Clave de API personal',
            'helper' => 'Una clave de API personal de PostHog con el alcance query:read. Créala en Settings > Personal API keys. Se almacena cifrada.',
        ],
        'project_id' => [
            'label' => 'ID del proyecto',
            'helper' => 'ID numérico del proyecto, disponible en PostHog en Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (nube de EE. UU.), https://eu.posthog.com (nube de la UE) o la URL de tu instancia autoalojada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes ahora mismo',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Páginas vistas',
            'bounce_rate' => 'Tasa de rebote',
            'visit_duration' => 'Duración de la visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes y páginas vistas (últimos 30 días)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Páginas vistas',
        ],
        'top_pages' => [
            'label' => 'Páginas principales',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principales fuentes',
            'source' => 'Fuente',
        ],
        'top_countries' => [
            'label' => 'Principales países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principales navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Páginas vistas',
        'bounce_rate' => 'Tasa de rebote',
        'last_30_days' => 'Últimos 30 días',
        'direct' => 'Directo / Ninguno',
        'unknown' => 'Desconocido',
        'not_configured' => 'No configurado',
        'not_configured_description' => 'Configura la clave de API personal y el ID del proyecto de PostHog en Configuración.',
        'no_data' => 'No hay datos disponibles',
        'error' => 'Error al cargar los datos',
    ],
];
