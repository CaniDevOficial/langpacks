<?php
/**
 * [Italiano [It]]
 * @package cBB Reactions
 * @version 1.0.4 01/04/2025
 *
 * @copyright (c) 2025 CaniDev & Lord Phobos
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
	'ACP_REACTIONS'			=> 'Reazioni',
	'ACP_REACTIONS_CONFIG'	=> 'Opzioni',
	'ACP_REACTIONS_MANAGE'	=> 'Configura Reazioni',
	
	'EXT_INSTALL_ERROR'		=> 'Quest\'estensione non è compatibile con un\'estensione installata.<br />Rivedi la documentazione per maggiori informazioni.',
	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (inclusa la cartella <em>core</em>) e di caricare un pacchetto scaricato dal sito ufficiale.',
]);
