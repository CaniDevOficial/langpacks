<?php
/**
 * [German [De]]
 * @package cBB QuickMod
 * @version 1.1.5 20/10/2023
 *
 * @copyright (c) 2023 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CAT_QUICKMOD'				=> 'QuickMod',
	'ACP_QUICKMOD_CONFIG'			=> 'Konfiguration',
	'ACP_QUICKMOD_CONFIG_EXPLAIN'	=> 'Hier erfolgt die Konfiguration der Erweiterung.<br />Um die Schaltflächen anzuordnen, ziehe sie in der unteren Liste an die gewünschte Position. Die Sichtbarkeit der Schaltflächen hängt von den Benutzerrechten und dem Satus des Beitrags ab.',
	'QM_MAIN_CONFIG'		=> 'Konfiguration',
	'QM_CONFIRM'			=> 'Bestätigungsdialog',
	'QM_CONFIRM_EXPLAIN'	=> 'Den Bestätigungsdialog beim Schnellzugriff aktivieren/deaktivieren.',
	'QM_BUTTON_MANAGE'		=> 'Verwaltung der Schnellzugriffs-Funktionen',

	'QM_TYPE'				=> 'Aussehen der Icons',
	'QM_TYPE_EXPLAIN'		=> 'Wähle das Aussehen der Schnellzugriffs-Icons im Forum.',
	'QM_TYPE_ICON'			=> 'Icons',
	'QM_TYPE_MENU'			=> 'Kontextmenü',

	'BUTTONS_AVAILABLE'			=> 'Verfügbare Funktionen',
	'BUTTONS_SELECTED'			=> 'Aktivierte Funktionen',

	'LOG_QUICKMOD_CONFIG'	=> '<strong>cBB QuickMod:</strong> Konfiguration geändert',
]);
