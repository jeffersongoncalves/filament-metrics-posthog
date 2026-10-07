<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog sozlamalari',
    'sections' => [
        'api_configuration' => 'API konfiguratsiyasi',
        'advanced_settings' => 'Kengaytirilgan sozlamalar',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Shaxsiy API kaliti',
            'helper' => 'query:read ruxsatiga ega PostHog shaxsiy API kaliti. Uni Settings > Personal API keys boʻlimida yarating. Shifrlangan holda saqlanadi.',
        ],
        'project_id' => [
            'label' => 'Loyiha ID',
            'helper' => 'Loyihaning raqamli IDʼsi, PostHogʼda Project settings boʻlimida joylashgan.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (AQSh buluti), https://eu.posthog.com (YeI buluti) yoki oʻzingiz joylashtirgan nusxaning URL manzili.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hozirgi tashrif buyuruvchilar',
            'visitors' => 'Noyob tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
            'bounce_rate' => 'Rad etish darajasi',
            'visit_duration' => 'Tashrif davomiyligi',
        ],
        'visitors_chart' => [
            'label' => 'Tashrif buyuruvchilar va sahifa koʻrishlari (oxirgi 30 kun)',
            'visitors' => 'Tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
        ],
        'top_pages' => [
            'label' => 'Eng mashhur sahifalar',
            'page' => 'Sahifa',
        ],
        'top_sources' => [
            'label' => 'Asosiy manbalar',
            'source' => 'Manba',
        ],
        'top_countries' => [
            'label' => 'Asosiy mamlakatlar',
            'country' => 'Mamlakat',
        ],
        'top_browsers' => [
            'label' => 'Eng mashhur brauzerlar',
        ],
        'top_devices' => [
            'label' => 'Qurilmalar',
        ],
        'visitors' => 'Tashrif buyuruvchilar',
        'pageviews' => 'Sahifa koʻrishlari',
        'bounce_rate' => 'Rad etish darajasi',
        'last_30_days' => 'Oxirgi 30 kun',
        'direct' => 'Toʻgʻridan-toʻgʻri / Yoʻq',
        'unknown' => 'Nomaʼlum',
        'not_configured' => 'Sozlanmagan',
        'not_configured_description' => 'PostHog shaxsiy API kaliti va loyiha IDʼsini Sozlamalarda sozlang.',
        'no_data' => 'Maʼlumot yoʻq',
        'error' => 'Maʼlumotlarni yuklashda xato',
    ],
];
