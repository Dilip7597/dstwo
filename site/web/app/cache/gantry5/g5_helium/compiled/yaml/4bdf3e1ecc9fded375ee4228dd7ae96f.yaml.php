<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/srv/www/www.dsourc.com/current/web/app/themes/g5_helium/blueprints/content/blog/featured-image.yaml',
    'modified' => 1508313060,
    'data' => [
        'name' => 'Featured Image',
        'description' => 'Options for displaying featured image',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display featured image on blog page.',
                    'default' => 1
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Image Width',
                    'description' => 'Image width in pixels.',
                    'default' => 1200
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Image Height',
                    'description' => 'Image height in pixels.',
                    'default' => 350
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Image Position',
                    'description' => 'Choose if the image should be aligned to left, right or none.',
                    'default' => 'none',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right',
                        'none' => 'None'
                    ]
                ]
            ]
        ]
    ]
];
