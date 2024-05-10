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
	'APPROVE_TOPIC'             => 'Approva',
	'CHANGE_ICON'               => 'Cambia icona',
	'CHANGE_ICON_TOPIC'         => 'Cambia icona',
	'CHANGE_POSTER_TOPIC'       => 'Cambia autore',
	'CHANGE_TIME_TOPIC'         => 'Cambia data di pubblicazione',
	'DISAPPROVE_TOPIC'          => 'Non approvare',

	'CONFIRM_CHANGE_TOPIC'      => 'Sei sicuro di voler modificare il topic selezionato?',
	'CONFIRM_CHANGE_TOPICS'     => 'Sei sicuro di voler modificare i topic selezionati?',
	'CONFIRM_DELETE_TOPIC'      => 'Sei sicuro di voler eliminare il topic selezionato?',
	'CONFIRM_DELETE_TOPICS'     => 'Sei sicuro di voler eliminare i topic selezionati?',
	'CONFIRM_LOCK_TOPIC'        => 'Sei sicuro di voler bloccare il topic selezionato?',
	'CONFIRM_LOCK_TOPICS'       => 'Sei sicuro di voler bloccare i topic selezionati?',
	'CONFIRM_RENAME_TOPIC'      => 'Sei sicuro di voler rinominare il topic selezionato?',
	'CONFIRM_RENAME_TOPICS'     => 'Sei sicuro di voler rinominare i topic selezionati?',
	'CONFIRM_RESTORE_TOPIC'     => 'Sei sicuro di voler ripristinare il topic selezionato?',
	'CONFIRM_RESTORE_TOPICS'    => 'Sei sicuro di voler ripristinare i topic selezionati?',
	'CONFIRM_UNLOCK_TOPIC'      => 'Sei sicuro di voler sbloccare il topic selezionato?',
	'CONFIRM_UNLOCK_TOPICS'     => 'Sei sicuro di voler sbloccare i topic selezionati?',

	'DELETE_TOPIC'              => 'Elimina',
	'DELETE_PERMANENTLY_TOPIC'  => 'Elimina definitivamente',
	'MAKE_ANNOUNCE_TOPIC'       => 'Rendi Annuncio',
	'MAKE_GLOBAL_TOPIC'         => 'Rendi Globale',
	'MAKE_NORMAL_TOPIC'         => 'Rendi Normale',
	'MAKE_STICKY_TOPIC'         => 'Rendi Principale',

	'MARK_ANNOUNCE'             => 'Marca Annunci',
	'MARK_BY_STATUS'            => 'Marca per stato',
	'MARK_BY_TYPE'              => 'Marca per tipo',
	'MARK_GENERAL'              => 'Generale',
	'MARK_GLOBAL'               => 'Marca i topic globali',
	'MARK_LOCKED'               => 'Marca i topic bloccati',
	'MARK_MOVED'                => 'Marca i topic spostati',
	'MARK_NORMAL'               => 'Marca i topic normali',
	'MARK_STICKY'               => 'Marca i topic principali',
	'MARK_TOPICS'               => 'Marca topics',
	'MARK_UNLOCKED'             => 'Marca i topic sbloccati',

	'MOVE_TOPIC'                => 'Sposta',
	'NO_TOPIC_SELECTED'         => 'Nessun topic selezionato',
	'OPTIONS_BASIC'             => 'Opzioni Base',
	'OPTIONS_ADVANCED'          => 'Opzioni Avanzate',
	'RENAME_TOPIC'              => 'Rinomina',
	'RESTORE_TOPIC'             => 'Ripristina',
	'TOPIC_TYPE'                => 'Tipo di topic',
	'UNLOCK_TOPIC'              => 'Sblocca',

	'ICON'                      => 'Icona',
	'NOTHING'                   => 'Non ci sono stati cambiamenti',
	'SELECT_ACTION'             => 'Seleziona azione',
	'WITH_SELECTED'             => 'Con selezionato',

	'AUTHOR_CHANGE_SUCCESS'     => 'L\'autore dei topic è stato cambiato correttamente.',
	'TOPIC_RENAMED_SUCCESS'     => 'Il topic è stato rinominato correttamente.',

	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (compresa la cartella <em>core</em>) e di utilizzare un pacchetto scaricato dal sito web ufficiale.',
]);
