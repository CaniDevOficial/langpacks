<?php
/**
 * [Italiano [It]]
 * @package cBB Follower
 * @version 2.0.4 30/10/2023
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
	'ACL_CAT_FOLLOWER'			=> 'Follower',
	
	'ACL_U_FWR_FOLLOW'			=> 'Può seguire gli utenti',
	'ACL_U_FWR_INTERACTION'		=> 'Può condividere e valutare commenti e messaggi',
	'ACL_U_FWR_MANAGE'			=> 'Può modificare/eliminare i commenti sul proprio profilo',
	'ACL_U_FWR_MENTION'			=> 'Può menzionare gli utenti',
	'ACL_U_FWR_PUBLISH'			=> 'Può pubblicare commenti sul proprio profilo',
	
	'ACL_M_FOLLOWER_MANAGE'		=> 'Può modificare/eliminare commenti',

]);
