<?php
/**
 * [Italian [It]]
 * @package cBB Follower
 * @version 2.0.4 30/10/2023
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
	'COMMENT_ADD'			=> 'Nuovo commento',

	'ADD_PHOTOS'			=> 'Aggiungi immagini',
	'COMMENTS'				=> 'Commenti',
	'COPY_COMMENT_LINK'		=> 'Copia link del commento',
	'FOLLOW'				=> 'Segui',
	'FOLLOWING'				=> 'Seguiti',
	'FOLLOWING_BY'			=> 'Seguiti da %s',
	'FOLLOWER'				=> 'Utente seguace',
	'FOLLOWERS'				=> 'Seguaci',
	'FWR_HOME'				=> 'Cronologia',
	'FWR_REPLY'				=> 'Rispondi',
	'FWR_REPLY_PLACEHOLDER'	=> 'Rispondi...',
	'LIKE'					=> 'Mi piace',
	'LIKE_UNDO'				=> 'Non mi piace',
	'LOAD_MORE'				=> 'Carica altro',
	'MENTIONS'				=> 'Menzioni',
	'MENTION_USER'			=> 'Menzione utente',
	'NO_COMMENT'			=> 'Il commento selezionato non esiste',
	'NO_ITEMS'				=> 'Nessun elemento da mostrare',
	'NO_RESULTS'			=> 'Nessun risultato',
	'PUBLISH'				=> 'Pubblica',
	'RECENT_ACTIVITY'		=> 'Attività recente',
	'RESULTS_OF'			=> '<strong>Risultati di:</strong> <em>%s</em>',
	'RESULTS_USER'			=> '<strong>Utenti:</strong> <em>%s</em>',
	'SEARCH_RESULTS'		=> 'Risultati della ricerca',
	'SHARE'					=> 'Condividi',
	'SHARE_UNDO'			=> 'Annulla condivisione',
	'SHARED_BY'				=> 'Condiviso da %s',
	'SOMEBODY'				=> 'Qualcuno',
	'TITLE_FOLLOWING'		=> 'Persone che seguono %s',
	'TITLE_FOLLOWERS'		=> 'Persone che seguono %s',
	'TITLE_POSTS'			=> 'Messaggi pubblicati da %s',
	'TITLE_TOPICS'			=> 'Argomenti creati da %s',
	'TITLE_WALL'			=> 'Muro di %s',
	'TRENDS'				=> 'Tendenze',
	'UNFOLLOW'				=> 'Non seguire',
	'UNSHARE'				=> 'Annulla condivisione',
	'USER_INFO'				=> 'Informazioni su %s',
	'USER_WALL'				=> 'Muro dell\'utente',
	'USUAL_POSTER'			=> 'Autore abituale',
	'VIEW_ALL'				=> 'Visualizza tutto',
	'VIEW_COMMENT_RESULTS'	=> 'Vedi risultati dei commenti',
	'VISITED'				=> 'Ultima visita',
	'WALL'					=> 'Muro',
	'WALL_IN_REPLY'			=> 'In risposta a &uarr;',
	'WALL_REPLIES'			=> 'Risposte &darr;',
	'WHO_FOLLOW'			=> 'Chi segue',
	'WRITE_TO_WALL'			=> 'Scrivi qualcosa a %s',
	'YEARS_OLD'				=> 'anni',

	'EMPTY_MY_HOME'			=> 'Qui vedrai l\'attività delle persone che segui.',
	'EMPTY_MY_FOLLOWERS'	=> 'Qui verranno visualizzate le persone che ti seguono.',
	'EMPTY_MY_FOLLOWING'	=> 'Qui vedrai le persone che segui.',
	'EMPTY_MY_MENTIONS'		=> 'Qui vedrai i commenti o i messaggi in cui il tuo nome viene menzionato.',
	'EMPTY_MY_POSTS'		=> 'Qui vedrai i messaggi pubblicati nel forum.',
	'EMPTY_MY_TOPICS'		=> 'Qui vedrai gli argomenti creati nel forum.',
	'EMPTY_MY_WALL'			=> 'Questo è il tuo muro personale<br />Qui verranno visualizzati i tuoi commenti.',
	'EMPTY_MY_WALL_NO_AUTH'	=> '<em>Non hai il permesso di pubblicare commenti</em>.',

	'EMPTY_OTHER_FOLLOWERS'	=> 'Ancora nessuno segue %s.',
	'EMPTY_OTHER_FOLLOWING'	=> '%s non segue ancora nessuno.',
	'EMPTY_OTHER_POSTS'		=> '%s non ha ancora scritto nessun messaggio.',
	'EMPTY_OTHER_TOPICS'	=> '%s non ha ancora creato nessun argomento.',
	'EMPTY_OTHER_WALL'		=> '%s non ha ancora condiviso nulla.',
	
	'LINK_CLIPBOARD_ERROR'		=> 'Impossibile copiare il link',
	'LINK_CLIPBOARD_SUCCESS'	=> 'Link copiato negli appunti',

	'POST_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Messaggio:</span> <a href="%1$s">%2$s</a><br /><span class="row-small">%3$s</span>',
	'TOPIC_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Argomento:</span> <a href="%1$s">%2$s</a><br /><span class="row-small"> &raquo; In <a href="%3$s">%4$s</a></span>',
	
	// Notifiche
	'FW_NOTIFICATION_BIRTHDAY'			=> '<strong>Oggi è il compleanno di %s</strong><br />Scrivi qualcosa sul suo muro per congratularti',

	'FW_NOTIFICATION_COMMENT'			=> [
		1	=> '%s ha pubblicato un commento sul suo muro',
		2	=> '%s ha pubblicato un commento sul loro muro',
	],

	'FW_NOTIFICATION_FOLLOW'			=> '%s ha iniziato a seguirti',
	'FW_NOTIFICATION_MENTION_COMMENT'	=> '%s ti ha menzionato in un messaggio sul suo muro',
	'FW_NOTIFICATION_MENTION_POST'		=> '%s ti ha menzionato nell\'argomento:',

	'FW_NOTIFICATION_LIKE_COMMENT'	=> [
		1	=> '%s ha messo mi piace a un tuo commento',
		2	=> '%s ha messo mi piace a un tuo commento',
	],

	'FW_NOTIFICATION_LIKE_POST'		=> [
		1	=> '%s ha messo mi piace a un messaggio che hai pubblicato',
		2	=> '%s ha messo mi piace a un messaggio che hai pubblicato',
	],

	'FW_NOTIFICATION_REPLY'		=> '%s ha risposto a un commento sul tuo muro',

	'FW_NOTIFICATION_SHARE'			=> [
		1	=> '%s ha condiviso un commento sul tuo muro',
		2	=> '%s hanno condiviso un commento sul tuo muro',
	],

	'SUBSCRIPTION_REMOVED'				=> 'La sottoscrizione è stata rimossa con successo.',

	// Installazione
	'EXT_INSTALL_ERROR'		=> 'Questa estensione non è compatibile con alcune estensioni installate.<br />Consulta la documentazione per ulteriori informazioni.',
	'CORE_INSTALL_ERROR'	=> 'Non hai caricato tutti i file dal pacchetto di installazione o stai cercando di installare un vecchio pacchetto.<br />
		Assicurati di caricare tutti i file (compresa la cartella <em>core</em>) e di utilizzare un pacchetto scaricato dal sito web ufficiale.',

]);
