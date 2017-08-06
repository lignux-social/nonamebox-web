<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/gus/Workspace/grav_nnb/user/config/site.yaml',
    'modified' => 1502035914,
    'data' => [
        'title' => 'No Name Box',
        'logo' => '/user/images/gus_nnblogo.png',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Agustí Montes',
            'email' => 'amontes@nnbox.org'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
