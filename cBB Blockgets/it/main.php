<?php
/**
 * [Italiano [It]]
 * @package cBB Blockgets
 * @version 2.0.5 15/01/2023
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

$lang = array_merge($lang, [
	'PORTAL'			=> 'Portale',
	'READ_FULL'			=> 'Leggi il topic completo',
	'BLG_OR'			=> 'oppure',
	'BLG_READ_MORE'		=> '%sleggi altro%s',

	'ADD_PAGE'					=> 'Crea pagina',
	'BANNERS'					=> 'Banner',
	'CALENDAR'					=> 'Calendario',
	'CALENDAR_BIRTHDAY_TITLE'	=> '%1$s e <strong>altri %2$d</strong>.',
	'CALENDAR_SELECT_DATE'		=> 'Seleziona data',
	'EDIT_CONFIGURATION'		=> 'Modifica configurazione',
	'EDIT_THIS_PAGE'			=> 'Modifica questa pagina',
	'EDITOR'					=> 'Editor',
	'EXPAND_CONTRACT'			=> 'Espandi/collassa',
	'INSERT_ON_ENTRY'			=> 'Inserisci nel testo',
	'MANAGE_BLOCKS'				=> 'Gestisci blocchi',
	'PRINT'						=> 'Stampa',
	'SELECT_COLOUR'				=> 'Seleziona colore',
	'SMILIES'					=> 'Emoticons',
	'TODAY'						=> 'Oggi',

	// Editor
	'HTML_TITLE' 		=> 'Html:',
	'INSERT_HTML' 		=> 'Inserisci codice HTML',

	// Login Block
	'HIDE_ME_NOW'			=> 'Nascondimi in questa sessione',
	'MY_BOOKMARKS'			=> 'Preferiti',
	'MY_SUBSCRIBED'			=> 'Sottoscrizioni',
	'REMEMBER_ME'			=> 'Ricordami',

	// Link Us Block
	'LINK_US_TXT'			=> 'Sentiti libero di collegarti a <strong>%s</strong>. Usa il seguente HTML:',

	// Stats Block and whos_online block
	'GUEST_VISITS_TOTAL'		=> '%d Ospiti',
	'GUEST_VISIT_TOTAL'			=> '%d Ospite',
	'HIDDEN_VISITS_TOTAL'		=> '%d nascosti, ',
	'HIDDEN_VISIT_TOTAL'		=> '%d nascosto, ',
	'LASTVISIT_VISITS_TOTAL'	=> 'In totale ci sono stati <strong>%d</strong> utenti online nelle ultime 24 ore :: ',
	'LASTVISIT_VISIT_TOTAL'		=> 'In totale c\'è stato <strong>%d</strong> utente online nelle ultime 24 ore  :: ',
	'REG_VISITS_TOTAL'			=> '%d Registrati, ',
	'REG_VISIT_TOTAL'			=> '%d Registrato, ',

	'ST_ACTIVE_POSTERS'			=> 'Postatori attivi',
	'ST_ANNS'					=> 'Annunci',
	'ST_ATTACHMENTS'			=> 'Allegati',
	'ST_BOARD_STARTDATE'		=> 'Data di inizio',
	'ST_NEW'					=> 'Nuovo',
	'ST_NEWEST_USER'			=> 'Iscritto più recente',
	'ST_POSTS'					=> 'Post',
	'ST_POSTS_PER_DAY'			=> 'Post al giorno',
	'ST_POSTS_PER_TOPIC'		=> 'Post per topic',
	'ST_POSTS_PER_USER'			=> 'Post per utente',
	'ST_STICKYS'				=> 'Importanti',
	'ST_TOP'					=> 'Totale',
	'ST_TOPICS'					=> 'Topic',
	'ST_TOPICS_PER_DAY'			=> 'Topic al giorno',
	'ST_TOPICS_PER_USER'		=> 'Topic per utente',
	'ST_TOTAL_USERS'			=> 'Utenti totali',
	'ST_USERS_PER_DAY'			=> 'Utenti al giorno',
	'ST_VISIT_IP'				=> 'Il tuo IP',

	'WIO_ONLINE'			=> 'Utenti online',
	'WIO_LASTDAY'			=> 'Utenti di oggi',
	'WIO_TOTAL'				=> 'Totale',
	'WIO_REGISTERED'		=> 'Registrati',
	'WIO_HIDDEN'			=> 'Nascosti',
	'WIO_GUEST'				=> 'Ospiti',

	// polls
	'NO_POLL'			=> 'Sondaggio non disponibile',

	// attachments_block
	'ATTACH_DATE'			=> 'Pubblicati',
	'ATTACH_SIZE'			=> 'Dimensioni',
	'ATTACH_DOWNLOAD'		=> 'Scaricati',
	'ATTACH_VIEW'			=> 'Visualizzati',

	'ATTACH_COUNT'				=> [
		0	=> 'Mai',
		1	=> '%d volta',
		2	=> '%d volte',
	],

	'VIEW_TOPIC'				=> 'Vedi Topic',
	'DOWNLOAD'					=> 'Scarica',
	'NO_ATTACHMENTS'			=> 'Nessun allegato disponibile',

	// language_select_block
	'LANGUAGE_CHANGE'		=> 'Cambia lingua',
	'LANGUAGE_DEFAULT'		=> 'Lingua originale',
	'LANGUAGE_SET_MINE'		=> 'Imposta come mia lingua',
	'LANGUAGE_SELECT'		=> 'Selezione lingua',

	// news_block
	'POSTED_BY'			=> 'Postato da',
	'COMMENTS'			=> 'Commenti',
	'POLL'				=> 'Sondaggio',
	'TOPIC_VIEWS'		=> 'Visualizzazioni',
	'NO_NEWS'			=> 'Nessuna notizia disponibile',
	'VIEW_COMMENTS'		=> 'Vedi commenti',

	// recent_topics_block
	'BLG_RECENT_ACTIVITY'	=> 'Attività recente',
	'BLG_RECENT_ANN'		=> 'Annunci recenti',
	'BLG_RECENT_TOPICS'		=> 'Topic recenti',

	// paypal_block
	'AMOUNT_MSG'		=> 'Ammontare da donare',
	'CLICK_MSG'			=> 'Procedi alla donazione',
	'CODE_MSG'			=> 'Valuta',
	
	'currencies'	=> [
		'AUD'	=> 'Dollaro Australiano',
		'CAD' 	=> 'Dollaro Canadese',
		'CZK' 	=> 'Corona Ceca',
		'DKK' 	=> 'Corona Danese',
		'HKD' 	=> 'Dollaro di Hong Kong',
		'HUF' 	=> 'Fiorino Ungherese',
		'NZD' 	=> 'Dollaro Neozelandese',
		'NOK' 	=> 'Corona Norvegese',
		'PLN' 	=> 'Zloty Polacco',
		'GBP' 	=> 'Sterlina Britannica',
		'SGD' 	=> 'Dollaro di Singapore',
		'SEK' 	=> 'Corona Svedese',
		'CHF' 	=> 'Franco Svizzero',
		'JPY' 	=> 'Yen Giapponese',
		'USD' 	=> 'Dollaro',
		'EUR' 	=> 'Euro',
		'MXN' 	=> 'Peso MessicaloMexican Peso',
		'ILS' 	=> 'Nuovi Sicli Israeliani'
	],

	// most_poster_block
	'MEMBER_POSTS'		=> '%d (%.2f/giorno)',
	'USER'				=> 'Utente',
	'NO_MOST_POSTER'	=> 'Nessun utente da mostrare',

	// contact block
	'EMAIL_EMPTY'		=> 'Devi impostare un\'email.',
	'EMAIL_INVALID'		=> 'La mail inserita non è valida.',

	// counter block
	'COUNTER_LOCAL'		=> 'Visite a questa pagina',
	'COUNTER_TOTAL' 	=> 'Visite totali',
	'COUNTER_STARTDATE' => 'Conteggio dal:<br />%s',
	'HITS_PER_DAY'		=> 'Visite al giorno',
	'HITS_PER_HOUR'		=> 'Visite all\'ora',
	'HITS_PER_MONTH'	=> 'Visite al mese',
	'HITS_PER_USER'		=> 'Visite per utente',
	'HITS_PER_WEEK'		=> 'Visite alla settimana',
	'HITS_PER_YEAR'		=> 'Visite all\'anno',

	// style_select_block
	'STYLE_CHANGE'		=> 'Cambia Stile',
	'STYLE_DEFAULT'		=> 'Stile originale',
	'STYLE_SET_MINE'	=> 'Imposta come mio stile',
	'STYLE_SELECT'		=> 'Seleziona stile',

	// latest_bots_block
	'NO_BOTS'			=> 'Nessun bot ha visitato il forum',

	// latest_unread_block
	'NO_UNREAD'			=> 'Nessun topic',

	// ranks_block
	'MIN_POSTS'			=> 'Post Minimi',
	'SPECIAL_RANK'		=> 'Livello Speciale',

	// online_friends_block
	'FRIENDS_ONLINE'		=> 'Amici Online',
	'FRIENDS_OFFLINE'		=> 'Amici Offline',
	'NO_FRIENDS_ONLINE'		=> 'Nessun amico online',
	'NO_FRIENDS_OFFLINE'	=> 'Nessun amico offline',
	'NO_FRIENDS'			=> 'Nessun amico trovato',

	// age_ranges_block
	'RANGE'				=> 'Livello',
	'RANGE_USERS'		=> 'Utenti (%)',
	'AGE_COUNTS'		=> 'Utenti contati',
	'AGE_AV'			=> 'Età media',
	'AGE_AV_COUNT'		=> '%.2f anni',

	// search_block
	'SH_ENGINE'			=> 'Motori di Ricerca',

	// announcements_block
	'NO_ANNOUNCEMENTS'	=> 'Nessun Annuncio',

	//birthday_block
	'TODAY_BIRTHDAYS'		=> 'Compleanni di Oggi',
	'TOMORROW_BIRTHDAYS'	=> 'Compleanni di Domani',
	'BIRTHDAYS_FOR'			=> 'Compleanni da %1$s a %2$s',

	// calendar
	'ADD_EVENT'				=> 'Aggiungi evento',
	'DELETE_EVENT'			=> 'Cancella Evento',
	'EDIT_EVENT'			=> 'Modifica Evento',
	'EVENTS'				=> 'Eventi',

	'EMPTY_EVENT_TITLE'	=> 'Devi specificare il titolo di un evento.',
	'EVENT_ADDED'		=> 'Evento aggiunto con successo',
	'EVENT_COLOR'		=> 'Colore',
	'EVENT_EDITED'		=> 'Evento modificato con successo',
	'EVENT_GROUPS'		=> 'Gruppi autorizzati',
	'EVENT_TITLE'		=> 'Titolo dell\'evento',
	'EVENT_TIME'		=> 'Data dell\'evento',
	'EVENT_DETAILS'		=> 'Dettagli',
	'EVENT_REMOVED'		=> 'Eventi cancellati con successo',
	'NO_EVENTS'			=> 'Nessun evento',
	
	//player block
	'MUTE'				=> 'Muto',
	'WIN_CLOSE'			=> 'Chiudi la finestra e ritorna al blocco',
	'WIN_OPEN'			=> 'Apri in nuova finestra',
	'WIN_OPEN_EXPLAIN'	=> 'Riproduzione in Finestra',
	'WIN_RETURN'		=> 'Forza il player nel blocco',
	'PLAY'				=> 'Play',
	'PLAY_MSG'			=> 'In Riproduzione',
	'PLAYER'			=> 'Player',
	'STOP'				=> 'Stop',
	'STOP_MSG'			=> 'Fermato',
	'VOLUME'			=> 'Volume',
	'VOLUME_MSG'		=> 'Volume: %d%',
	
	// rss block
	'NO_RSS'		=> 'Nessun Rss/Feed da mostrare.',

	// steam block
	'STEAM_IN_GAME'		=> 'Sta giocando',
	'STEAM_ONLINE'		=> 'Online',
	'STEAM_MEMBERS'		=> 'Membri',

	// topic index block
	'CHAR_ALL'		=> 'Tutti',
	
	// youtube block
	'NO_VIDEOS'		=> 'Nessun video da mostrare',
	'YT_VIEWS'		=> '%d visualizzazioni',
]);

// General messages
$lang = array_merge($lang, [
	'ACTION_ERROR'		=> 'Nessuna azione intrapresa',
	'BLOCK_LOAD_ERROR'	=> 'Caricamento blocco fallito',
	'FORMAT_INVALID'	=> 'Il formato non è valido',
	'EVENT_ERROR'		=> 'L\'evento selezionato non esiste',
	'NO_TRACKLIST'		=> 'Nessuna tracklist disponibile.',
	'NO_PAGE'			=> 'Questa pagina non esiste.',
	'URL_INVALID'		=> 'L\'URL non è valido.',
]);
