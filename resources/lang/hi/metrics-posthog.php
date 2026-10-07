<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog सेटिंग्स',
    'sections' => [
        'api_configuration' => 'API कॉन्फ़िगरेशन',
        'advanced_settings' => 'उन्नत सेटिंग्स',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => 'व्यक्तिगत API कुंजी',
            'helper' => 'query:read स्कोप वाली PostHog व्यक्तिगत API कुंजी। इसे Settings > Personal API keys में बनाएँ। एन्क्रिप्टेड रूप में संग्रहीत।',
        ],
        'project_id' => [
            'label' => 'प्रोजेक्ट ID',
            'helper' => 'प्रोजेक्ट की संख्यात्मक ID, जो PostHog में Project settings में मिलती है।',
        ],
        'host' => [
            'label' => 'होस्ट',
            'helper' => 'https://us.posthog.com (US क्लाउड), https://eu.posthog.com (EU क्लाउड) या आपके सेल्फ-होस्टेड इंस्टेंस का URL।',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'अभी आगंतुक',
            'visitors' => 'अद्वितीय आगंतुक',
            'pageviews' => 'पेज व्यू',
            'bounce_rate' => 'बाउंस दर',
            'visit_duration' => 'विज़िट अवधि',
        ],
        'visitors_chart' => [
            'label' => 'आगंतुक और पेज व्यू (पिछले 30 दिन)',
            'visitors' => 'आगंतुक',
            'pageviews' => 'पेज व्यू',
        ],
        'top_pages' => [
            'label' => 'शीर्ष पेज',
            'page' => 'पेज',
        ],
        'top_sources' => [
            'label' => 'शीर्ष स्रोत',
            'source' => 'स्रोत',
        ],
        'top_countries' => [
            'label' => 'शीर्ष देश',
            'country' => 'देश',
        ],
        'top_browsers' => [
            'label' => 'शीर्ष ब्राउज़र',
        ],
        'top_devices' => [
            'label' => 'डिवाइस',
        ],
        'visitors' => 'आगंतुक',
        'pageviews' => 'पेज व्यू',
        'bounce_rate' => 'बाउंस दर',
        'last_30_days' => 'पिछले 30 दिन',
        'direct' => 'डायरेक्ट / कोई नहीं',
        'unknown' => 'अज्ञात',
        'not_configured' => 'कॉन्फ़िगर नहीं है',
        'not_configured_description' => 'सेटिंग्स में PostHog व्यक्तिगत API कुंजी और प्रोजेक्ट ID कॉन्फ़िगर करें।',
        'no_data' => 'कोई डेटा उपलब्ध नहीं',
        'error' => 'डेटा लोड करने में त्रुटि',
    ],
];
