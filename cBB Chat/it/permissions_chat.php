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
	'ACL_CAT_CHAT'				=> 'Chat',
	'ACL_A_CHAT'				=> 'Può gestire la chat',

	'ACL_M_CHAT_DELETE'			=> 'Può eliminare messaggi',
	'ACL_M_CHAT_EDIT'			=> 'Può modificare messaggi',

	'ACL_U_CHAT_ARCHIVE'		=> 'Può visualizzare l\'archivio',
	'ACL_U_CHAT_DELETE'			=> 'Può eliminare i propri messaggi',
	'ACL_U_CHAT_EDIT'			=> 'Può modificare i propri messaggi',
	'ACL_U_CHAT_IGNOREFLOOD'	=> 'Può ignorare il limite di flood',
	'ACL_U_CHAT_POST'			=> 'Può inviare messaggi',
	'ACL_U_CHAT_SENDPM'			=> 'Può inviare messaggi privati',
	'ACL_U_CHAT_VIEW'			=> 'Può visualizzare la chat',

]);
