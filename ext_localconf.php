<?php

defined('TYPO3_MODE') or defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][] = \VV\T3visuellverstehen\ToolbarItems\ContactToolbarItem::class;

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], [
    'EXTENSIONS' => [
        'backend' => [
            'loginFootnote' => 'Bei Fragen: hello@visuellverstehen.de',
        ],
    ],
]);
