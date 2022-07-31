<?php

/**
 * Extension Manager/Repository config file for ext "samariterbund_leopold".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Samariterbund leopold',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HandalaDesign\\SamariterbundLeopold\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Khaled Ahmad',
    'author_email' => 'k.ahmad@handala-design.com',
    'author_company' => 'Handala Design',
    'version' => '1.0.0',
];
