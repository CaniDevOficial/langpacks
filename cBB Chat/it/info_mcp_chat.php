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
	'MCP_CHAT_BAN'				=> 'Esclusioni chat',
	
	'CHAT_BAN_CELL'				=> 'Nome utente',
	'CHAT_BAN_CELL_EXPLAIN'		=> 'Per specificare più di un nome utente, inserisci ciascuno in una nuova riga.<br />
		Usa il link <em><u>Trova un utente</u></em> per cercare e aggiungere automaticamente gli utenti.',
	'CHAT_BAN_LIST'				=> 'Utenti esclusi',
	'CHAT_EXCLUSIONS_ADDED'		=> 'Esclusioni modificate',
	'CHAT_EXCLUSIONS_DELETED'	=> 'Esclusioni eliminate',
	'CHAT_EXCLUSIONS_ERROR'		=> 'Si è verificato un errore, controlla i dati inseriti',
	
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Esclusioni aggiunte<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Esclusioni rimosse<br />» %s',
 	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Messaggio spostato da <em>%1$s</em> a <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 messaggio spostato da <em>%1$s</em> a <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d messaggi spostati da <em>%1$s</em> a <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Messaggio rimosso <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 messaggio rimosso da <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d messaggi rimossi da <em>%1$s</em>',
	],
]);

