<?php
/**
 * [German [De]]
 * @package cBB QuickMod
 * @version 1.1.5 20/10/2023
 *
 * @copyright (c) 2023 CaniDev
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
	'APPROVE_TOPIC'			=> 'Freigeben',
	'CHANGE_ICON'			=> 'Icon ändern',
	'CHANGE_ICON_TOPIC'		=> 'Icon ändern',
	'CHANGE_POSTER_TOPIC'	=> 'Autor ändern',
	'CHANGE_TIME_TOPIC'		=> 'Veröffentlichungsdatum ändern',
	'DISAPPROVE_TOPIC'		=> 'Freigabe zurückziehen',

	'CONFIRM_CHANGE_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag ändern willst?',
	'CONFIRM_CHANGE_TOPICS'		=> 'Bist Du sicher, dass Du die gewählten Beiträge ändern willst?',
	'CONFIRM_DELETE_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag löschen willst?',
	'CONFIRM_DELETE_TOPICS'		=> 'Bist Du sicher, dass Du die gewählten Beiträge löschen willst?',
	'CONFIRM_LOCK_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag sperren willst?',
	'CONFIRM_LOCK_TOPICS'		=> 'Bist Du sicher, dass Du die gewählten Beiträge sperren willst?',
	'CONFIRM_RENAME_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag umbenennen willst?',
	'CONFIRM_RENAME_TOPICS'		=> 'Bist Du sicher, dass Du die gewählten Beiträge umbenennen willst?',
	'CONFIRM_RESTORE_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag wiederherstellen willst?',
	'CONFIRM_RESTORE_TOPICS'	=> 'Bist Du sicher, dass Du die gewählten Beiträge wiederherstellen willst?',
	'CONFIRM_UNLOCK_TOPIC'		=> 'Bist Du sicher, dass Du den gewählten Beitrag entsperren willst?',
	'CONFIRM_UNLOCK_TOPICS'		=> 'Bist Du sicher, dass Du die gewählten Beiträge entsperren willst?',

	'DELETE_TOPIC'				=> 'Löschen',
	'DELETE_PERMANENTLY_TOPIC'	=> 'Permanent löschen',
	'MAKE_ANNOUNCE_TOPIC'		=> 'Lokale Bekanntmachung',
	'MAKE_GLOBAL_TOPIC'			=> 'Globale Bekanntmachung',
	'MAKE_NORMAL_TOPIC'			=> 'Normaler Beitrag',
	'MAKE_STICKY_TOPIC'			=> 'Anheften',

	'MARK_ANNOUNCE'			=> 'Ankündigungen markieren',
	'MARK_BY_STATUS'		=> 'Markiere nach Status',
	'MARK_BY_TYPE'			=> 'Markiere nach Typ',
	'MARK_GENERAL'			=> 'Allgemein',
	'MARK_GLOBAL'			=> 'Bekanntmachungen markieren',
	'MARK_LOCKED'			=> 'Gesperrte Beiträge markieren',
	'MARK_MOVED'			=> 'Verschobene Beiträge markieren',
	'MARK_NORMAL'			=> 'Normale Beiträge markieren',
	'MARK_STICKY'			=> 'Angeheftete Beiträge markieren',
	'MARK_TOPICS'			=> 'Beiträge markieren',
	'MARK_UNLOCKED'			=> 'Entsperrte Beiträge markieren',

	'MOVE_TOPIC'			=> 'Verschieben',
	'NO_TOPIC_SELECTED'		=> 'Kein Beitrag markiert',
	'OPTIONS_BASIC'			=> 'Grundlegende Optionen',
	'OPTIONS_ADVANCED'		=> 'Erweiterte Optionen',
	'RENAME_TOPIC'			=> 'Umbenennen',
	'RESTORE_TOPIC'			=> 'Wiederherstellen',
	'TOPIC_TYPE'			=> 'Beitragstyp',
	'UNLOCK_TOPIC'			=> 'Entsperren',

	'ICON'					=> 'Icon',
	'NOTHING'				=> 'Es wurden keine Änderungen vorgenommen',
	'SELECT_ACTION'			=> 'Aktion auswählen',
	'WITH_SELECTED'			=> 'Aktion für Auswahl',

	'AUTHOR_CHANGE_SUCCESS'	=> 'Der Autor des Beitrags wurde erfolgreich geändert.',
	'TOPIC_RENAMED_SUCCESS'	=> 'Der Beitrag wurde erfolgreich umbenannt.',

	'CORE_INSTALL_ERROR'	=> 'Es wurden nicht alle Dateien aus dem Installationspaket hochgeladen oder es wird versucht, eine alte Version zu installieren.<br />
		Bitte lade alle Dateien (inklusive des <em>core</em>-Ordners) hoch und beziehe das Paket von der offiziellen Website.',
]);
