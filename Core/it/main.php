<?php
/**
 * [Italiano [It]]]
 * @package Ext Common Core
 * @version 1.1.3 20/10/2023
 *
 * @copyright (c) 2023 CaniDev & Lord Phobos
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

$lang = array_merge($lang, array(
	'ACCEPT'					=> 'Accetta',
	'ALL_GROUPS'				=> 'Tutti i gruppi',
	'BATCH_ACTIONS'				=> 'Azioni di Batch',
	'CONFIGURE'					=> 'Configura',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Documentazione e Supporto',
	'EDIT'						=> 'Modifica',
	'ENABLE_DISABLE'			=> 'Abilita/Disabilita',
	'NO_ITEMS'					=> 'Nessun oggetto da mostrare',
	'REPORT_EXPLAIN'			=> 'Elenca qui sotto quante più informazioni puoi sull\'errore.<br /><br />
		Oltre a quanto descritto qui, verranno inviate informazioni di base circa l\'ambiente di esecuzione per una corretta analisi del problema.<br />
		<a href="https://www.canidev.com/api/report/documentation" onclick="window.open(this.href); return false;">Vedi dettagli</a>',
	'REPORT_SENDED'				=> 'Report inviato con successo',
	'REPORT_TITLE'				=> 'Report errore',
	'SAVE'						=> 'Salva',
	'SEND'						=> 'Invia',

	// Errors
	'ERROR_REPORT_SEND'			=> 'Non è stato possibile inviare il tuo report',
));
