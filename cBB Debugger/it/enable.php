<?php
/**
 * [Italiano [It]]
 * @package cBB Debugger
 * @version 1.0.2 11/03/2024
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
	'ERROR_MSG'		=> 'Si è verificato un errore.<br />Non è stato possibile abilitare l\'estensione.',
	'EXPLAIN'		=> 'Usa questa pagina per abilitare la modalità di debug se non puoi accedere al Pannello di Amministrazione del tuo forum.',
	'ENABLE'		=> 'Abilita',
	'RETURN'		=> 'Ritorna',
	'SUCCESS_MSG'	=> 'Modalità Debug abilitata con successo',
	'TITLE'			=> 'Modalità Debug',
]);
