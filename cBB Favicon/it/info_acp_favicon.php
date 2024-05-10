<?php
/**
 * [Italiano [It]]
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
	'ACP_FAVICON'			=> 'Favicon',
	'ACP_FAVICON_CONFIG'	=> 'Impostazioni favicon',
	
	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (compresa la cartella <em>core</em>) e utilizza un pacchetto scaricato dal sito web ufficiale.',

));
