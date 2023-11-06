<?php
/**
 * [German [De]]
 * @package cBB Reactions
 * @version 1.0.1 15/01/2023
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
	'ACP_REACTIONS'			=> 'Reaktionen',
	'ACP_REACTIONS_CONFIG'	=> 'Konfiguration',
	'ACP_REACTIONS_MANAGE'	=> 'Reaktionen konfigurieren',

	'EXT_INSTALL_ERROR'		=> 'Diese Erweiterung ist inkompatibel mit bereits installierten Erweiterungen.<br />Für weitere Informationen bitte die Dokumentation lesen.',
	'CORE_INSTALL_ERROR'	=> 'Es wurden nicht alle Dateien aus dem Installationspaket hochgeladen oder es wird versucht, eine alte Version zu installieren.<br />
		Bitte lade alle Dateien (inklusive des <em>core</em>-Ordners) hoch und beziehe das Paket von der offiziellen Website.',
]);
