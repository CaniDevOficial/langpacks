<?php
/**
 * [Italiano [It]]
 * @package Ext Common Core
 * @version 1.1.2 20/09/2023
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

$lang = array_merge($lang, array(
	'COPY_TO_LIST'			=> 'Copia alla lista corrente',
	'CREATE_SERVER_COPY'	=> 'Crea copia su questo server',
	'DELETE_FROM_LIST'		=> 'Rimuovi dalla lista',
	'DELETE_ICON'			=> 'Cancella icona',
	'DELETE_IMAGE'			=> 'Cancella immagine',
	'DELETE_PERMANENTLY'	=> 'Cancella permanentemente',
	'ICON_PREVIEW'			=> 'Anteprima icona',
	'IMAGE_DESCRIPTION'		=> 'Descrizione',
	'IMAGE_DETAILS'			=> 'Dettagli immagine',
	'IMAGE_DIMENSIONS'		=> '<%width%> × <%height%> pixel',
	'IMAGE_SAVE_ERROR'		=> 'Non è stato possibile salvare l\'immagine',
	'IMAGE_TITLE'			=> 'Titolo',
	'IMAGE_URL'				=> 'Url',
	'INSERT_ON_ENTRY'		=> 'Inserisci nel testo',
	'FILES_DELETED'			=> 'File cancellati',
	'FILES_DRAG'			=> 'Trascina i file per caricarli',
	'FILES_DROP'			=> 'Trascina i file per caricarli',
	'FILES_REMOVE_CONFIRM'	=> 'Stai per cancellare permanentemente i file selezionati<br />Vuoi continuare?',
	'FORMAT_INVALID'		=> 'Formato non valido',
	'MAX_IMAGESIZE'			=> 'Le immagini saranno ridimensionate a %d x %d pixel.',
	'MAX_FILESIZE'			=> 'La massima dimensione del file è: %s.',
	'MEDIA_UPDATED'			=> 'Cambiamenti salvati',
	'OR'					=> 'oppure',
	'PROCCESS'				=> 'Processo',
	'SELECT_ICON'			=> 'Seleziona nuova icona',
	'SELECT_IMAGE'			=> 'Seleziona nuova immagine',
	'SELECT_FILE'			=> 'Seleziona file',
	'SELECT_FILES'			=> 'Seleziona i file',
	'SELECTED_COUNT'		=> '<span class="value">0</span> selezionati',
	'SET_ICON'				=> 'Imposta icona',
	'SET_IMAGE'				=> 'Imposta immagine',
	'UPDATE'				=> 'Aggiorna',
	'UPLOADING_FILES'		=> 'Caricando i file...',
	
	'CURRENT_LIST'		=> 'Lista corrente',
	'GALLERY'			=> 'Galleria',
	'ICONS'				=> 'Icone',
	'INSERT_URL'		=> 'Inserisci da URL',
	'UPLOAD_IMAGE'		=> 'Carica Immagine',
	
	'ICON_BRAND'			=> 'Marchio',
	'ICON_DIRECTIONAL'		=> 'Direzionale',
	'ICON_FILE_TYPE'		=> 'Tipo di File',
	'ICON_GENDER'			=> 'Genere',
	'ICON_HAND'				=> 'Mano',
	'ICON_MEDICAL'			=> 'Medica',
	'ICON_PAYMENT'			=> 'Pagamento e Valute',
	'ICON_TEXT_EDITOR'		=> 'Editor di Testo',
	'ICON_TRANSPORTATION'	=> 'Trasporti',
	'ICON_VIDEO_PLAYER'		=> 'Video Player',
	'ICON_WEB_APPLICATION'	=> 'Applicazione Web',
));
