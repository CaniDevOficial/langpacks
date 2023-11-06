<?php
/**
 * [German [De]]
 * @package cBB Reactions
 * @version 1.0.1 15/01/2023
 *
 * @copyright (c) 2023 CaniDev
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
	'ACL_M_REACTIONS'			=> 'Kann Reaktionen moderieren',
	'ACL_U_REACTIONS'			=> 'Kann reagieren',
	'ACL_U_REACTIONS_VIEW'		=> 'Kann Reaktionen sehen',
]);
