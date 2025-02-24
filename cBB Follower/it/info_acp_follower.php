<?php
/**
 * [Italiano [It]]
 * @package cBB Follower
 * @version 2.0.6 24/02/2025
 *
 * @copyright (c) 2025 CaniDev & Lord Phobos
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * @acp_follower
*/
$lang = array_merge($lang, [
	'ACP_CAT_FOLLOWER'				=> 'Follower',

	'ACP_FOLLOWER_COMMENTS'			=> 'Impostazioni commenti',
	'ACP_FOLLOWER_CONFIG'			=> 'Configurazione principale',
	'ACP_FOLLOWER_CONFIG_EXPLAIN'	=> 'Grazie per aver scelto cBB Follower come complemento per il tuo forum! <br /> Da questa pagina puoi modificare le caratteristiche principali del follower degli utenti.',
	'ACP_FOLLOWER_TOOLS'			=> 'Strumenti',
	'ACP_FOLLOWER_TOOLS_EXPLAIN'	=> 'Qui troverai strumenti aggiuntivi per l\'amministrazione dell\'estensione.',

	'FWR_ADVANCED_COMMENTS'			=> 'Informazioni avanzate nei commenti',
	'FWR_ADVANCED_COMMENTS_EXPLAIN'	=> 'Definisci se consentire l\'inclusione di immagini nei commenti sul muro.',
	'FWR_ALLOW_COMMENTS'			=> 'Attiva commenti tra utenti',
	'FWR_DEFAULT_PROFILE'			=> 'Imposta come profilo predefinito',
	'FWR_DEFAULT_PROFILE_EXPLAIN'	=> 'Se abilitato, il muro e l\'attività degli utenti verranno visualizzati invece del loro profilo convenzionale.',
	'FWR_ENABLE_MENTIONS'			=> 'Attiva le menzioni',
	'FWR_ENABLE_MENTIONS_EXPLAIN'	=> 'Definisce se nel forum sarà abilitata la funzione di menzione degli utenti.',
	'FWR_MAXLENGTH'					=> 'Massimo caratteri',
	'FWR_MAXLENGTH_EXPLAIN'			=> 'Limite di caratteri consentiti nei commenti.',
	'FWR_POPUP_ALL'					=> 'Mostra in tutto il forum',
	'FWR_POPUP_NONE'				=> 'Non mostrare',
	'FWR_POPUP_PROFILE'				=> 'Mostra solo nel profilo',
	'FWR_ROW_LIMIT'					=> 'Numero massimo righe',
	'FWR_ROW_LIMIT_EXPLAIN'			=> 'Numero massimo di righe che verranno visualizzate contemporaneamente.',
	'FWR_RESIZE_IMAGES'				=> 'Ridimensiona immagini',
	'FWR_RESIZE_IMAGES_EXPLAIN'		=> 'Se abilitato, le immagini caricate verranno ridimensionate alla dimensione massima specificata per gli allegati del forum.',
	'FWR_RESYNC_COMMENTS'			=> 'Sincronizza commenti',
	'FWR_RESYNC_COMMENTS_EXPLAIN'	=> 'Ricalcola il numero totale di commenti pubblicati da ciascun utente.',
	'FWR_RESYNC_FOLLOWERS'			=> 'Sincronizza seguaci',
	'FWR_RESYNC_FOLLOWERS_EXPLAIN'	=> 'Ricalcola il numero totale di follower di ciascun utente.',
	'FWR_RESYNC_INTERACTIONS'		=> 'Sincronizza interazioni',
	'FWR_RESYNC_INTERACTIONS_EXPLAIN'	=> 'Ricalcola il numero di interazioni (Mi piace / Condivisione) di post e commenti.',
	'FWR_RESYNC_SUCCESS'			=> 'La sincronizzazione è stata completata con successo',
	'FWR_STORE_TIME'				=> 'Salva commenti degli utenti',
	'FWR_STORE_TIME_EXPLAIN'		=> 'Se è impostato un limite di tempo, i commenti al di fuori di tale limite verranno eliminati automaticamente.',
	'FWR_USER_POPUP'				=> 'Mostra casella informazioni flottante',
	'FWR_USER_POPUP_EXPLAIN'		=> 'Determina in quali circostanze verrà visualizzata una casella informazioni flottante con le informazioni dell\'utente quando il mouse si muove sopra il suo nome.',
	
	'LOG_FWR_CONFIG'				=> '<strong>cBB Follower<\/strong> Modificata la configurazione principale',
	'LOG_FWR_RESYNC_COMMENTS'		=> '<strong>cBB Follower<\/strong> Sincronizzati i commenti',
	'LOG_FWR_RESYNC_FOLLOWERS'		=> '<strong>cBB Follower<\/strong> Sincronizzati i follower',
	'LOG_FWR_RESYNC_INTERACTIONS'	=> '<strong>cBB Follower<\/strong> Sincronizzate le interazioni',
]);
