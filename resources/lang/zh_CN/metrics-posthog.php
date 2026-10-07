<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'PostHog',
    'title' => 'PostHog 设置',
    'sections' => [
        'api_configuration' => 'API 配置',
        'advanced_settings' => '高级设置',
    ],
    'fields' => [
        'personal_api_key' => [
            'label' => '个人 API 密钥',
            'helper' => '具有 query:read 权限范围的 PostHog 个人 API 密钥。在 Settings > Personal API keys 中创建。加密存储。',
        ],
        'project_id' => [
            'label' => '项目 ID',
            'helper' => '项目的数字 ID，可在 PostHog 的 Project settings 中找到。',
        ],
        'host' => [
            'label' => '主机',
            'helper' => 'https://us.posthog.com（美国云）、https://eu.posthog.com（欧盟云）或自托管实例的 URL。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '当前在线访客',
            'visitors' => '独立访客',
            'pageviews' => '页面浏览量',
            'bounce_rate' => '跳出率',
            'visit_duration' => '访问时长',
        ],
        'visitors_chart' => [
            'label' => '访客与页面浏览量（最近 30 天）',
            'visitors' => '访客',
            'pageviews' => '页面浏览量',
        ],
        'top_pages' => [
            'label' => '热门页面',
            'page' => '页面',
        ],
        'top_sources' => [
            'label' => '主要来源',
            'source' => '来源',
        ],
        'top_countries' => [
            'label' => '主要国家/地区',
            'country' => '国家/地区',
        ],
        'top_browsers' => [
            'label' => '主要浏览器',
        ],
        'top_devices' => [
            'label' => '设备',
        ],
        'visitors' => '访客',
        'pageviews' => '页面浏览量',
        'bounce_rate' => '跳出率',
        'last_30_days' => '最近 30 天',
        'direct' => '直接访问 / 无',
        'unknown' => '未知',
        'not_configured' => '未配置',
        'not_configured_description' => '请在设置中配置 PostHog 个人 API 密钥和项目 ID。',
        'no_data' => '暂无数据',
        'error' => '加载数据时出错',
    ],
];
