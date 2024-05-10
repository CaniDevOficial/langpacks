<?php
/**
 * [English [It]]
 * @package cBB Favicon
 * @version 1.0.1 15/01/2023
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
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_FAVICON_CONFIG_EXPLAIN'		=> 'Da qui puoi gestire tutte le opzioni relative alla favicon del sito.',

	'BUBBLE_NONE'			=> 'Nessuna bolla',
	'BUBBLE_SIMPLE'			=> 'Solo bolla',
	'BUBBLE_VALUE'			=> 'Bolla con contatore',

	'FAVICON_APPLE_TOUCH'			=> 'Icona "Apple Touch"',
	'FAVICON_APPLE_TOUCH_EXPLAIN'	=> 'Definisce l\'icona utilizzata da iOS per la scorciatoia sulla schermata principale.<br />
		<em><strong>Formati supportati:</strong> .png</em>',
	'FAVICON_BUBBLE'				=> 'Bolla',
	'FAVICON_BUBBLE_EXPLAIN'		=> 'Definisce se verrà visualizzata una bolla di avviso all\'interno dell\'icona quando ci sono nuove notifiche.',
	'FAVICON_ICON'					=> 'Icona',
	'FAVICON_ICON_EXPLAIN'			=> 'Definisce l\'icona da utilizzare.<br />
		<em><strong>Formati supportati:</strong> .gif, .ico, .png</em>',

	'FAVICON_FORMAT_INVALID' 		=> 'Il formato del file non è valido.',

));
