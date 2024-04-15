<?php
/**
 * [English [En]]
 * @package cBB Attachments
 * @version 1.0.0 26/01/2024
 *
 * @copyright (c) 2024 CaniDev
 * @copyright (c) 2024 French Translation by Fred Rimbert https://forums.caforum.fr/
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
	'ACP_AP_NAME'		=> 'cBB Attachments',
	'ACP_AP_CONFIG'		=> 'Formatage avancé des pièces jointes',
]);
