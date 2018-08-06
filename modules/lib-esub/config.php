<?php

return [
    '__name' => 'lib-esub',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-esub.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-esub' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibEsub\\Iface' => [
                'type' => 'file',
                'base' => 'modules/lib-esub/interface'
            ],
            'LibEsub\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-esub/library'
            ]
        ],
        'files' => []
    ],

    'libEsub' => []
];