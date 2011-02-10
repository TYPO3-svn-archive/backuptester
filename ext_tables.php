<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Backup Tester');




t3lib_extMgm::addLLrefForTCAdescr('tx_backuptester_domain_model_backup', 'EXT:backuptester/Resources/Private/Language/locallang_csh_tx_backuptester_domain_model_backup.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_backuptester_domain_model_backup');
$TCA['tx_backuptester_domain_model_backup'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:backuptester/Resources/Private/Language/locallang_db.xml:tx_backuptester_domain_model_backup',
		'label' 			=> 'files',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Backup.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_backuptester_domain_model_backup.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_backuptester_domain_model_files', 'EXT:backuptester/Resources/Private/Language/locallang_csh_tx_backuptester_domain_model_files.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_backuptester_domain_model_files');
$TCA['tx_backuptester_domain_model_files'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:backuptester/Resources/Private/Language/locallang_db.xml:tx_backuptester_domain_model_files',
		'label' 			=> 'uid',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Files.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_backuptester_domain_model_files.gif'
	)
);


?>