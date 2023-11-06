<?php
/**
 * [German [De]]]
 * @package Ext Common Core
 * @version 1.1.3 20/10/2023
 *
 * @copyright (c) 2023 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'AUTHOR'					=> 'Autor:',
	'CODE'						=> 'Code',
	'DATE'						=> 'Datum:',
	'DESCRIPTION_OPTIONAL'		=> 'Beschreibung (optional):',
	'INSERT'					=> 'Einfügen',
	'MAXIMIZE'					=> 'Editor vergrößern',
	'PRINT'						=> 'Drucken',
	'REMOVE_FORMAT'				=> 'Formatierung entfernen',
	'UNLINK'					=> 'Link entfernen',
	'URL'						=> 'URL:',
	'VIEW_SOURCE'				=> 'Code anzeigen',
]);
