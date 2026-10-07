<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'PostHog',
    'title' => 'تنظیمات PostHog',
    'sections' => [
        'api_configuration' => 'پیکربندی API',
        'advanced_settings' => 'تنظیمات پیشرفته',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'کلید API شخصی',
            'helper' => 'یک کلید API شخصی PostHog با دامنه دسترسی query:read. آن را در Settings > Personal API keys بسازید. به‌صورت رمزنگاری‌شده ذخیره می‌شود.',
        ],
        'project_id' => [
            'label' => 'شناسه پروژه',
            'helper' => 'شناسه عددی پروژه که در PostHog در بخش Project settings قرار دارد.',
        ],
        'host' => [
            'label' => 'میزبان',
            'helper' => 'https://us.posthog.com (ابر آمریکا)، https://eu.posthog.com (ابر اروپا) یا آدرس نمونه خودمیزبان شما.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'بازدیدکنندگان در همین لحظه',
            'visitors' => 'بازدیدکنندگان یکتا',
            'pageviews' => 'بازدید صفحات',
            'bounce_rate' => 'نرخ پرش',
            'visit_duration' => 'مدت بازدید',
        ],
        'visitors_chart' => [
            'label' => 'بازدیدکنندگان و بازدید صفحات (۳۰ روز اخیر)',
            'visitors' => 'بازدیدکنندگان',
            'pageviews' => 'بازدید صفحات',
        ],
        'top_pages' => [
            'label' => 'صفحات برتر',
            'page' => 'صفحه',
        ],
        'top_sources' => [
            'label' => 'منابع برتر',
            'source' => 'منبع',
        ],
        'top_countries' => [
            'label' => 'کشورهای برتر',
            'country' => 'کشور',
        ],
        'top_browsers' => [
            'label' => 'مرورگرهای برتر',
        ],
        'top_devices' => [
            'label' => 'دستگاه‌ها',
        ],
        'visitors' => 'بازدیدکنندگان',
        'pageviews' => 'بازدید صفحات',
        'bounce_rate' => 'نرخ پرش',
        'last_30_days' => '۳۰ روز اخیر',
        'direct' => 'مستقیم / هیچ',
        'unknown' => 'نامشخص',
        'not_configured' => 'پیکربندی نشده',
        'not_configured_description' => 'کلید API شخصی و شناسه پروژه PostHog را در تنظیمات پیکربندی کنید.',
        'no_data' => 'داده‌ای موجود نیست',
        'error' => 'خطا در بارگذاری داده‌ها',
    ],
];
