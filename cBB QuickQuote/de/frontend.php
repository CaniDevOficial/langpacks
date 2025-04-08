<?php
/**
 * [German [De]]
 * @package cBB QuickQuote
 * @version 1.0.5 08/04/2025
 *
 * @copyright (c) 2025 CaniDev
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
	'QQ_INSERT'				=> 'Einfügen',
	'QQ_INSERT_ALL'			=> 'Alle einfügen',
	'QQ_INSERT_QUOTES'		=> 'Zitate einfügen',
	'QQ_INSERT_SELECTED'	=> 'Gewählte einfügen',
	'QQ_REMOVE'				=> 'Entfernen',
	'QQ_REMOVE_ALL'			=> 'Alle entfernen',
	'QQ_REMOVE_SELECTED'	=> 'Gewählte entfernen',
	'QQ_REPLY'				=> 'Antwort',
	'QQ_SAVE_QUOTE'			=> 'Zitat speichern',
	'QUOTES'				=> 'Zitate',

	'CORE_INSTALL_ERROR'	=> 'Es wurden nicht alle Dateien aus dem Installationspaket hochgeladen oder es wird versucht, eine alte Version zu installieren.<br />
		Bitte lade alle Dateien (inklusive des <em>core</em>-Ordners) hoch und beziehe das Paket von der offiziellen Website.',
]);
