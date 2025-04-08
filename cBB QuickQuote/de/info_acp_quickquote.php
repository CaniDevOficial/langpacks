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
	'ACP_CAT_QUICKQUOTE'			=> 'QuickQuote',
	'ACP_QUICKQUOTE_CONFIG'			=> 'Konfiguration',
	'ACP_QUICKQUOTE_CONFIG_EXPLAIN'	=> 'Hier erfolgt die Konfiguration der Erweiterung.',

	'MAIN_OPTIONS'					=> 'Konfiguration',
	'QUICKQUOTE_FLOATBTN'			=> 'Schwebender Button',
	'QUICKQUOTE_FLOATBTN_EXPLAIN'	=> 'Wenn aktiviert, wird am Ende der Seite ein schwebender Button angezeigt, um gespeicherte Zitate zu verwalten.
			<br />Andernfalls wird ein Button zum Einfügen der Zitate im Editor angezeigt.',
	'QUICKQUOTE_GROUPS'				=> 'Erlaubt für folgende Gruppen',
	'QUICKQUOTE_GROUPS_EXPLAIN'		=> 'Gruppen, die diese Erweiterung nutzen dürfen.<br />
		Mit gedrückter <em>Strg</em>-Taste können mehrere Gruppen ausgewählt werden.<br /><br />
		<em>Neben dieser Einstellung ist es außerdem das Recht zum Schreiben von Nachrichten nötig.</em>',
	'QUICKQUOTE_REPLY_OVERWRITE'			=> 'Antwort überschreiben',
	'QUICKQUOTE_REPLY_OVERWRITE_EXPLAIN'	=> 'Wenn aktiviert, wird beim Nutzen der QuickQuote-<em>Antwort</em>-Funktion der Text im Schnellantwort-Feld überschrieben.<br />
		Andernfalls wird das Zitat ans Ende des Texts angehängt.',
]);
