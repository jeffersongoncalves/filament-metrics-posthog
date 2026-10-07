<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog 設定',
    'sections' => [
        'api_configuration' => 'API 設定',
        'advanced_settings' => '詳細設定',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => '個人 API キー',
            'helper' => 'query:read スコープを持つ PostHog の個人 API キー。Settings > Personal API keys で作成します。暗号化して保存されます。',
        ],
        'project_id' => [
            'label' => 'プロジェクト ID',
            'helper' => 'プロジェクトの数値 ID。PostHog の Project settings で確認できます。',
        ],
        'host' => [
            'label' => 'ホスト',
            'helper' => 'https://us.posthog.com（US クラウド）、https://eu.posthog.com（EU クラウド）、またはセルフホストインスタンスの URL。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '現在の訪問者',
            'visitors' => 'ユニーク訪問者',
            'pageviews' => 'ページビュー',
            'bounce_rate' => '直帰率',
            'visit_duration' => '滞在時間',
        ],
        'visitors_chart' => [
            'label' => '訪問者とページビュー（過去 30 日間）',
            'visitors' => '訪問者',
            'pageviews' => 'ページビュー',
        ],
        'top_pages' => [
            'label' => '人気ページ',
            'page' => 'ページ',
        ],
        'top_sources' => [
            'label' => '主な流入元',
            'source' => '流入元',
        ],
        'top_countries' => [
            'label' => '上位の国',
            'country' => '国',
        ],
        'top_browsers' => [
            'label' => '主なブラウザ',
        ],
        'top_devices' => [
            'label' => 'デバイス',
        ],
        'visitors' => '訪問者',
        'pageviews' => 'ページビュー',
        'bounce_rate' => '直帰率',
        'last_30_days' => '過去 30 日間',
        'direct' => '直接 / なし',
        'unknown' => '不明',
        'not_configured' => '未設定',
        'not_configured_description' => '設定で PostHog の個人 API キーとプロジェクト ID を設定してください。',
        'no_data' => 'データがありません',
        'error' => 'データの読み込み中にエラーが発生しました',
    ],
];
