<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey   = 't3v_translations';
$extensionTitle = 'T3v Translations';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);
