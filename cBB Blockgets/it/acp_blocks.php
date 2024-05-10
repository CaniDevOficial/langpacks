<?php
/**
 * [Italiano [It]]
 *
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

/**
 * @acp_blockgets_pages
*/
$lang = array_merge($lang, [
	// Blocks global config
	'BLOCK_COLLAPSE'			=> 'Permetti di minimizzare il blocco',
	'BLOCK_COLLAPSE_EXPLAIN'	=> 'Abilita o disabilita la possibilità per ogni utente di minimizzare/massimizzare questo blocco e definisce il suo stato iniziale.',
	'BLOCK_ENABLED'				=> 'Blocco abilitato',
	'BLOCK_ENABLED_EXPLAIN'		=> 'Definisce se questo blocco verrà mostrato nel forum.',
 	'BLOCK_CURRENT_ICON'			=> 'Icona del blocco',
	'BLOCK_CURRENT_ICON_EXPLAIN'	=> 'Attuale icona associate al blocco.',
	'BLOCK_GROUP'				=> 'Gruppi',
	'BLOCK_GROUP_EXPLAIN'		=> 'Scegli i gruppi che possano vedere questo blocco nel forum.<br />Puoi selezionare gruppi multipli utilizzando il tasto <em>Ctrl</em> sulla tua tastiera.',
	'BLOCK_NO_CONFIG'			=> 'Questo blocco non richiede configurazione addizionale',
	'BLOCK_STYLE'				=> 'Aspetto del blocco',
	'BLOCK_STYLE_EXPLAIN'		=> 'Con quest\'opzione puoi scegliere l\'aspetto di ogni blocco individualmente. Nota che il modo in cui viene mostrato dipende dallo stile installato sul forum e la sua compatibilità con l\'estensione.',
	'BLOCK_TITLE'				=> 'Titolo del blocco',
	'BLOCK_TITLE_EXPLAIN'		=> 'Nome unico per il tuo blocco.<br />Questo titolo verrà mostrato nel blocco.<br />Limite: 100 caratteri.',

	// Common tags
	'ALL_FORUMS'				=> 'Tutti i forum',
	'COLLAPSE_HIDDEN'			=> 'Permetti (minimizzato per predefinito)',
	'COLLAPSE_NONE'				=> 'Non Permettere',
	'COLLAPSE_VISIBLE'			=> 'Permetti (mostrato per predefinito)',
	'CONFIG'					=> 'Configurazione',
	'DESIGN_FULL'				=> 'Pieno',
	'DESIGN_SIMPLE'				=> 'Semplice',
	'FORUMS'					=> 'Forum',
	'FORUMS_EXPLAIN'			=> 'I forum che contengano i topic da mostrare. Puoi selezionarne quanti ne vuoi utilizzando il tasto <em>Ctrl</em> sulla tua tastiera.',
	'IGNORE_AUTH'				=> 'Ignora autorizzazioni',
	'IGNORE_AUTH_EXPLAIN'		=> 'Se abilitato, mostrerà tutto il suo contenuto ignorando se l\'utente abbia il permesso di vederlo.',
	'NO_LISTS'					=> 'Nessuna lista disponibile',
	'SHOW_PAGINATION'			=> 'Mostra paginazione',
	'SHOW_PAGINATION_EXPLAIN'	=> 'Mostra la paginazione per permettere all\'utente di vedere post più vecchi.',
	'TITLE_LIMIT'				=> 'Limite titoli',
	'TITLE_LIMIT_EXPLAIN'		=> 'Il massimo numero di caratteri che saranno mostrati nei titoli dei topic.<br />
		<em>Imposta 0 per mostrare il titolo completo.</em>',
	'TOPIC_DESIGN'				=> 'Design del blocco',
	'TOPIC_DESIGN_EXPLAIN'		=> 'Determina come verranno mostrati i topic nel blocco.<br />
		<em><strong>Pieno:</strong> Mostra tutte le informazioni ogni volta che sia possibile.</em><br />
		<em><strong>Semplice:</strong> Mostra solo informazioni di base.</em>',
	'TOPIC_PARENT_SHOW'			=> 'Mostra forum genitore',
	'TOPIC_PARENT_SHOW_EXPLAIN'	=> 'Se abilitato, verrà mostrato un collegamento al forum per ogni topic.',
	
	// age_ranges_block
	'AGE_START'					=> 'Età minima',
	'AGE_END'					=> 'Età massima',
	'AGE_INTERVAL'				=> 'Intervallo',
	
	// announcements_block
	'ANN_MAX_NUMBER'			=> 'Numero di annunci',
	'ANN_MAX_NUMBER_EXPLAIN'	=> 'Il massimo numero di annunci che verranno mostrati nel blocco.',
	'ANN_MAX_SIZE'				=> 'Dimensioni annunci',
	'ANN_MAX_SIZE_EXPLAIN'		=> 'La dimensione massima dei caratteri permessi negli annunci. Il testo verrà troncato se eccede questo valore.',
	'ANN_SHOW_GLOBALS'			=> 'Mostra annunci globali',
	'ANN_SHOW_GLOBALS_EXPLAIN'	=> 'Se abilitato leggerà anche gli annunci indicati come "globali", altrimenti leggerà solamente gli annunci semplici.',
	'ANN_COLLAPSE'				=> 'Minimizza annunci',
	'ANN_COLLAPSE_EXPLAIN'		=> 'Se abilitato, il blocco mostrerà un solo annuncio e minimizzerà il resto. Altrimenti, gli annunci appariranno tutti assieme nel blocco.',
	
	// attachments_block
	'ATTACH_FORUM'				=> 'Allegati del forum',
	'ATTACH_FORUM_EXPLAIN'		=> 'Se specificato, mostra solo gli allegati da questo forum ignorando il resto.<br />Il forum deve direttamente contenere il topic con gli allegati, vengono ignorate le categorie o i forum genitori.',
	'ATTACH_EXTENSION'			=> 'Estensioni allegati',
	'ATTACH_EXTENSION_EXPLAIN'	=> 'Se specificato, tutti gli allegati che non contengono queste estensioni verrannno ignorati.<br />Dividi le estensioni con ",".<<br />Per esempio estensioni valide: jpg,png,gif...',
	'ATTACH_NUM'				=> 'Numero di allegati',
	'ATTACH_NUM_EXPLAIN'		=> 'Numero massimo di allegati che vengano mostrati simultaneamente nel blocco.',
	'ATTACH_SPECIFIC'			=> 'Allegato specifico',
	'ATTACH_SPECIFIC_EXPLAIN'	=> 'Se specificato, solo l\'allegato con il nome specificato verrà mostrato nel blocco. Il campo deve contenere il nome del file originale dell\'allegato, per esempio: myiofile.jpg<br /><br /><strong>Nota:</strong> questo campo sovrascrive gli altri campi.',

	// banners_block, banners_multiple_block
	'BANNERS_TITLE'				=> 'Titolo banner',
	'BANNERS_TITLE_EXPLAIN'		=> 'Se abilitato, il titolo apparirà sotto ai banner nel blocco.',
	'BANNERS_LS_TYPE'			=> 'Tipo di lista',
	'BANNERS_LS_TYPE_EXPLAIN'	=> 'Definisce come mostrare i banner.<br />Può essere impostato uno scorrimento orizzontale o verticale o rimanere fisso.',
	'BANNERS_NUMBER'			=> 'Banner da mostrare',
	'BANNERS_NUMBER_EXPLAIN'	=> 'Massimo numero di banner da mostrare nel blocco.<br />
		<em>Imposta a 0 per mostrare tutta la lista.</em>',
	'BANNERS_RANDOM'			=> 'Ordine casuale',
	'BANNERS_RANDOM_EXPLAIN'	=> 'Imposta se gli elementi verranno mostrati nell\'ordine elencato o in ordine casuale.',
	'LIST_NO_SCROLL'			=> 'Nessuno scorrimento',
	'LIST_SCROLL_H'				=> 'Scorrimento orizzontale',
	'LIST_SCROLL_V'				=> 'Scorrimento verticale',
	'BANNERS_B_HEIGHT'			=> 'Altezza blocco',
	'BANNERS_B_HEIGHT_EXPLAIN'	=> 'Inserisci l\'altezza del blocco che verrà utilizzato per far scorrere le liste.',

	// birthdays_block
 	'NEXT_BIRTHDAYS'			=> 'Compleanni in arrivo',
 	'NEXT_BIRTHDAYS_EXPLAIN'	=> 'Mostra i compleanni che coincideranno coi giorni in arrivo.<br />
 		<em>Massimo 30 giorni. Imposta a 0 per disabilitarlo.</em>',

	// calendar_block
 	'CALENDAR_EVENTS'				=> 'Mostra eventi',
 	'CALENDAR_EVENTS_EXPLAIN'		=> 'Se abilitato, gli eventi verranno segnati e mostrati nel calendario.',
 	'CALENDAR_MONTHS'				=> 'Mesi da mostrare',
 	'CALENDAR_MONTHS_EXPLAIN'		=> 'Il numero di mesi da visualizzare simultaneamente sul blocco.',

	// contact block
	'CONTACT_CHECK_EMAIL'			=> 'Verifica email',
	'CONTACT_CHECK_EMAIL_EXPLAIN'	=> 'Se abilitato, il dominio della email dell\'utente verrà verificato e validato.',
	'CONTACT_EMAIL'					=> 'Email bersaglio',
	'CONTACT_HIDE_FIELDS'			=> 'Nascondi i dati dell\'utente',
	'CONTACT_HIDE_FIELDS_EXPLAIN'	=> 'Se abilitato, i campi "Nome" e "Email" per gli utenti registrati saranno nascosti ed il blocco utilizzerà i valori dei loro profili.',
 
	// countdown block
	'COUNTDOWN_COMPLETE_MSG'			=> 'Testo al completamento',
	'COUNTDOWN_COMPLETE_MSG_EXPLAIN'	=> 'Il testo che sarà mostrato quando il contatore raggiungerà 0.',
	'COUNTDOWN_TARGET'					=> 'Scadenza',
	'COUNTDOWN_TARGET_EXPLAIN'			=> 'Imposta data e ora alle quali il contatore raggiungerà 0.<br /><br />
		<em><strong>Formati validi</strong>
			<br />Anno/Mese/Giorno
			<br />Anno/Mese/Giorno Ora:Minuto:Secondo
		</em>',
	'COUNTDOWN_RUNNING_MSG'				=> 'Testo di attesa',
	'COUNTDOWN_RUNNING_MSG_EXPLAIN'		=> 'Testo da mostrare mentre il contatore sta correndo.',

	// counter block
	'COUNTER_LOCAL'				=> 'Contatore locale',
	'COUNTER_LOCAL_EXPLAIN'		=> 'Se abilitato, il contatore mostrerà soltanto le visite alla sua pagia, altrimenti il contattore mostra le visite totali al forum.',

	// empty_block
	'BLOCK_CONTENT'				=> 'Contenuto del blocco',
	'BLOCK_CONTENT_EXPLAIN'		=> 'Contenuto da mostrare nel blocco.<br />Limite: 8000 charatteri.<br /><br />Sono permesse le variabili di lingua e di template, per esempio, usa <em>{S_USERNAME}</em> per mostrare il nome dell\'utente.',

	// clock_block
	'DISPLAY_CLOCK'				=> 'Orologio da mostrare',
	'DISPLAY_CLOCK_EXPLAIN'		=> 'Orologio mostrato nel blocco.',
	'PREVIEW_CLOCK'				=> 'Anteprima',
	'PREVIEW_CLOCK_EXPLAIN'		=> 'Anteprima dell\'orologio selezionato.',

	// cloud_tags_block
	'CLOUD_ANIMATION'			=> 'Animazione abilitata',
	'CLOUD_ANIMATION_EXPLAIN'	=> 'Se abilitato, le parole "tag" appariranno in un\'animata nuvola di tag, altrimenti appariranno come parole fisse nel blocco.',
	'CLOUD_MODE'				=> 'Tipio di parole',
	'CLOUD_MODE_EXPLAIN'		=> 'Specifica quali parole verranno mostrate nel blocco.',
	'CLOUD_WORDS'				=> 'Numero di parole',
	'CLOUD_WORDS_EXPLAIN'		=> 'Il massimo numero di parole che appariranno nel blocco.',
	'MODE_SEARCH'				=> 'Le ultime parole cercate',
	'MODE_USERS'				=> 'Gli utenti con più post',
	
	// forums block
	'FORUMS_FORUM'		=> 'Forum da mostrare',
	
	// frame_block
	'MIME_HTML'			=> 'Pagina Web',
	'MIME_PDF'			=> 'file PDF',
	'MIME_PLAIN'		=> 'File di testo semplice',

	'FRAME_HEIGHT'				=> 'Altezza del frame',
	'FRAME_HEIGHT_EXPLAIN'		=> 'Altezza del frame in pixel Imposta a 0 per aggiustamento automatico.',
	'FRAME_MIMETYPE'			=> 'Tipo di documento',
	'FRAME_MIMETYPE_EXPLAIN'	=> 'Il tipo di documento mostrato nel frame.',
	'FRAME_URL'					=> 'URL del documento',
	'FRAME_URL_EXPLAIN'			=> 'L\'URL della pagina o del documento da mostrare nel frame.',
	'FRAME_WIDTH'				=> 'Larghezza del frame',
	'FRAME_WIDTH_EXPLAIN'		=> 'Larghezza del frame in pixel. Imposta a 0 per aggiustamento automatico.',
	
	// gallery_block
	'GALLERY_CUSTOM'				=> 'Immagini personalizzate',
	'GALLERY_CUSTOM_EXPLAIN'		=> 'Specifica la lista contenente le immagini da mostrare.',
	'GALLERY_DIRECTION'				=> 'Direzione di scorrimento',
	'GALLERY_FORUMS'				=> 'Forum',
	'GALLERY_FORUMS_EXPLAIN'		=> 'Definisce i forum da cui leggere gli allegati.',
	'GALLERY_FPS'					=> 'Velocità di scorrimento',
	'GALLERY_HEIGHT'				=> 'Altezza gallerita',
	'GALLERY_MANAGE'				=> 'Gestisci galleria',
	'GALLERY_MARGIN'				=> 'MArgine immagine',
	'GALLERY_MAX_NUMBER'			=> 'Numero di immagini',
	'GALLERY_MAX_NUMBER_EXPLAIN'	=> 'Il massimo numero di allegati che verranno letti dai forum/topic/post',
	'GALLERY_ORDER'					=> 'Ordine dei topic/messaggi',
	'GALLERY_ORDER_EXPLAIN'			=> 'Definisce l\'ordine in cui i topic o i post del forum saranno caricati.',
	'GALLERY_POSTS'					=> 'Post',
	'GALLERY_POSTS_EXPLAIN'			=> 'ID dei Post da cui leggere gli allegati, separati da virgole. (Esempio: 1,2,3).',
	'GALLERY_SOURCE'				=> 'Origine delle immagini',
	'GALLERY_SOURCE_EXPLAIN'		=> 'Definisce che tipo di immagini verranno caricate dai forum, topic o messaggi specificati.',
	'GALLERY_TOPICS'				=> 'Topic',
	'GALLERY_TOPICS_EXPLAIN'		=> 'ID dei Topic da cui leggere gli allegati, separati da virgole. (Esempio: 1,2,3).',
	'GALLERY_ZOOM'					=> 'Zoom',
	'GALLERY_ZOOM_EXPLAIN'			=> 'Differenza di dimensioni con il mouse over sull\'immagine (in pixel)',

	'GALLERY_ORDER_LAST'			=> 'Prima l\'ultima',
	'GALLERY_ORDER_RAND'			=> 'Casuale',
	
	'GALLERY_SOURCE_ALL'			=> 'Tutte',
	'GALLERY_SOURCE_ATTACHMENTS'	=> 'Solo allegati',
	'GALLERY_SOURCE_IMAGES'			=> 'Solo immagini incorporate',
	
	'IMG_TITLE'			=> 'Titolo immagine',
	'IMG_URL'			=> 'Url dell\'immagine',
	'IMG_URL_EXPLAIN'	=> 'Url di un\'immagine JPG, GIF o PNG. Esempio: http://miodominio.com/image.jpg',
	
	// google_translate_block
	'GOOGLE_LANGS'		=> 'Lingue da mostrare nel blocco',
	'GOOGLE_SHOW_NAMES'			=> 'Mostra nomi',
	'GOOGLE_SHOW_NAMES_EXPLAIN'	=> 'Se abilitato, il nome della lingua verrà mostrato vicino alla sua bandiera.',
	
	// latest_bots_block
	'BOTS_NUMBER'				=> 'Bot da mostrare',
	'BOTS_NUMBER_EXPLAIN'		=> 'Numero massimo delle ultime visite dei bot che saranno mostrate nel blocco.',

	// latest_members_block
	'MEMBERS_NUMBER'			=> 'Utenti da mostrare',
	'MEMBERS_NUMBER_EXPLAIN'	=> 'Numero massimo di utenti da mostrare nel blocco.',
	
	// leaders_block
	'LEADERS_ALL_GROUPS'			=> 'Mostra gli utenti in tutti i loro gruppi',
	'LEADERS_ALL_GROUPS_EXPLAIN'	=> 'Se abilitato, gli utenti saranno mostrati in tutti i gruppi di cui sono membri.
		Altrimenti verranno mostrati solo nel loro gruppo predefinito.',
	'LEADERS_GROUPS'				=> 'Gruppi',
	'LEADERS_GROUPS_EXPLAIN'		=> 'Gruppi che saranno mostrati nel blocco. Se non selezioni gruppi, il blocco mostrerà Amministratori e Moderatori.',
	'LEADERS_MODE'					=> 'Modalità di visualizzazione',
	'LEADERS_MODE_ACCORDION'		=> 'A fisarmonica',
	'LEADERS_MODE_SIMPLE'			=> 'Lista Semplice',
	'LEADERS_ONLY_ONLINE'			=> 'Solo utenti online',
	'LEADERS_ONLY_ONLINE_EXPLAIN'	=> 'Se abilitato, verranno mostrati solo gli utenti dei gruppi selezionati che siano collegati.',

	// link_us_block
	'US_BANNER'					=> 'Collegamento al mini banner',
	'US_BANNER_EXPLAIN'			=> 'Il mini banner che sarà l\'immagine che andrà cliccata per accedere dal forum dal collegamento.',

	// Login Block
	'ALT_LOGIN'					=> 'Mostra metodi alternativi',
	'ALT_LOGIN_EXPLAIN'			=> 'Abilita/disabilita la visualizzazione di metodi alternativi di identificazione.<br /><em>Esempio: Oauth</em>',
 	'FULL_LOGIN'				=> 'Mostra login completo',
 	'FULL_LOGIN_EXPLAIN'		=> 'Abilita/disabilita le opzioni avanzate nell\'identificazione dell\'utente.',
 	'SHOW_REGISTER'				=> 'Mostra registrazione',
 	'SHOW_REGISTER_EXPLAIN'		=> 'Visualizza l\'opzione per la registrazione dell\'utente.',
	
	// map_block
	'LATITUDE'					=> 'Latitudine',
	'LONGITUDE'					=> 'Longitudine',
	'LOCATION_ADD'				=> 'Aggiungi posizione',
	'LOCATION_EDIT'				=> 'Modifica posizione',
	'LOCATION_IMAGE'			=> 'Immagine',
	'LOCATION_IMAGE_EXPLAIN'	=> 'Un\'immagine che segnerà il punto sulla mappa.<br /><em>Se non ne definisci nessuna, verrà utilizzato il segnalatore predefinito</em>.',
	'LOCATION_INCORRECT'		=> 'La posizione inserita non è corretta.',
	'LOCATION_POSITION'			=> 'Posizione',
	'LOCATION_POSITION_EXPLAIN'	=> 'Definisce la latitudine e longitudine della posizione.',
	'LOCATION_TEXT'				=> 'Contenuto',
	'LOCATION_TEXT_EXPLAIN'		=> 'Testo da mostrare sulla mappa, cliccando sull\'icona di posizione.<br /><em>E\' permesso il BBcode.</em>',
	'LOCATION_TITLE'			=> 'Titolo',
	'MAP'						=> 'Mappa',
	'MAP_CENTER'				=> 'Punto centrale',
	'MAP_CENTER_EXPLAIN'		=> 'Definisce la latitudine e la longitudine del punto centrale predefinito.',
	'MAP_LOCATIONS'				=> 'Posizioni',
	'MAP_ZOOM'					=> 'Zoom',
	'MAP_ZOOM_EXPLAIN'			=> 'Imposta lo zoom predefinito.',
	'SEARCH_ADDRESS'			=> 'Cerca posizione',
	'SELECT_LOCATION'			=> 'Seleziona posizione',

	// menu_block
 	'ICON_WIDTH'				=> 'Larghezza icona',
 	'ICON_WIDTH_EXPLAIN'		=> 'La larghezza delle icone del blocco, in pixel.',

	// most_poster_block
	'POSTER_LIMIT'				=> 'Limite utenti',
	'POSTER_LIMIT_EXPLAIN'		=> 'Il limite degli utenti che verranno mostrati nel blocco.',
 	'POST_RANGE'				=> 'Range di messaggi',
 	'POST_RANGE_EXPLAIN'		=> 'Tempo limite per il conteggio dei messaggi.',
 
 	'ALL_POSTS'			=> 'Tutti i messaggi',
 	'LAST_DAY'			=> 'Ultimo giorno',
 	'LAST_WEEK'			=> 'Ultima settimana',
 	'LAST_MONTH'		=> 'Ultimo mese',
 	'LAST_YEAR'			=> 'Ultimo anno',

	// news_block
	'NEWS_DISPLAY'				=> 'Informazioni da mostrare',
	'NEWS_DISPLAY_EXPLAIN'		=> '<em><strong>Contenuto base:</strong>Mostra titolo, autore e data.<br />
		<strong>Contenuto completo:</strong>Mostra tutte le informazioni delle notizie.</em>',
	'NEWS_NUMBER'				=> 'Numero delle notizie',
	'NEWS_NUMBER_EXPLAIN'		=> 'Il massimo numero degli oggetti di notizia mostrati nel blocco.',
	'NEWS_SIZE'					=> 'Dimensioni notizie',
	'NEWS_SIZE_EXPLAIN'			=> 'Il massimo numero di caratteri permessi nelle notizie. Il testo delle notizie sarà troncato se eccede questo valore.',
	'NEWS_ALL'					=> 'Mostra tutti i topic',
	'NEWS_ALL_EXPLAIN'			=> 'Se abilitato, leggerai anche gli oggetti segnalati come "annunci" e "importanti", altrimenti leggerai solo i topic "normali".',
	'NEWS_COLLAPSE'				=> 'Minimizza notizie',
	'NEWS_COLLAPSE_EXPLAIN'		=> 'Se abilitato, il blocco conterrà solo una notizia e minimizzerà il resto. Altrimenti, le notizie appariranno tutte assieme nel blocco.',
	'NEWS_SHOW_FULL'			=> 'Contenuto completo',
	'NEWS_SHOW_SIMPLE'			=> 'Contenuto base',
	
	// paypal_block
	'PAYPAL_ACCOUNT'			=> 'Account Paypal',
	'PAYPAL_ACCOUNT_EXPLAIN'	=> 'Inserisci l\'indirizzo e-mail del tuo account Paypal esempio: xxx@xxx.com',
	'PAYPAL_ITEM'				=> 'Descrizione del pagamento',
	'PAYPAL_ITEM_EXPLAIN'		=> 'Inserisci il nome (descrizione) dei pagamenti che verranno identificati attraverso il blocco.',
	'PAYPAL_MSG'				=> 'Messaggio',
	'PAYPAL_MSG_EXPLAIN'		=> 'Messaggio personalizzabile che apparirà nel blocco.<br />Sono permesse variabili di linga e di template, per esempio usa <em>{S_USERNAME}</em> per mosrare il nome dell\'utente.',
	'PAYPAL_IMG'				=> 'Immagine del pulsante',
 	'PAYPAL_IMG_EXPLAIN'		=> 'L\'immagine da usare per il pulsante "dona". Lascia questo campo vuoto per usare l\'immagine predefinita.', 
	'PAYPAL_AMOUNTS'			=> 'Ammontare',
	'PAYPAL_AMOUNTS_EXPLAIN'	=> 'Gli ammontare di denaro nella selezione. Dividi i valori con ";" (Esempio: 5;10;15).',
	'PAYPAL_CURRENCIES'			=> 'Valute',
	'PAYPAL_CURRENCIES_EXPLAIN'	=> 'Tipi di valute che verranno mostrate nel blocco. Puoi selezionarne più di una e selezionare la valuta predefinita.',
	
	//player block
	'PLAYER_AUTOPLAY'			=> 'Autoplay',
	'PLAYER_AUTOPLAY_EXPLAIN'	=> 'Definisce se il player inizierà a suonare automaticamente le tracce quando si carica la pagina.<br /><br />
		<em><strong>Nota:</strong>I browsers limitano questa caratteristica di modo che la riproduzione non inizierà finché l\'utente non cliccherà da qualsiasi parte nella pagina.</em>',
	'PLAYER_PLAYLIST'			=> 'Mostra playlist',
	'PLAYER_PLAYLIST_EXPLAIN'	=> 'Definisce se la playlist viene mostrata nel player.',
	'PLAYER_TRACKLIST'			=> 'Tracklist',
	'PLAYER_TRACKLIST_EXPLAIN'	=> 'Le tracce o canzoni del player.',

	'TRACK_TITLE'			=> 'Titolo traccia',
	'TRACK_TITLE_EXPLAIN'	=> 'il nome o titolo visualizzati nel player.',
	'TRACK_URL'				=> 'URL della traccia',
	'TRACK_URL_EXPLAIN'		=> 'Un URL radio (Esempio: http://127.0.0.1:8888), un file audio mp3 o eav (Esempio: http://mioserver.com/audio.mp3) o un valido file di playlist (m3u, asx, pls).',

	// poll_block
	'DISPLAY_POLL'				=> 'Sondaggio da mostrare',
	'DISPLAY_POLL_EXPLAIN'		=> 'Sondaggio mostrato nel blocco.',
	'DISPLAY_RESULTS'			=> 'Mostra risultati',
	'NO_POLLS'					=> 'Nessun sondaggio disponibile',

	// poll_random_block
	'POLL_FORUM'				=> 'Forum dei sondaggi',
	'POLL_FORUM_EXPLAIN'		=> 'Forum contenente i sondaggi che verranno mostrati nel blocco.',
	'POLL_NUM'					=> 'Numero di sondaggi',
	'POLL_NUM_EXPLAIN'			=> 'Il numero di sondaggi che verranno mostrati assieme nel blocco.',
	'NO_FORUMS'					=> 'Nessun forum disponibile',
	
	// post_view_block
	'PV_ITEM_URL'			=> 'URL di riferimento',
	'PV_ITEM_URL_EXPLAIN'	=> 'Specifica qui l\'URL del forum, topic o messaggio che vuoi visualizzato.<br />
		<em><strong>Nota:</strong> L\'url di un forum o di un topic ne mostreranno l\'ultimo messaggio.</em>',
	
	// quote_of_day_block
	'QUOTE_AUTHOR'				=> 'Autore della citazione',
	'QUOTE_TEXT'				=> 'Testo della citazione',
	'QUOTES_ALL_DAY'			=> 'Conservala tutto il giorno',
	'QUOTES_ALL_DAY_EXPLAIN'	=> 'Se abilitato, vedrai la stessa citazione per tutto il giorno. altrimenti, ogni volta che la pagina si caricherà vedrai una citazione differente.',
	'QUOTES_LIST'				=> 'Lista citazioni',
	'QUOTES_RAND'				=> 'Ordine casuale',
	'QUOTES_RAND_EXPLAIN'		=> 'Definisce se le citazioni verranno mostrate in ordine casuale o mantenendo l\'ordine della lista.',
	'QUOTES_SHOW_AUTHOR'		=> 'Mostra autore',
	'QUOTES_SHOW_AUTHOR_EXPLAIN'	=> 'Definisce se mostrare l\'autore della citazione sul blocco.',
	
	// ranks_block
	'ORPHAN_RANKS'				=> 'Mostra livelli orfani',
	'ORPHAN_RANKS_EXPLAIN'		=> 'Se abilitato, mostrerà anche quelli non assegnati ad alcun utente.',
	'ONLY_SPECIAL_RANKS'		=> 'Solo livelli speciali',
	
	// recent_topics_block
	'RECENT_FORUMS'					=> 'Forum dei topic',
	'RECENT_FORUMS_EXPLAIN'			=> 'Forum contenenti oggetti da mostrare. Se non ne selezioni nessuno, userà tutti i forum. Puoi selezionarne quanti ne vuoi utilizzando il tasto <em>Ctrl</em> sulla tua tastiera.',
	'RECENT_SECTIONS'				=> 'Sezioni',
	'RECENT_SECTIONS_EXPLAIN'		=> 'Definisci le sezioni da mostrare nel blocco e il loro ordine.',
	'RECENT_TOPIC_LIMIT'			=> 'Limite di topic',
	'RECENT_TOPIC_LIMIT_EXPLAIN'	=> 'Il massimo numero di oggetti da mostrare in ogni tab.',

	// Rss block
	'1_HOUR'		=> 'Un\'ora',
	'2_HOURS'		=> 'Due ore',
	'6_HOURS'		=> 'Sei ore',
	
	'RSS_COLLAPSABLE'			=> 'Minimizzabile',
	'RSS_COLLAPSABLE_EXPLAIN'	=> 'Imposta se gli oggetti siano mostrati a fisarmonica o a scorrimento. Se impostato a "Sì" sovrascriverà lo scorrimento del blocco.',
	'RSS_DIRECTION'				=> 'Direzione di scorrimento',
	'RSS_DIRECTION_EXPLAIN'		=> 'Definisce la direzione dello scorrimento del testo. Quest\'opzione è cancellata se gli oggetti sono mostrati a fisarmonica.',
	'RSS_HEIGHT'				=> 'Altezza del blocco',
	'RSS_HEIGHT_EXPLAIN'		=> 'Imposta l\'altezza del blocco, in pixel. Si applica solo se gli oggetti non sono mostrati a fisarmonica.',
	'RSS_IGNORE_LANG'			=> 'Ignora la lingua del feed',
	'RSS_IGNORE_LANG_EXPLAIN'	=> 'Se abilitato, vengono letti tutti gli URL, a prescindere dalla loro lingua, altrimenti mostrerà solo i contenuti scritti nella lingua dell\'utente.',
	'RSS_LIMIT'					=> 'Limite feed',
	'RSS_LIMIT_EXPLAIN'			=> 'Il massimo numero di oggetti da venir letti da ogni URL.',
	'RSS_SOURCES'				=> 'Sorgenti del feed',
	'RSS_TITLE'					=> 'Titolo del feed',
	'RSS_TTL'					=> 'Tempo di aggiornamento.',
	'RSS_TTL_EXPLAIN'			=> 'Il tempo per il quale le notizie rimarranno in cache prima di tentare di leggere nuovamente la sorgente.',
	'RSS_URL'					=> 'Url del file',
	'RSS_URL_EXPLAIN'			=> 'Esempio: <em>http://midominio.com/rss.xml</em>',

	// scroll_message_block
	'MARQUEE_DIRECTION'				=> 'Direzione di scorrimento',
	'MARQUEE_DIRECTION_EXPLAIN'		=> 'Direzione di scorrimento per il testo. Quest\'attributo controlla la direzione dello scorrimento.',
	'MARQUEE_SPEED'					=> 'Ammontare dello scorrimento',
	'MARQUEE_SPEED_EXPLAIN'			=> 'Questo controlla l\'ammontare dello scorrimento (in pixel) fra le successive visualizzazioni che daranno l\'impressione dell\'animazione.',
	'MARQUEE_SCROLLDELAY'			=> 'Ritardo scorrimento',
	'MARQUEE_SCROLLDELAY_EXPLAIN'	=> 'Questo controlla il ritardo (in millisecondi) fra le successive visualizzazioni che daranno l\'impressione dell\'animazione.',
	'MARQUEE_ALIGN'					=> 'Allineamento dello scorrimento',
	'MARQUEE_ALIGN_EXPLAIN'			=> 'Questo tag controlla il posizionamento del box di visualizzazione marquee relativo al testo corrente esattamente allo stesso modo dell\'attributo di allineamento del tag dell\'immagine.',
	'MARQUEE_BGCOLOR'				=> 'Colore di sfondo dello scorrimento',
	'MARQUEE_BGCOLOR_EXPLAIN'		=> 'Questo tag controlla il colore di sfondo del box di visualizzazione.',
	'MARQUEE_HEIGHT'				=> 'Altezza di scorrimento',
	'MARQUEE_HEIGHT_EXPLAIN'		=> 'Questo controlla l\'altrzza del box di visualizzazione.',
	'MARQUEE_PADDING'				=> 'Padding dello ScrollBox',
	'MARQUEE_PADDING_EXPLAIN'		=> 'Spazio attorno al box di scorrimento. Quest\'attributo è equivalente all\'attributo "padding" del CSS.',
	'MARQUEE_TEXT'					=> 'Testo del messaggio di scorrimento',
	'MARQUEE_TEXT_EXPLAIN'			=> 'Aggiungi/cambia da qui un messaggio scorrevole. Limite di 2000 caratteri.<br /><br />Le variabili di lingua e di template sono permesse, per esempio, usa <em>{S_USERNAME}</em> per mostrare il nome dell\'utente.',

	'BOTTOM'		=> 'Fondo',
	'DOWN'			=> 'Giù',
	'LEFT'			=> 'Sinistra',
	'CENTER'		=> 'Centro',
	'UP'			=> 'Su',
	'RIGHT'			=> 'Destra',
	'TOP'			=> 'Cima',
	
	//share_block
	'SHARE_SHOW_NAMES'			=> 'Mostra nomi',
	'SHARE_SHOW_NAMES_EXPLAIN'	=> 'Se abilitato, il nome del social network verrà mostrato vicino alla sua icona.',
	'SHARE_URL'					=> 'URL di riferimento',
	'SHARE_URL_EXPLAIN'			=> 'Imposta un\'url fissa di riferimento per i pulsanti. Lascia questo campo vuoto per usare la pagina mostrata.',
	'SHARE_BUTTONS'				=> 'Pulsanti da mostrare',
	
	// stats_block
	'STATS_INLINE'			=> 'Mostra i dati in riga',
 	'USER_STATS'			=> 'Mostra le statistiche utente',

 	// steam_block
	'STEAM_GROUP_URL'			=> 'Url del Gruppo',
	'STEAM_GROUP_URL_EXPLAIN'	=> '<em>Esempio: https://steamcommunity.com/groups/examplegroup</em>',
	
	// top_topics_block
	'TOPT_LIMIT'			=> 'Limite topic',
	'TOPT_LIMIT_EXPLAIN'	=> 'Numero massimo di topic da mostrare.',
	'TOPT_MODE'				=> 'Topic da mostrare',
	'TOPT_MODE_ACTIVE'		=> 'Gli ultimi topic più attivi',
	'TOPT_MODE_UNREAD'		=> 'Gli ultimi topic non letti',
	'TOPT_MODE_VIEWED'		=> 'Topic più visualizzati',

	// topic_index_block
	'TINDEX_CHAR_SELECT'			=> 'Mostra Indice',
	'TINDEX_CHAR_SELECT_EXPLAIN'	=> 'Disponibile solo se il metodo di ordinamento è <em>Titolo del Topic</em>.',
	'TINDEX_PER_PAGE'			=> 'Topic per pagina',
	'TINDEX_PER_PAGE_EXPLAIN'	=> 'Numero di topic che saranno mostrati allo stesso tempo. Imposta a 0 per disabilitare la paginazione.',
	'TINDEX_SORT_MODE'			=> 'Ordina per',
	'TINDEX_SORT_MODE_EXPLAIN'	=> 'Metodo che verrà usato per impostare l\'ordine dei topic nella lista.',
  
	'TOPIC_TIME'		=> 'Data del topic',
	'LAST_POST_TIME'	=> 'Data dell\'ultimo post',

	// welcome_block
	'WELCOME_GUEST'				=> 'Messaggio per gli ospiti',
	'WELCOME_GUEST_EXPLAIN'		=> 'Messaggio da mostrare a tutti gli ospiti. Massimo 2000 caratteri.<br /><br />Sono permesse le variabili della lingua e del template, per esempio, usa <em>{S_USERNAME}</em> per mostrare il nome dell\'utente.',
	'WELCOME_MEMBER'			=> 'Messaggio per gli iscritti',
	'WELCOME_MEMBER_EXPLAIN'	=> 'Messaggio da mostrare a tutti gli utenti registrati del forum. Massimo 2000 caratteri.<br /><br />Sono permesse le variabili della lingua e del template, per esempio, usa <em>{S_USERNAME}</em> per mostrare il nome dell\'utente.',

	// whos_online_block
	'WHOS_ADVANCED'				=> 'Modalità avanzata',
	'WHOS_ADVANCED_EXPLAIN'		=> 'Se abilitato mostrerà tutte le informazioni, altrimenti appariranno solo informazioni di base (adatte per un blocco laterale).',
	'WHOS_USERNAMES'			=> 'Mostra lista degli utenti',
	'WHOS_USERNAMES_EXPLAIN'	=> 'Se abilitato mostra la lista degli utenti online (solo in modalità avanzata).',

	// youtube_block
	'YT_AUTOPLAY'				=> 'AutoPlay abilitato',
	'YT_AUTOPLAY_EXPLAIN'		=> 'Se abilitato, il video partirà automaticamente.<br />Se hai più video, solo il primo avrà l\'autoplay.',
	'YT_DISPLAY_MODE'			=> 'Modalità di Visualizzazione',
	'YT_FULL_PREVIEW'			=> 'Mostra miniature, titolo e descrizione',
	'YT_LIST'					=> 'Mostra una lista dei titoli',
	'YT_RANDOM_DISPLAY'			=> 'Visualizzazione Casuale',
	'YT_RANDOM_DISPLAY_EXPLAIN'	=> 'Se abilitato, solo un video apparirà casualmente. Altrimenti, tutti i video e i canali appariranno assime.',
	'YT_RESULT_LIMIT'			=> 'Numero di canali video',
	'YT_RESULT_LIMIT_EXPLAIN'	=> 'Massimo numero di video caricati in ogni canale.',
	'YT_SIMPLE_PREVIEW'			=> 'Mostra miniature e titoli',
	'YT_TEXT_LIMIT'				=> 'Limite di testo',
	'YT_TEXT_LIMIT_EXPLAIN'		=> 'Massimo numero di caratteri nella descrizione del video.',
	'YT_VIDEO_PREVIEW'			=> 'Mostra anteprima del video',
	'YT_VIDEO_SIZE'				=> 'Dimensione del player',
	'YT_VIDEO_TITLE'			=> 'Titolo del video',
	'YT_VIDEO_URL'				=> 'Url del video',
	'YT_VIDEO_URL_EXPLAIN'		=> 'Esempio: <em>https://www.youtube.com/watch?v=NHH_v0k7Gus</em>',
]);
