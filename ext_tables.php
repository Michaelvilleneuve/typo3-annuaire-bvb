<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'BVB.' . $_EXTKEY,
	'Bvb1',
	'RépertoireContact'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_bvb1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_bvb1.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'BVB.' . $_EXTKEY,
	'Bvb2',
	'RépertoireOrganisme'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_bvb2';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_bvb2.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'BVB.' . $_EXTKEY,
	'Bvb3',
	'rechercheRépertoire'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_bvb3';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_bvb3.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'AnnuaireBVB');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairebvb_domain_model_organisme', 'EXT:annuaire_bvb/Resources/Private/Language/locallang_csh_tx_annuairebvb_domain_model_organisme.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairebvb_domain_model_organisme');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairebvb_domain_model_contact', 'EXT:annuaire_bvb/Resources/Private/Language/locallang_csh_tx_annuairebvb_domain_model_contact.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairebvb_domain_model_contact');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairebvb_domain_model_fonction', 'EXT:annuaire_bvb/Resources/Private/Language/locallang_csh_tx_annuairebvb_domain_model_fonction.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairebvb_domain_model_fonction');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairebvb_domain_model_service', 'EXT:annuaire_bvb/Resources/Private/Language/locallang_csh_tx_annuairebvb_domain_model_service.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairebvb_domain_model_service');
