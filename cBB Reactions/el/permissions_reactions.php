<?php
/**
 * [Greek [El]]
 * @package cBB Reactions
 * @version 1.0.4 01/04/2025
 *
 * @copyright (c) 2025 CaniDev
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
	'ACL_M_REACTIONS'			=> 'Μπορεί να κάνει διαχείριση αντιδράσεων',
	'ACL_U_REACTIONS'			=> 'Μπορεί να αντιδράσει σε μήνυμα',
	'ACL_U_REACTIONS_VIEW'		=> 'Μπορεί να δει αντιδράσεις',
]);
