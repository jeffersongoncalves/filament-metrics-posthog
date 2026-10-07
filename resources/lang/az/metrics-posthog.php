<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog parametrləri',
    'sections' => [
        'api_configuration' => 'API konfiqurasiyası',
        'advanced_settings' => 'Qabaqcıl parametrlər',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Şəxsi API açarı',
            'helper' => 'query:read icazəsi olan PostHog şəxsi API açarı. Settings > Personal API keys bölməsində yaradın. Şifrələnmiş şəkildə saxlanılır.',
        ],
        'project_id' => [
            'label' => 'Layihə ID',
            'helper' => 'Rəqəmsal layihə ID-si; PostHog-da Project settings bölməsində tapılır.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (ABŞ buludu), https://eu.posthog.com (AB buludu) və ya öz serverinizdəki nüsxənin URL-i.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hazırda ziyarətçilər',
            'visitors' => 'Unikal ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
            'bounce_rate' => 'İmtina dərəcəsi',
            'visit_duration' => 'Ziyarət müddəti',
        ],
        'visitors_chart' => [
            'label' => 'Ziyarətçilər və səhifə baxışları (son 30 gün)',
            'visitors' => 'Ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
        ],
        'top_pages' => [
            'label' => 'Ən populyar səhifələr',
            'page' => 'Səhifə',
        ],
        'top_sources' => [
            'label' => 'Əsas mənbələr',
            'source' => 'Mənbə',
        ],
        'top_countries' => [
            'label' => 'Ən çox ölkələr',
            'country' => 'Ölkə',
        ],
        'top_browsers' => [
            'label' => 'Ən populyar brauzerlər',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyarətçilər',
        'pageviews' => 'Səhifə baxışları',
        'bounce_rate' => 'İmtina dərəcəsi',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Birbaşa / Yoxdur',
        'unknown' => 'Naməlum',
        'not_configured' => 'Konfiqurasiya edilməyib',
        'not_configured_description' => 'PostHog şəxsi API açarını və layihə ID-sini Parametrlərdə konfiqurasiya edin.',
        'no_data' => 'Məlumat yoxdur',
        'error' => 'Məlumat yüklənərkən xəta',
    ],
];
