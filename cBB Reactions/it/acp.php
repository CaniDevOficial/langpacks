<?php
/**
 * [Italiano [It]]
 * @package cBB Reactions
 * @version 1.0.4 01/04/2025
 *
 * @copyright (c) 2025 CaniDev & Lord Phobos
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
	'ACP_REACTIONS_CONFIG_EXPLAIN'	=> 'Da qui puoi configurare varie opzioni riguardanti le reazioni.',
	'ACP_REACTIONS_MANAGE_EXPLAIN'	=> 'Da qui puoi gestire le reazioni che saranno disponibili sul forum.',
	'ABOVE'							=> 'Sopra',
	'BELOW'							=> 'Sotto',
	'ENABLE_DISABLE'				=> 'Abilita/Disabilita',
	'ERROR_REACTION_NO_EXISTS'		=> 'La reazione selezionata non esiste',
	'ERROR_SCORE_INVALID'			=> 'Il punteggio definito non è valido',
	'NO_REACTIONS' 					=> 'Nessuna reazione aggiunta.',
	'REACTION_ADD'					=> 'Aggiungi reazione',
	'REACTION_COLOR'				=> 'Colore',
	'REACTION_COLOR_EXPLAIN'		=> 'Colore associato a questa reazione.',
	'REACTION_ENABLED'				=> 'Abilita',
	'REACTION_ENABLED_EXPLAIN'		=> 'Definisce se la reazione sarà disponibile per l\'utilizzo.',
	'REACTION_IMAGE'				=> 'Immagine',
	'REACTION_IMAGE_EXPLAIN'		=> 'Immagine/Emoticon relativa a questa reazione.',
	'REACTION_SCORE'				=> 'Punteggio',
	'REACTION_SCORE_EXPLAIN'		=> 'Definisci l\'impatto (sotto forma di punti) che questa reazione avrà sul messaggio.',
	'REACTION_TITLE'				=> 'Titolo',
	'REACTION_TITLE_EXPLAIN'		=> 'Nome o titolo della reazione',
	
	'REACTIONS_ALLOW_CHANGE'			=> 'Permetti di cambiare reazione',
	'REACTIONS_ALLOW_CHANGE_EXPLAIN'	=> 'Definisce se gli utenti possano modificare le loro reazioni ai messaggi.',
	'REACTIONS_ALLOW_MYSELF'			=> 'Permetti le auto reazioni',
	'REACTIONS_ALLOW_MYSELF_EXPLAIN'	=> 'Se abilitato, gli utenti saranno in grado di reagire ai propri messaggi.',
	'REACTIONS_ANONYMOUS'				=> 'Reazioni anonime',
	'REACTIONS_ANONYMOUS_EXPLAIN'		=> 'Abilita questa opzione se non vuoi che i nomi utente appaiano negli elenchi delle reazioni.<br />
		<em>Questa opzione non ha effetto sugli utenti autorizzati a moderare le reazioni.</em>',
	'REACTIONS_BUTTON_POSITION'			=> 'Posizione del pulsante',
	'REACTIONS_BUTTON_POSITION_EXPLAIN'	=> 'Definisce dove apparirà il pulsante per reagire nel messaggio.',
	'REACTIONS_FORCE_ATTACH'			=> 'Forza la reazione per vedere gli allegati',
	'REACTIONS_FORCE_ATTACH_EXPLAIN'	=> 'Se abilitato, gli utenti dovranno reagire ad un messaggio per poterne vedere gli allegati.',
	'REACTIONS_FORCE_REPLY'				=> 'Forza la reazione per rispondere',
	'REACTIONS_FORCE_REPLY_EXPLAIN'		=> 'Se abilitato, gli utenti dovranno reagire al primo post in un topic per potervi rispondere.',
	'REACTIONS_FORUMS'					=> 'orum dove gli utenti possono reagire',
	'REACTIONS_FORUMS_EXPLAIN'			=> 'Definisce i forum in cui verranno visualizzate le reazioni.<br />
		Se non selezioni nessuna reazione, le reazioni verranno visualizzate su tutti i forum.<br />
		Puoi selezionarne quanti ne vuoi usando il tasto <em>Ctrl</em> sulla tastiera.',
	'REACTIONS_LIST_ORDER'				=> 'Ordine di elenco',
	'REACTIONS_LIST_ORDER_EXPLAIN'		=> 'Definisce i criteri che verranno utilizzati per elencare gli utenti nella lista delle reazioni.',
	'REACTIONS_ORDER_TIME'				=> 'Data di reazione',
	'REACTIONS_ORDER_USERNAME'			=> 'Username',
	'REACTIONS_SCORE_ON_PROFILE'		=> 'Mostra il punteggio sul profilo',
	'REACTIONS_SCORE_ON_PROFILE_EXPLAIN'	=> 'Se abilitato, il punteggio di reazione ottenuto da ogni utente sarà mostrato sul loro profilo.',
	'REACTIONS_ZONE_ALL'				=> 'Tutti i post',
	'REACTIONS_ZONE_ONLY_FIRST_POST'	=> 'Solo il primo post',
	'REACTIONS_ZONE_ONLY_REPLIES'		=> 'Solo le risposte',
	'REACTIONS_ZONES'					=> 'Post a cui puoi reagire',
	'REACTIONS_ZONES_EXPLAIN'			=> 'Definisce in quali post apparirà la possibilità di reagire.<br /><br />
		<em>L\'opzione selezionata qui può modificare/limitare il comportamento di alcune altre opzioni dell\'estensione.</em>',

	'SCORE_CUSTOM'			=> 'Personalizzato',
	'SCORE_CUSTOM_VALUE'	=> 'Personalizzato (%s)',
	'SELECT_COLOUR'			=> 'Seleziona colore',
	'SET_AS_DEFAULT'		=> 'Imposta come predefinito',

	'scores' 	=> [
		1 		=> 'Positivo (+1)',
		0 		=> 'Neutrale',
		-1 		=> 'Negativo (-1)',
	],
]);
