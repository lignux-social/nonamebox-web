<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/gus/Workspace/grav_nnb/user/themes/big-picture/blueprints/modular/intro.yaml',
    'modified' => 1502029367,
    'data' => [
        'title' => 'Intro',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.heading' => [
                                    'type' => 'text',
                                    'label' => 'Heading',
                                    'help' => 'Section\'s heading.'
                                ],
                                'header.background_image' => [
                                    'type' => 'text',
                                    'label' => 'Background Image',
                                    'help' => 'Image filename that exists in the page folder.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
