<?php
/**
 * [German [De]]]
 * @package Ext Common Core
 * @version 1.1.3 20/10/2023
 *
 * @copyright (c) 2023 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACCEPT'					=> 'Akzeptieren',
	'ALL_GROUPS'				=> 'Alle Gruppen',
	'BATCH_ACTIONS'				=> 'Batch-Aktionen',
	'CONFIGURE'					=> 'Konfigurieren',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Dokumentation und Support',
	'EDIT'						=> 'Bearbeiten',
	'ENABLE_DISABLE'			=> '(De-)Aktivieren',
	'NO_ITEMS'					=> 'Keine Einträge verfügbar.',
	'REPORT_EXPLAIN'			=> 'Bitte füge so viele Informationen wie möglich über den Fehler hinzu.<br /><br />
		Zusätzlich zu dem hier Beschriebenen werden zum Zweck der Fehleranalyse grundlegende Informationen über die Ausführungsumgebung mitgeschickt.<br />
		<a href="https://www.canidev.com/api/report/documentation" onclick="window.open(this.href); return false;">Details anzeigen</a>',
	'REPORT_SENDED'				=> 'Bericht erfolgreich verschickt',
	'REPORT_TITLE'				=> 'Fehler melden',
	'SAVE'						=> 'Speichern',
	'SEND'						=> 'Senden',

	// Errors
	'ERROR_REPORT_SEND'			=> 'Der Bericht konnte nicht verschickt werden',
]);
