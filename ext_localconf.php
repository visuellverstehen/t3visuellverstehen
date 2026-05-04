<?php

defined('TYPO3') or die('Constant TYPO3 is not defined');

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], [
    'EXTENSIONS' => [
        'backend' => [
            'loginFootnote' => 'Bei Fragen: hello@visuellverstehen.de',
        ],
    ],
]);
