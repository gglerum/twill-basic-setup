<?php

return [
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'general'],
        'primary_navigation' => [
            'section_name' => [
                'title' => 'Algemeen',
                'route' => 'admin.settings',
                'params' => ['section' => 'general']
            ],
        ]
    ],
];