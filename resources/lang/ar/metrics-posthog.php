<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'PostHog',
    'title' => 'إعدادات PostHog',
    'sections' => [
        'api_configuration' => 'إعدادات API',
        'advanced_settings' => 'إعدادات متقدمة',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'مفتاح API شخصي',
            'helper' => 'مفتاح API شخصي من PostHog بنطاق query:read. أنشئه من Settings > Personal API keys. يُخزَّن مشفرًا.',
        ],
        'project_id' => [
            'label' => 'معرّف المشروع',
            'helper' => 'المعرّف الرقمي للمشروع، ويمكن إيجاده في PostHog ضمن Project settings.',
        ],
        'host' => [
            'label' => 'المضيف',
            'helper' => 'https://us.posthog.com (السحابة الأمريكية) أو https://eu.posthog.com (السحابة الأوروبية) أو رابط نسختك المستضافة ذاتيًا.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'الزوار الآن',
            'visitors' => 'الزوار الفريدون',
            'pageviews' => 'مشاهدات الصفحات',
            'bounce_rate' => 'معدل الارتداد',
            'visit_duration' => 'مدة الزيارة',
        ],
        'visitors_chart' => [
            'label' => 'الزوار ومشاهدات الصفحات (آخر 30 يومًا)',
            'visitors' => 'الزوار',
            'pageviews' => 'مشاهدات الصفحات',
        ],
        'top_pages' => [
            'label' => 'أهم الصفحات',
            'page' => 'الصفحة',
        ],
        'top_sources' => [
            'label' => 'أهم المصادر',
            'source' => 'المصدر',
        ],
        'top_countries' => [
            'label' => 'أهم الدول',
            'country' => 'الدولة',
        ],
        'top_browsers' => [
            'label' => 'أهم المتصفحات',
        ],
        'top_devices' => [
            'label' => 'الأجهزة',
        ],
        'visitors' => 'الزوار',
        'pageviews' => 'مشاهدات الصفحات',
        'bounce_rate' => 'معدل الارتداد',
        'last_30_days' => 'آخر 30 يومًا',
        'direct' => 'مباشر / لا شيء',
        'unknown' => 'غير معروف',
        'not_configured' => 'غير مُعد',
        'not_configured_description' => 'اضبط مفتاح API الشخصي ومعرّف المشروع الخاصين بـ PostHog في الإعدادات.',
        'no_data' => 'لا توجد بيانات',
        'error' => 'خطأ في تحميل البيانات',
    ],
];
