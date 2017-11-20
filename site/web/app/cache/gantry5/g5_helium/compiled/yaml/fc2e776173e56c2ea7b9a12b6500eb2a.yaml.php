<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/srv/www/www.dsourc.com/current/web/app/themes/g5_helium/blueprints/content/page/title.yaml',
    'modified' => 1508313060,
    'data' => [
        'name' => 'Page Title',
        'description' => 'Options for displaying title',
        'type' => 'page',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display page title.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link title to the page.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
