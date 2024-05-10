<?php
/**
 * [Italian [It]]
 * @package cBB Chat
 * @version 1.2.5 20/09/2023
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
	'ACP_CHAT_CONFIG_EXPLAIN'	=> 'Grazie per aver scelto cBB Chat come complemento al tuo forum!<br />Da questa pagina puoi modificare le principali funzionalità della chat.',
'ACP_CHAT_PAGES_EXPLAIN'	=> 'Da qui puoi gestire le pagine che caricheranno la chat e la loro posizione.',
'ACP_CHAT_ROOMS_EXPLAIN'	=> 'Da qui puoi gestire le stanze speciali da mostrare nella chat.<br />Puoi ordinare le stanze trascinandole nella posizione corretta.',
'ACP_CHAT_TEXTS_EXPLAIN'	=> 'Da qui puoi gestire gli annunci, i suggerimenti e le regole della chat.<br />
	Per scegliere l\'ordine dei testi, trascinali nella posizione corretta.',

'CHAT_ALLOW_BBCODE'			=> 'Consenti BBcode',
'CHAT_ALLOW_BBCODE_EXPLAIN'	=> 'Definisce se gli utenti possono utilizzare i tag BBcode nella chat.',
'CHAT_ALLOW_PM'				=> 'Consenti messaggi privati',
'CHAT_ALLOW_PM_EXPLAIN'		=> 'Abilita/Disabilita i messaggi privati tra gli utenti.',
'CHAT_ANONYMOUS_ALLOWED'	=> 'Consenti ospiti anonimi',
'CHAT_ANONYMOUS_ALLOWED_EXPLAIN'	=> 'Se abilitato, gli ospiti accederanno alla chat con un nome casuale invece di dover scegliere il proprio nome.<br />
	<em>Questa opzione è valida solo se il gruppo ospiti ha i permessi per visualizzare la chat.</em>',
'CHAT_AUTOCONNECT'			=> 'Autoconnessione',
'CHAT_AUTOCONNECT_EXPLAIN'	=> 'Imposta se la chat si connette automaticamente al caricamento della pagina.',
'CHAT_AUTO_AWAY'			=> 'Tempo status <em>Disponibile</em>',
'CHAT_AUTO_AWAY_EXPLAIN'	=> 'Definisce il tempo (in minuti) dopo il quale lo stato di un utente <em><strong>Disponibile</strong></em> passa a <em><strong>Assente</strong></em>.<br /><em>Imposta a 0 per disabilitare questa funzione</em>.',
'CHAT_AUTO_AWAY_ERROR'		=> 'Il tempo di cambiamento dello stato deve essere inferiore al tempo di disconnessione',
'CHAT_AVATARS'				=> 'Mostra avatar',
'CHAT_BBCODE_FORMAT'		=> 'Formato BBCode personalizzato',
'CHAT_BBCODE_FORMAT_EXPLAIN'	=> 'Imposta l\'aspetto dei BBcode personalizzati nella chat.',
'CHAT_BBCODE_INBUTTON'		=> 'Pulsanti',
'CHAT_BBCODE_INSELECT'		=> 'Menu selezionabile',
'CHAT_CHARS'				=> 'Caratteri nei messaggi',
'CHAT_CHARS_EXPLAIN'		=> 'Numero massimo di caratteri consentiti nei messaggi.<br />
	<em>Imposta 0 per disabilitare questo limite</em>.',
'CHAT_DIRECTION'			=> 'Direzione dei messaggi',
'CHAT_DIRECTION_EXPLAIN'	=> 'Imposta l\'ordine dei messaggi nella chat.',
'CHAT_DIRECTION_DOWN'		=> 'Più vecchi prima',
'CHAT_DIRECTION_UP'			=> 'Più recenti prima',
'CHAT_DISALLOWED_BBCODE'	=> 'Tag BBcode non consentiti',
'CHAT_DISALLOWED_BBCODE_EXPLAIN'	=> 'Tag BBcode che <strong>non</strong> saranno consentiti nella chat.<br />
	Puoi selezionare più tag utilizzando il tasto <em>Ctrl</em> sulla tastiera.',
'CHAT_FLOOD'				=> 'Limite flood',
'CHAT_FLOOD_EXPLAIN'		=> 'Imposta il tempo (in secondi) che gli utenti devono attendere per scrivere un nuovo messaggio.<br />
	<em>Imposta 0 per disabilitare questo limite</em>.',
'CHAT_FORUM_POSTS'			=> 'Messaggi del forum',
'CHAT_FORUM_POSTS_EXPLAIN'	=> 'Imposta se i nuovi argomenti o i nuovi messaggi nel forum saranno mostrati nelle stanze della chat.',
'CHAT_GROUP_USERS'			=> 'Raggruppa utenti per gruppi',
'CHAT_GROUP_USERS_EXPLAIN'	=> 'Se abilitato, gli utenti verranno raggruppati nella chat in base al loro gruppo predefinito.',
'CHAT_HEIGHT'				=> 'Altezza chat',
'CHAT_HEIGHT_EXPLAIN'		=> 'Imposta l\'altezza (in pixel) del contenitore della conversazione.',
'CHAT_HEIGHT_PAGE'			=> 'Altezza chat',
'CHAT_HEIGHT_PAGE_EXPLAIN'	=> 'Imposta l\'altezza (in pixel) del contenitore della conversazione in questa pagina.<br /><em>Imposta 0 per utilizzare il valore predefinito.</em>',
'CHAT_HIDE_POPUP'			=> 'Nascondi menu automaticamente',
'CHAT_HIDE_POPUP_EXPLAIN'	=> 'Se abilitato, i menu BBcode, colore ed emoticon si chiuderanno automaticamente quando verrà eseguita l\'azione.',
'CHAT_MAIN_CONFIG'			=> 'Configurazione principale',
'CHAT_MESSAGES_CONFIG'		=> 'Configurazione messaggi',
'CHAT_NOTICES_ADD'			=> 'Aggiungi avviso',
'CHAT_NOTICES_EDIT'			=> 'Modifica avviso',
'CHAT_NOTICES_EXPLAIN'		=> 'Questi testi saranno mostrati come <em>avvisi</em> o notifiche nella parte superiore della chat.',
'CHAT_NOTICES_ITEM'			=> 'Avviso',
'CHAT_NOTICES_ITEM_EXPLAIN'	=> 'Puoi utilizzare variabili di lingua, ad esempio <em>{L_CHAT}</em>.<br />
	<em>È consentito l\'utilizzo di BBcode o HTML.<br />
	Sono consentite le emoticon.</em>',
'CHAT_NOTICES'				=> 'Avvisi',
'CHAT_PAGE_ALIAS'			=> 'Alias pagina',
'CHAT_PAGE_ALIAS_EXPLAIN'	=> 'Imposta un ID univoco per la pagina che verrà utilizzato nel file di configurazione.<br /><em>Sono consentite solo lettere e numeri.</em>',
'CHAT_PAGE_CONFIG'			=> 'Configurazione pagina',
'CHAT_PAGE_CUSTOM'			=> 'Percorso personalizzato',
'CHAT_PAGE_CUSTOM_EXPLAIN'	=> 'Imposta il percorso completo (relativo a phpBB) della pagina.<br />Ad esempio: <em>cartella/file.php</em>.',
'CHAT_PAGE_ENABLED'			=> 'Pagina chat abilitata',
'CHAT_PAGE_ENABLED_EXPLAIN'	=> 'Abilita/Disabilita la pagina principale della chat.',
'CHAT_PAGE_FILE'			=> 'Nome file',
'CHAT_PAGE_FILE_EXPLAIN'	=> 'Imposta il file che caricherà la chat.',
'CHAT_PAGE_FORUMS'			=> 'Forum',
'CHAT_PAGE_FORUMS_EXPLAIN'	=> 'Imposta i forum in cui verrà visualizzata la chat.<br />Puoi selezionarne quanti desideri utilizzando il tasto <em>Ctrl</em> sulla tastiera.<br /><em>Se non selezioni alcun forum, la chat verrà mostrata in tutti.</em> ',
'CHAT_PM_CONFIG'			=> 'Configurazione messaggio privato',
'CHAT_PM_IGNORE_FLOOD'		=> 'Ignora limite flood',
'CHAT_PM_IGNORE_FLOOD_EXPLAIN'	=> 'Se abilitato, il limite di flood stabilito non verrà applicato durante la scrittura di messaggi privati tra utenti.',
'CHAT_PM_MAX'				=> 'Limite messaggi privati',
'CHAT_PM_MAX_EXPLAIN'		=> 'Imposta il numero massimo di messaggi privati che un utente può aprire contemporaneamente.<br /><em>Imposta 0 per disabilitare questo limite</em>.',
'CHAT_PM_MAXAGE'			=> 'Tempo di archiviazione',
'CHAT_PM_MAXAGE_EXPLAIN'	=> 'Imposta il tempo (in giorni) in cui i messaggi privati verranno conservati.
	<br />I messaggi che superano questa età verranno eliminati.
	<br /><br /><em>Valore minimo 1, valore massimo 365</em>.',
'CHAT_POSITION'				=> 'Posizione chat',
'CHAT_POSITION_EXPLAIN'		=> 'Posizione della chat all\'interno della pagina.',
'CHAT_POSITION_BOTTOM'		=> 'In basso',
'CHAT_POSITION_TOP'			=> 'In alto',
'CHAT_REFRESH_TIME'			=> 'Intervallo di aggiornamento',
'CHAT_REFRESH_TIME_EXPLAIN'	=> 'Intervallo di tempo (in secondi) che la chat attende per aggiornarsi.',
'CHAT_REMEMBER_STATUS'		=> 'Ricorda stato utente',
'CHAT_REMEMBER_STATUS_EXPLAIN'	=> 'Se abilitato, la chat ricorderà lo stato degli utenti nelle nuove connessioni, tuttavia, gli utenti avranno lo stato <em><strong>Disponibile</strong></em> quando si connettono.',
'CHAT_ROOM_AUTH'			=> 'Permessi di visualizzazione',
'CHAT_ROOM_AUTOPURGE'		=> 'Autoeliminazione',
'CHAT_ROOM_AUTOPURGE_EXPLAIN'	=> 'Definisce con quale frequenza tutti i messaggi vengono rimossi da questa stanza.',
'CHAT_ROOM_CONFIG'			=> 'Configurazione stanza',
'CHAT_ROOM_CONNECTIONS'		=> 'Connessioni',
'CHAT_ROOM_ENABLED'			=> 'Stanza abilitata',
'CHAT_ROOM_GROUPS'			=> 'Gruppi consentiti',
'CHAT_ROOM_GROUPS_EXPLAIN'	=> 'Imposta i gruppi di utenti che possono utilizzare questa stanza.<br />Puoi selezionare più gruppi utilizzando il tasto <em>Ctrl</em> sulla tastiera.',
'CHAT_ROOM_GUEST_FORUMS'			=> 'Forum collegati a questa stanza',
'CHAT_ROOM_GUEST_FORUMS_EXPLAIN'	=> 'Qui puoi selezionare i forum dai quali verranno mostrati gli argomenti e i messaggi nella stanza principale della chat.<br />
	Se non ne selezioni nessuno, verranno utilizzati tutti (eccetto quelli assegnati ad altre stanze).<br />
	Puoi selezionarne quanti desideri utilizzando il tasto <em>Ctrl</em> sulla tastiera.',
'CHAT_ROOM_LINKED_FORUMS'			=> 'Forum collegati a questa stanza',
'CHAT_ROOM_LINKED_FORUMS_EXPLAIN'	=> 'Questa stanza sarà la stanza predefinita per i forum selezionati qui e gli argomenti e i messaggi di questi forum verranno mostrati in questa stanza anziché nella stanza Generale.<br />
	Puoi selezionarne quanti desideri utilizzando il tasto <em>Ctrl</em> sulla tastiera.',
'CHAT_ROOM_LINKED_GROUPS'			=> 'Gruppi collegati a questa stanza',
'CHAT_ROOM_LINKED_GROUPS_EXPLAIN'	=> 'Questa stanza verrà aperta per impostazione predefinita per i gruppi selezionati qui.<br />
	Puoi selezionarne quanti desideri utilizzando il tasto <em>Ctrl</em> sulla tastiera.',
'CHAT_ROOM_ADDED'			=> 'La stanza è stata creata con successo.',
'CHAT_ROOM_UPDATED'			=> 'La configurazione della stanza è stata modificata con successo.',
'CHAT_ROOM_MSG_LIMIT'		=> 'Limite messaggi',
'CHAT_ROOM_MSG_LIMIT_EXPLAIN'	=> 'Imposta il numero massimo di messaggi che vengono memorizzati in questa stanza. Se viene superato questo limite, i messaggi più vecchi vengono eliminati periodicamente.
	<br /><em>Imposta 0 per disabilitare questo limite.</em>',
'CHAT_ROOM_TITLE'			=> 'Titolo stanza',
'CHAT_ROOM_TITLE_EXPLAIN'	=> 'Supporta variabili di lingua.',
'CHAT_ROOM_USERS'			=> 'Utenti consentiti',
'CHAT_ROOM_USERS_EXPLAIN'	=> 'Imposta gli utenti che possono utilizzare questa stanza.<br />Imposta un nome utente per riga.',
'CHAT_ROW_ALIGN'			=> 'Allineamento messaggi',
'CHAT_ROW_ALIGN_EXPLAIN'	=> 'Definisce su quale lato verranno visualizzati i messaggi nella chat.<br /><em>Quest\'impostazione è influenzata se la lingua utilizzata è RTL.</em>',
'CHAT_ROW_BUBBLE'			=> 'Bolla',
'CHAT_ROW_FORMAT'			=> 'Formato messaggio',
'CHAT_ROW_FORMAT_EXPLAIN'	=> 'Definisce lo stile visivo dei messaggi.',
'CHAT_ROW_LEFT'				=> 'Mostra a sinistra',
'CHAT_ROW_MEOTHER'			=> 'Mostra utente corrente da un lato e il resto dall\'altro',
'CHAT_ROW_NORMAL'			=> 'Normale',
'CHAT_ROW_RIGHT'			=> 'Mostra a destra',
'CHAT_ROW_ZIGZAG'			=> 'Mostra in ZigZag',
'CHAT_ROWS'					=> 'Messaggi nella chat',
'CHAT_ROWS_EXPLAIN'			=> 'Numero massimo di messaggi che verranno mostrati nel contenitore della conversazione.',
'CHAT_RULES_ADD'			=> 'Aggiungi regola',
'CHAT_RULES_EDIT'			=> 'Modifica regola',
'CHAT_RULES_EXPLAIN'		=> 'Questi testi saranno mostrati come <em>regole</em> nell\'elenco delle regole della chat.',
'CHAT_RULES_ITEM'			=> 'Regola',
'CHAT_RULES_ITEM_EXPLAIN'	=> 'Puoi utilizzare variabili di lingua, ad esempio <em>{L_CHAT}</em>.<br />
	<em>È consentito l\'utilizzo di BBcode o HTML.<br />
	Sono consentite le emoticon.</em>',
'CHAT_RULES'				=> 'Regole',
'CHAT_SOUND_ENABLED'		=> 'Suono abilitato',
'CHAT_SHOW_NONE'			=> 'Non mostrare',
'CHAT_SHOW_POSTS'			=> 'Tutti i nuovi messaggi',
'CHAT_SHOW_TOPICS'			=> 'Solo nuovi argomenti',
'CHAT_TIMEOUT'				=> 'Tempo di disconnessione',
'CHAT_TIMEOUT_EXPLAIN'		=> 'Imposta il tempo (in minuti) che la chat impiega per considerare un utente "inattivo" e scollegare la chat.<br /><em>Imposta a 0 per disabilitare questa funzione</em>.',
'CHAT_TIPS_ADD'				=> 'Aggiungi suggerimento',
'CHAT_TIPS_EDIT'			=> 'Modifica suggerimento',
'CHAT_TIPS_EXPLAIN'			=> 'Questi testi saranno mostrati come piccoli <em>suggerimenti</em> sopra il campo di input della chat.',
'CHAT_TIPS_ITEM'			=> 'Suggerimento',
'CHAT_TIPS_ITEM_EXPLAIN'	=> 'Puoi utilizzare variabili di lingua, ad esempio <em>{L_CHAT}</em>.<br />
	<em>È consentito l\'utilizzo di BBcode o HTML.<br />
	Sono consentite le emoticon.</em>',
'CHAT_TIPS'					=> 'Suggerimenti',
'CHAT_USERS_CONFIG'			=> 'Configurazione utente',

'EACH_DAY'		=> 'Ogni giorno',
'EACH_WEEK'		=> 'Ogni settimana',
'EACH_MONTH'	=> 'Ogni mese',
'EACH_YEAR'		=> 'Ogni anno',

'ADD_ROOM'					=> 'Aggiungi stanza',
'CONTENT'					=> 'Contenuto',
'CUSTOM_BBCODES'			=> 'BBcode personalizzati',
'CUSTOM_FILE'				=> 'File personalizzato',
'CUSTOM_FILES'				=> 'File personalizzati',
'DEFAULT_BBCODES'			=> 'BBcode predefiniti',
'FORUM_FILES'				=> 'File del forum',
'NO_PAGES'					=> 'Nessuna pagina disponibile',
'NO_ROOM'					=> 'La stanza selezionata non esiste',
'NO_TEXTS'					=> 'Nessun testo disponibile',
'PAGE_ADD'					=> 'Aggiungi pagina',
'PAGE_ALIAS'				=> 'Alias pagina',
'PAGE_URL'					=> 'URL pagina',
'ROOM_TITLE'				=> 'Titolo stanza',
'SELECT_PAGE'				=> 'Seleziona file',

'INVALID_FILE'			=> 'Il file non esiste o ha un formato non valido.',
'NO_ALIAS'				=> 'L\'Alias della pagina non è valido.',
'PAGE_ALREADY_EXISTS'	=> 'La pagina è già in uso.',

'REMOVE_ROOM_CONFIRM'	=> 'Sei sicuro di voler eliminare questa stanza e tutti i messaggi?',

]);
