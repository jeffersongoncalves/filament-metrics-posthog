<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog Settings',

    'sections' => [
        'api_configuration' => 'API Configuration',
        'advanced_settings' => 'Advanced Settings',
    ],

    'fields' => [
        'personal_api_key' => [
            'label' => 'Personal API key',
            'helper' => 'A PostHog personal API key with the query:read scope. Create one under Settings > Personal API keys. Stored encrypted.',
        ],
        'project_id' => [
            'label' => 'Project ID',
            'helper' => 'Numeric project ID, found in PostHog under Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (US cloud), https://eu.posthog.com (EU cloud) or the URL of your self-hosted instance.',
        ],
    ],

    'widgets' => [
        'realtime' => [
            'current' => 'Visitors right now',
            'visitors' => 'Unique Visitors',
            'pageviews' => 'Pageviews',
            'bounce_rate' => 'Bounce Rate',
            'visit_duration' => 'Visit Duration',
        ],
        'visitors_chart' => [
            'label' => 'Visitors & Pageviews (Last 30 Days)',
            'visitors' => 'Visitors',
            'pageviews' => 'Pageviews',
        ],
        'top_pages' => [
            'label' => 'Top Pages',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Top Sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Top Countries',
            'country' => 'Country',
        ],
        'top_browsers' => [
            'label' => 'Top Browsers',
        ],
        'top_devices' => [
            'label' => 'Devices',
        ],
        'visitors' => 'Visitors',
        'pageviews' => 'Pageviews',
        'bounce_rate' => 'Bounce Rate',
        'last_30_days' => 'Last 30 days',
        'direct' => 'Direct / None',
        'unknown' => 'Unknown',
        'not_configured' => 'Not Configured',
        'not_configured_description' => 'Configure the PostHog personal API key and project ID in Settings.',
        'no_data' => 'No data available',
        'error' => 'Error loading data',
    ],
];
