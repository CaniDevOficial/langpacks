<?php
/**
 * [Italiano [It]]
 * @package cBB Reactions
 * @version 1.0.3 26/02/2024
 *
 * @copyright (c) 2024 CaniDev & Lord Phobos
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
	'ACL_M_REACTIONS'			=> 'Può moderare le reazioni',
	'ACL_U_REACTIONS'			=> 'Può reagire ai messaggi',
	'ACL_U_REACTIONS_VIEW'		=> 'Può vedere le reazioni',
]);
