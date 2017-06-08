<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BVB.' . $_EXTKEY,
	'Bvb1',
	array(
		'Contact' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BVB.' . $_EXTKEY,
	'Bvb2',
	array(
		'Organisme' => 'list, show, contactList, serviceList, serviceShow',
		
	),
	// non-cacheable actions
	array(
		'Organisme' => 'list, contactList, serviceList',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BVB.' . $_EXTKEY,
	'Bvb3',
	array(
		'Contact' => 'search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => 'search',
		
	)
);
