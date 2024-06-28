<?php
/**
 * [English [En]]
 * @package cBB Attachments
 * @version 1.0.0 26/01/2024
 *
 * Italian language by Salvo Cortesiano @2024
 * https://netshadows.de/ombra/
 *
 * @copyright (c) 2024 CaniDev
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
	'ACP_AP_CONFIG_EXPLAIN'		=> 'Da qui puoi gestire opzioni specifiche per alcuni formati di allegati.',

	'AP_ALLOW_DOWNLOAD'			=> 'Consenti download',
	'AP_ALLOW_DOWNLOAD_EXPLAIN'	=> 'Consente all’utente di scaricare il file.<br >
		Se disabilitato, il pulsante di download non verrà visualizzato.',
	'AP_VIEW_TYPE'			=> 'Visualizza tipo',
	'AP_VIEW_TYPE_EXPLAIN'	=> 'Definisce come verranno visualizzati i file con questo formato.',

	'AP_SHOW_INFO'				=> 'Mostra informazioni',
	'AP_SHOW_PLAYER'			=> 'Mostra player',
	'AP_SHOW_PLAYER_AND_INFO'	=> 'Mostra player + informazioni',
	'AP_SHOW_PREVIEW'			=> 'Mostra anteprima',

	'AP_OPACITY'				=> 'Opacità',
	'AP_POSITION'				=> 'Posizione',
	'AP_SIZE'					=> 'Dimensione',
	
	// Format: Audio
	'FORMAT_AUDIO_TITLE'		=> 'Audio files',
	'FORMAT_AUDIO_EXPLAIN'		=> 'Opzioni e lettore specifici per file audio.',

	// Format: Basic
	'FORMAT_BASIC_TITLE'		=> 'Formato di base',
	'FORMAT_BASIC_EXPLAIN'		=> 'Mostra un layout di base per tutti i file non contenuti negli altri moduli.<br />
		Se disabilitato, verrà visualizzato il layout phpBB predefinito.',

	// Format: Cad
	'FORMAT_CAD_TITLE'			=> 'Files CAD',
	'FORMAT_CAD_EXPLAIN'		=> 'Opzioni specifiche e anteprima per i file AutoCad.',

	// Format: Image
	'FORMAT_IMAGE_TITLE'			=> 'Immagini',
	'FORMAT_IMAGE_EXPLAIN'			=> 'Opzioni per i file di immagine.',
	'AP_IMAGE_HIDE_TEXT'			=> 'Nascondi legenda',
	'AP_IMAGE_HIDE_TEXT_EXPLAIN'	=> 'Imposta se il testo visualizzato sotto le immagini verrà nascosto',
	'AP_IMAGE_REMOVE_EXIF'			=> 'Rimuovi informazioni Exif data',
	'AP_IMAGE_REMOVE_EXIF_EXPLAIN'	=> 'Se abilitati, i dati EXIF incorporati nell’immagine (ad esempio: posizione, fotocamera, flash, ecc.) verranno rimossi quando caricati come allegato.<br />
		<em>Ciò influisce solo sull’estensione jpg o jpeg.</em>',
	'AP_IMAGE_WATERMARK'			=> 'Filigrana',
	'AP_IMAGE_WATERMARK_EXPLAIN'	=> 'Da qui puoi impostare una filigrana (watermark) per le nuove immagini caricate.',

	// Format: Pdf
	'FORMAT_PDF_TITLE'			=> 'Files PDF',
	'FORMAT_PDF_EXPLAIN'		=> 'Opzioni specifiche e anteprima per i files pdf.',

	// Format: Video
	'FORMAT_VIDEO_TITLE'		=> 'Files Video',
	'FORMAT_VIDEO_EXPLAIN'		=> 'Opzioni e lettore specifici per i files video.',
]);
