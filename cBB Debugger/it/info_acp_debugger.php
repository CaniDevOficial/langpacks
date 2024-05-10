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
	'ACP_DEBUGGER'			=> 'Debugging',
	'ACP_DEBUGGER_EXPLAIN'	=> 'Da qui puoi abilitare la modalità di debug del forum, oltre ad altre opzioni di statistica.',

	'DEBUG_ALLOWED_IPS'			=> 'IP consentiti',
	'DEBUG_ALLOWED_IPS_EXPLAIN'	=> 'Definisci gli IP dai quali la modalità di debug può essere vista.<br />
		Lascia questo spazion vuoto così che la modalità di debug sia visibile a tutti.<br /><br />
		<em>Devi separare gli IP con una virgola o impostarne uno per riga.</em>',
	'DEBUG_ENABLE'				=> 'Abilita debug',
	'DEBUG_ENABLE_EXPLAIN'		=> 'Definisci se la modalità debug è abilitata per mostrare errori nel codice del forum e le sue estensioni.',
	'DEBUG_SHOW_STATS'			=> 'Mostra statistiche',
	'DEBUG_SHOW_STATS_EXPLAIN'	=> 'Definisci quali statistiche di tempo di esecuzione ed utilizzo risorse saranno mostrate nel footer.',

	'LOG_DEBUGGER_CONFIG'		=> '<strong>cBB Debugger:</strong> Configurazione modificata',

	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai provando ad installare un vecchio pacchetto.<br />
		Si prega di assicurarsi che tutti i file (inclusa la cartella <em>core</em>) del pacchetto siano scaricati dal sito web ufficiale.',
]);
