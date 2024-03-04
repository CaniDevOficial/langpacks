<?php
/**
 * [French [Fr]]
 * French translation by cabot (https://cabotweb.fr)
 * 
 * @package cBB Reactions
 * @version 1.0.3 26/02/2024
 *
 * @copyright (c) 2024 CaniDev
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

//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'ACL_M_REACTIONS'			=> 'Peut modérer les réactions',
	'ACL_U_REACTIONS'			=> 'Peut réagir aux messages',
	'ACL_U_REACTIONS_VIEW'		=> 'Peut voir les réactions',
]);
