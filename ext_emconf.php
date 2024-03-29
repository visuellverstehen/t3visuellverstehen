<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3visuellverstehen',
    'description' => 'Show a small icon in the TYPO3 backend toolbar to provide support information.',
    'category' => 'be',
    'author' => 'visuellverstehen',
    'author_email' => 'hello@visuellverstehen.de',
    'author_company' => 'visuellverstehen',
    'state' => 'stable',
    'clearCacheOnLoad' => false,
    'version' => '1.0.16',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-12.0.99',
        ]
    ]
];
