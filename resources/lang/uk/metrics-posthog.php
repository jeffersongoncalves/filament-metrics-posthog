<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'PostHog',
    'title' => 'Налаштування PostHog',
    'sections' => [
        'api_configuration' => 'Налаштування API',
        'advanced_settings' => 'Розширені налаштування',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Персональний API-ключ',
            'helper' => 'Персональний API-ключ PostHog з областю query:read. Створіть його в Settings > Personal API keys. Зберігається в зашифрованому вигляді.',
        ],
        'project_id' => [
            'label' => 'ID проєкту',
            'helper' => 'Числовий ID проєкту, вказаний у PostHog у розділі Project settings.',
        ],
        'host' => [
            'label' => 'Хост',
            'helper' => 'https://us.posthog.com (хмара США), https://eu.posthog.com (хмара ЄС) або URL вашого самостійно розміщеного екземпляра.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Відвідувачів зараз',
            'visitors' => 'Унікальні відвідувачі',
            'pageviews' => 'Перегляди',
            'bounce_rate' => 'Показник відмов',
            'visit_duration' => 'Тривалість візиту',
        ],
        'visitors_chart' => [
            'label' => 'Відвідувачі та перегляди (останні 30 днів)',
            'visitors' => 'Відвідувачі',
            'pageviews' => 'Перегляди',
        ],
        'top_pages' => [
            'label' => 'Популярні сторінки',
            'page' => 'Сторінка',
        ],
        'top_sources' => [
            'label' => 'Основні джерела',
            'source' => 'Джерело',
        ],
        'top_countries' => [
            'label' => 'Основні країни',
            'country' => 'Країна',
        ],
        'top_browsers' => [
            'label' => 'Популярні браузери',
        ],
        'top_devices' => [
            'label' => 'Пристрої',
        ],
        'visitors' => 'Відвідувачі',
        'pageviews' => 'Перегляди',
        'bounce_rate' => 'Показник відмов',
        'last_30_days' => 'Останні 30 днів',
        'direct' => 'Прямий захід / Немає',
        'unknown' => 'Невідомо',
        'not_configured' => 'Не налаштовано',
        'not_configured_description' => 'Вкажіть персональний API-ключ та ID проєкту PostHog у налаштуваннях.',
        'no_data' => 'Немає даних',
        'error' => 'Помилка завантаження даних',
    ],
];
