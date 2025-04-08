<?php
/**
 * [Italiano [It]]
 * @package cBB Chat
 * @version 1.2.5 20/09/2023
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

// Chat language
$lang = array_merge($lang, [
	'CHAT'						=> 'Chat',
	'CHAT_APPLY'				=> 'Applica',
	'CHAT_ARCHIVE'				=> 'Archivio chat',
	'CHAT_BAN_DATE'				=> 'Fine dell\'esclusione',
	'CHAT_BAN_DATE_EXPLAIN'		=> 'Il formato valido è GG/MM/AAAA hh:mm:ss.',
	'CHAT_BAN_PERIOD'			=> 'Durata dell\'esclusione',
	'CHAT_BAN_USER'				=> 'Escludi',
	'CHAT_BBCODE'				=> 'BBcode',
	'CHAT_CHANGE_NAME'			=> 'Cambia nome utente',
	'CHAT_COLOR'				=> 'Colore del testo',
	'CHAT_CONNECT'				=> 'Connetti/Disconnetti',
	'CHAT_CUSTOM_BBCODES'		=> 'BBcode personalizzati',
	'CHAT_DELETE_USER'			=> 'Elimina utente',
	'CHAT_DEST_ROOM'			=> 'Destinazione',
	'CHAT_DISCONNECT_MESSAGE'	=> 'Sei stato disconnesso.',
	'CHAT_FLOOD_WAIT'			=> 'Tempo di flood impostato. Attendere...',
	'CHAT_GUEST'				=> 'Ospite_%s',
	'CHAT_GUEST_ROOM'			=> 'Generale',
	'CHAT_MENTION'				=> 'Menzione',
	'CHAT_MOVE'					=> 'Sposta in un\'altra stanza',
	'CHAT_MOVE_CONFIRM'			=> 'Sei sicuro di voler spostare i messaggi selezionati?',
	'CHAT_NO_INFORMATION'		=> 'Nessuna informazione disponibile.',
	'CHAT_PM_EXCEED'			=> 'Non puoi aprire altre conversazioni private a causa di un limite impostato dall\'amministrazione.',
	'CHAT_PURGE'				=> 'Pulisci messaggi',
	'CHAT_PURGE_CONFIRM'		=> 'Sei sicuro di voler eliminare tutti i messaggi dalla stanza <strong><em>%s</em></strong>?',
	'CHAT_REFRESH'				=> 'Aggiorna',
	'CHAT_RULES'				=> 'Regole della chat',
	'CHAT_SEND_PM'				=> 'Messaggio privato',
	'CHAT_SMILIES'				=> 'Smiley',
	'CHAT_SOUND'				=> 'Abilita/Disabilita suono',

	'CHAT_ENTER_AS_GUEST'		=> 'Entra come ospite',
	'CHAT_ENTER_AS_REGISTERED'	=> 'Entra come membro del forum',
	
	'CHAT_STATUS_AVAILABLE'		=> 'Disponibile',
	'CHAT_STATUS_AWAY'			=> 'Assente',
	'CHAT_STATUS_BUSY'			=> 'Occupato',
	'CHAT_STATUS_HIDDEN'		=> 'Nascosto',

	'CHAT_TIP'					=> 'Suggerimento',
	'CHAT_UNBAN_USER'			=> 'Rimuovi esclusione',
	'CHAT_USER_BANNED_PERIOD'		=> 'Sei escluso dalla chat fino al: %s',
	'CHAT_USER_BANNED_PERMANENT'	=> 'Sei escluso permanentemente dalla chat.',
	'CHAT_USER_ALREADY_EXISTS'		=> 'L\'utente è già in uso.',
	'CHAT_VIEW_HISTORY'				=> 'Vedi messaggi precedenti',

	'CUSTOM_DATE'		=> 'Data personalizzata',
	'EDIT'				=> 'Modifica',
	'HALF_AN_HOUR'		=> 'Mezz\'ora',
	'NEW_TOPIC'			=> 'Nuovo argomento',
	'PERMANENT'			=> 'Permanente',
	'QUOTE'				=> 'Citazione',

	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file del pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (inclusa la cartella <em>core</em>) e di utilizzare un pacchetto scaricato dal sito web ufficiale.',
]);


// Text language
$lang = array_merge($lang, []);
