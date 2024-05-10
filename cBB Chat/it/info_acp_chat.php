<?php
/**
 * [Italiano [It]]
 * @package cBB Chat
 * @version 1.2.5 20/09/2023
 *
 * @copyright (c) 2023 CaniDev & Lord Phobos
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
	'ACP_CAT_CHAT'			=> 'Chat',
	
	'ACP_CHAT_CONFIG'		=> 'Configurazione principale',
	'ACP_CHAT_PAGES'		=> 'Gestisci pagine',
	'ACP_CHAT_ROOMS'		=> 'Gestisci stanze',
	'ACP_CHAT_TEXTS'		=> 'Testi statici e Regole',

	'LOG_CHAT_CONFIG'				=> '<strong>cBB Chat:</strong> Modificata la configurazione principale',
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Esclusioni aggiunte<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Esclusioni rimosse<br />» %s',
	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Messaggio spostato da <em>%1$s</em> a <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 messaggio spostato da <em>%1$s</em> a <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d messaggi spostati da <em>%1$s</em> a <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Messaggio eliminato <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 messaggio eliminato da <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d messaggi eliminati da <em>%1$s</em>',
	],
	'LOG_CHAT_ROOM_REMOVED'			=> '<strong>cBB Chat:</strong> Stanza <em>%s</em> eliminata e relativi messaggi',

]);
