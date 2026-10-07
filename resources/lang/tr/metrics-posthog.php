<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog ayarları',
    'sections' => [
        'api_configuration' => 'API yapılandırması',
        'advanced_settings' => 'Gelişmiş ayarlar',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Kişisel API anahtarı',
            'helper' => 'query:read kapsamına sahip bir PostHog kişisel API anahtarı. Settings > Personal API keys altında oluşturun. Şifrelenmiş olarak saklanır.',
        ],
        'project_id' => [
            'label' => 'Proje kimliği',
            'helper' => 'Sayısal proje kimliği; PostHog\'da Project settings altında bulunur.',
        ],
        'host' => [
            'label' => 'Sunucu',
            'helper' => 'https://us.posthog.com (ABD bulutu), https://eu.posthog.com (AB bulutu) veya kendi barındırdığınız örneğin URL\'si.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Şu anki ziyaretçiler',
            'visitors' => 'Tekil ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
            'bounce_rate' => 'Hemen çıkma oranı',
            'visit_duration' => 'Ziyaret süresi',
        ],
        'visitors_chart' => [
            'label' => 'Ziyaretçiler ve sayfa görüntülemeleri (son 30 gün)',
            'visitors' => 'Ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
        ],
        'top_pages' => [
            'label' => 'En popüler sayfalar',
            'page' => 'Sayfa',
        ],
        'top_sources' => [
            'label' => 'En önemli kaynaklar',
            'source' => 'Kaynak',
        ],
        'top_countries' => [
            'label' => 'En çok ülkeler',
            'country' => 'Ülke',
        ],
        'top_browsers' => [
            'label' => 'En popüler tarayıcılar',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyaretçiler',
        'pageviews' => 'Sayfa görüntülemeleri',
        'bounce_rate' => 'Hemen çıkma oranı',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Doğrudan / Yok',
        'unknown' => 'Bilinmiyor',
        'not_configured' => 'Yapılandırılmadı',
        'not_configured_description' => 'PostHog kişisel API anahtarını ve proje kimliğini Ayarlar\'da yapılandırın.',
        'no_data' => 'Veri yok',
        'error' => 'Veriler yüklenirken hata oluştu',
    ],
];
