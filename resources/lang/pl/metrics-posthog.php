<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'PostHog',
    'title' => 'Ustawienia PostHog',
    'sections' => [
        'api_configuration' => 'Konfiguracja API',
        'advanced_settings' => 'Ustawienia zaawansowane',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'Osobisty klucz API',
            'helper' => 'Osobisty klucz API PostHog z zakresem query:read. Utwórz go w Settings > Personal API keys. Przechowywany w postaci zaszyfrowanej.',
        ],
        'project_id' => [
            'label' => 'ID projektu',
            'helper' => 'Numeryczny identyfikator projektu, dostępny w PostHog w Project settings.',
        ],
        'host' => [
            'label' => 'Host',
            'helper' => 'https://us.posthog.com (chmura USA), https://eu.posthog.com (chmura UE) lub URL Twojej instancji self-hosted.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Odwiedzający teraz',
            'visitors' => 'Unikalni odwiedzający',
            'pageviews' => 'Odsłony',
            'bounce_rate' => 'Współczynnik odrzuceń',
            'visit_duration' => 'Czas wizyty',
        ],
        'visitors_chart' => [
            'label' => 'Odwiedzający i odsłony (ostatnie 30 dni)',
            'visitors' => 'Odwiedzający',
            'pageviews' => 'Odsłony',
        ],
        'top_pages' => [
            'label' => 'Najpopularniejsze strony',
            'page' => 'Strona',
        ],
        'top_sources' => [
            'label' => 'Główne źródła',
            'source' => 'Źródło',
        ],
        'top_countries' => [
            'label' => 'Najczęstsze kraje',
            'country' => 'Kraj',
        ],
        'top_browsers' => [
            'label' => 'Najpopularniejsze przeglądarki',
        ],
        'top_devices' => [
            'label' => 'Urządzenia',
        ],
        'visitors' => 'Odwiedzający',
        'pageviews' => 'Odsłony',
        'bounce_rate' => 'Współczynnik odrzuceń',
        'last_30_days' => 'Ostatnie 30 dni',
        'direct' => 'Bezpośrednio / Brak',
        'unknown' => 'Nieznane',
        'not_configured' => 'Nieskonfigurowane',
        'not_configured_description' => 'Skonfiguruj osobisty klucz API i ID projektu PostHog w Ustawieniach.',
        'no_data' => 'Brak danych',
        'error' => 'Błąd podczas ładowania danych',
    ],
];
