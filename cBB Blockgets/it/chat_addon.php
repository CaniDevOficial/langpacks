<?php
/*
* chat_addon.php [Italiano [It]]
* @package cBB Blockgets
* @version v2.0.1 04/05/2018
*
* @copyright (c) 2018 CaniDev & Lord Phobos
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
*/

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang['blocks']))
{
	$lang['blocks'] = array();
}

$lang['blocks'] = array_merge($lang['blocks'], array(
	'chat_title'    => 'Chat',
	'chat_explain'  => 'Consente di utilizzare cBB Chat come blocco nelle colonne o mostrare gli utenti connessi alla chat.',
));

$lang = array_merge($lang, array(
    'CHAT_ADDON_MODE'       => 'Modalità di visualizzazione',
    'CHAT_MODE_CHAT'        => 'Stanza di chat',
    'CHAT_MODE_USERS'       => 'Utenti online',
));

