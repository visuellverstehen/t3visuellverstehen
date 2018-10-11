<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][] = \VV\T3visuellverstehen\ToolbarItems\ContactToolbarItem::class;
