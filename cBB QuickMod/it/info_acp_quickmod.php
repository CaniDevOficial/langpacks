<?php
/**
 * [Italiano [It]]
 * @package cBB QuickMod
 * @version 1.1.5 20/10/2023
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
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CAT_QUICKMOD'           => 'QuickMod',
	'ACP_QUICKMOD_CONFIG'        => 'Configurazione Principale',
	'ACP_QUICKMOD_CONFIG_EXPLAIN' => 'Da qui puoi gestire le principali opzioni di moderazione.<br />Per ordinare i pulsanti, trascinali nella posizione corretta nella lista inferiore. La visibilità dei pulsanti nella pagina viewforum dipende dai permessi dell\'utente e dallo stato dell\'argomento.',
	'QM_MAIN_CONFIG'             => 'Configurazione Principale',
	'QM_CONFIRM'                 => 'Dialogo di conferma',
	'QM_CONFIRM_EXPLAIN'         => 'Attiva/Disattiva il dialogo di conferma nelle azioni rapide.',
	'QM_BUTTON_MANAGE'           => 'Gestisci Pulsanti Rapidi',
	'QM_TYPE'                    => 'Visualizzazione icona',
	'QM_TYPE_EXPLAIN'            => 'Imposta il formato di visualizzazione per le azioni rapide nel forum.',
	'QM_TYPE_ICON'               => 'Icone',
	'QM_TYPE_MENU'               => 'Menu contestuale',
	'BUTTONS_AVAILABLE'          => 'Pulsanti disponibili',
	'BUTTONS_SELECTED'           => 'Pulsanti selezionati',
	'LOG_QUICKMOD_CONFIG'        => '<strong>cBB QuickMod:</strong> Configurazione Modificata',

]);
