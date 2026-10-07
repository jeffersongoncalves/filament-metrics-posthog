<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'PostHog',
    'title' => 'Настройки PostHog',
    'sections' => [
        'api_configuration' => 'Настройка API',
        'advanced_settings' => 'Расширенные настройки',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Персональный API-ключ',
            'helper' => 'Персональный API-ключ PostHog с областью query:read. Создайте его в Settings > Personal API keys. Хранится в зашифрованном виде.',
        ],
        'project_id' => [
            'label' => 'ID проекта',
            'helper' => 'Числовой ID проекта, указан в PostHog в разделе Project settings.',
        ],
        'host' => [
            'label' => 'Хост',
            'helper' => 'https://us.posthog.com (облако США), https://eu.posthog.com (облако ЕС) или URL вашего самостоятельно размещённого экземпляра.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Посетителей сейчас',
            'visitors' => 'Уникальные посетители',
            'pageviews' => 'Просмотры',
            'bounce_rate' => 'Показатель отказов',
            'visit_duration' => 'Длительность визита',
        ],
        'visitors_chart' => [
            'label' => 'Посетители и просмотры (последние 30 дней)',
            'visitors' => 'Посетители',
            'pageviews' => 'Просмотры',
        ],
        'top_pages' => [
            'label' => 'Популярные страницы',
            'page' => 'Страница',
        ],
        'top_sources' => [
            'label' => 'Основные источники',
            'source' => 'Источник',
        ],
        'top_countries' => [
            'label' => 'Основные страны',
            'country' => 'Страна',
        ],
        'top_browsers' => [
            'label' => 'Популярные браузеры',
        ],
        'top_devices' => [
            'label' => 'Устройства',
        ],
        'visitors' => 'Посетители',
        'pageviews' => 'Просмотры',
        'bounce_rate' => 'Показатель отказов',
        'last_30_days' => 'Последние 30 дней',
        'direct' => 'Прямой заход / Нет',
        'unknown' => 'Неизвестно',
        'not_configured' => 'Не настроено',
        'not_configured_description' => 'Укажите персональный API-ключ и ID проекта PostHog в настройках.',
        'no_data' => 'Нет данных',
        'error' => 'Ошибка загрузки данных',
    ],
];
