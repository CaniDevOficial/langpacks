<?php
/** 
 * [Brazilian Portuguese [pt_br]] 
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 * Brazilian Portuguese  translation by eunaumtenhoid [2017][ver 1.2.0] (https://github.com/phpBBTraducoes)
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
	
	'ACP_CHAT_CONFIG'		=> 'Configuração principal',
	'ACP_CHAT_PAGES'		=> 'Gerenciar páginas',
	'ACP_CHAT_ROOMS'		=> 'Gerenciar salas',
	'ACP_CHAT_TEXTS'		=> 'Textos e regras estáticas',

	'LOG_CHAT_CONFIG'			    => '<strong>cBB Chat:</strong> Configuração principal alterada',
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Exclusões adicionadas<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Exclusões removidas<br />» %s',
	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Mensagem movida de <em>%1$s</em> para <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mensagem movida de <em>%1$s</em> para <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d mensagens movidas de <em>%1$s</em> para <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Mensagem excluida <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mensagem excluída de <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d mensagens deletadas de <em>%1$s</em>',
	],
	'LOG_CHAT_ROOM_REMOVED'		    => '<strong>cBB Chat:</strong> Excluida a sala <em>%s</em> e suas mensagens',
]);
