<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'PostHog',
    'title' => 'Configurações do PostHog',
    'sections' => [
        'api_configuration' => 'Configuração da API',
        'advanced_settings' => 'Configurações avançadas',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Chave de API pessoal',
            'helper' => 'Uma chave de API pessoal do PostHog com o escopo query:read. Crie uma em Settings > Personal API keys. Armazenada criptografada.',
        ],
        'project_id' => [
            'label' => 'ID do projeto',
            'helper' => 'ID numérico do projeto, disponível no PostHog em Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (nuvem EUA), https://eu.posthog.com (nuvem UE) ou a URL da sua instância auto-hospedada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes agora',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Visualizações de página',
            'bounce_rate' => 'Taxa de rejeição',
            'visit_duration' => 'Duração da visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes e visualizações (últimos 30 dias)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Visualizações',
        ],
        'top_pages' => [
            'label' => 'Páginas mais acessadas',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principais origens',
            'source' => 'Origem',
        ],
        'top_countries' => [
            'label' => 'Principais países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principais navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Visualizações',
        'bounce_rate' => 'Taxa de rejeição',
        'last_30_days' => 'Últimos 30 dias',
        'direct' => 'Direto / Nenhum',
        'unknown' => 'Desconhecido',
        'not_configured' => 'Não configurado',
        'not_configured_description' => 'Configure a chave de API pessoal e o ID do projeto do PostHog nas Configurações.',
        'no_data' => 'Nenhum dado disponível',
        'error' => 'Erro ao carregar os dados',
    ],
];
