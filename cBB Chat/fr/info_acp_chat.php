<?php
/**
 * [French [Fr]] translation by Galixte (http://www.galixte.com)
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CAT_CHAT'			=> 'Tchat',
	
	'ACP_CHAT_CONFIG'		=> 'Configuration principale',
	'ACP_CHAT_PAGES'		=> 'Gestion des pages',
	'ACP_CHAT_ROOMS'		=> 'Gestion des salons',
	'ACP_CHAT_TEXTS'		=> 'Textes et règles statiques',

	'LOG_CHAT_CONFIG'				=> '<strong>cBB Chat:</strong> Configuration principale modifiée',
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Exclusions ajoutées<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Exclusions retirées<br />» %s',
	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Message déplacé de <em>%1$s</em> vers <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 message a été déplacé de <em>%1$s</em> vers <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d messages ont été déplacés de <em>%1$s</em> vers <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Message supprimé <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 message a été supprimé de <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d messages ont été supprimés de <em>%1$s</em>',
	],
	'LOG_CHAT_ROOM_REMOVED'			=> '<strong>cBB Chat:</strong> Salon <em>%s</em> supprimé ainsi que ses messages',
]);
