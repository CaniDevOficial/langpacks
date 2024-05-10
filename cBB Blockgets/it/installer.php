<?php
/**
 * [Italiano [It]]
 * @package cBB Blockgets
 * @version 2.0.5 15/01/2023
 *
 * @copyright (c) 2023 CaniDev @ Lord Phobos
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

// Local Variables
$lang = array_merge($lang, [
	'PORTAL'			=> 'Portale',
	'DOCK_MENU'			=> 'Menù Dock',
	'MAIN_MENU'			=> 'Menù Principale',
	'RECOMMENDED'		=> 'Raccomandato',

	'P_ADMIN'			=> 'Amministrazione',
	'P_MAIN'			=> 'Principale',
	'P_MCP'				=> 'Pannello di Moderazione',
	'P_ACP'				=> 'Pannello di Amministrazione',

	'PHPBB_TITLE'		=> 'sito web ufficiale diphpBB',
	'XAMPP_TITLE'		=> 'Xampp',
	'SOURCEFORGE_TITLE'	=> 'Applicazioni open source',
	'WELCOME_GUEST'		=> '[html]<div style="text-align:center; font-size:1.2em;"><a href="https://www.canidev.com"><span class="blg-image logo-img"></span></a><br /><strong><i>Forum attrezzato con cBB Blockgets</i><br /><br />Benvenuti nel nostro forum!<br />Registrati per accedere a tutti i contenuti!.</strong></div>[/html]',
	'WELCOME_MEMBER'	=> '[html]<div style="text-align:center; font-size:1.2em;"><a href="https://www.canidev.com"><span class="blg-image logo-img"></span></a><br /><strong><i>Forum attrezzato con cBB Blockgets</i><br /><br />Bentornato al nostro forum, {S_USERNAME}</strong></div>[/html]',	

	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (inclusa la cartella <em>core</em>) e di utilizzare un pacchetto dal sito web ufficiale.',
]);
