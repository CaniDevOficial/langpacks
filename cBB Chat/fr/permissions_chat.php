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
	'ACL_CAT_CHAT'				=> 'Tchat',
	'ACL_A_CHAT'				=> 'Peut gérer le tchat.',

	'ACL_M_CHAT_DELETE'			=> 'Peut supprimer les messages du tchat.',
	'ACL_M_CHAT_EDIT'			=> 'Peut modifier les messages du tchat.',

	'ACL_U_CHAT_ARCHIVE'		=> 'Peut consulter l’archive du tchat.',
	'ACL_U_CHAT_DELETE'			=> 'Peut supprimer ses messages du tchat.',
	'ACL_U_CHAT_EDIT'			=> 'Peut modifier ses messages du tchat.',
	'ACL_U_CHAT_IGNOREFLOOD'	=> 'Peut ignorer la limite de flood du tchat.',
	'ACL_U_CHAT_POST'			=> 'Peut poster des messages dans le tchat.',
	'ACL_U_CHAT_SENDPM'			=> 'Peut envoyer des messages privés dans le tchat.',
	'ACL_U_CHAT_VIEW'			=> 'Peut voir le tchat.',
]);
