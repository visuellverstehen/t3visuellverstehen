<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3visuellverstehen',
    'description' => 'Show a small icon in the Toolbar to provide support information.',
    'category' => 'be',
    'author' => 'visuellverstehen',
    'author_email' => 'kontakt@visuellverstehen.de',
    'author_company' => 'visuellverstehen',
    'state' => 'stable',
    'clearCacheOnLoad' => false,
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
        ]
    ]
];
