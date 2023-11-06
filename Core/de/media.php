<?php
/**
 * [German [De]]
 * @package Ext Common Core
 * @version 1.1.2 20/09/2023
 *
 * @copyright (c) 2023 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, [
	'COPY_TO_LIST'			=> 'Zu aktueller Liste kopieren',
	'CREATE_SERVER_COPY'	=> 'Kopie auf diesem Server erstellen',
	'DELETE_FROM_LIST'		=> 'Aus der Liste entfernen',
	'DELETE_ICON'			=> 'Lösche Icon',
	'DELETE_IMAGE'			=> 'Lösche Bild',
	'DELETE_PERMANENTLY'	=> 'Dauerhaft löschen',
	'ICON_PREVIEW'			=> 'Icon Vorschau',
	'IMAGE_DESCRIPTION'		=> 'Beschreibung',
	'IMAGE_DETAILS'			=> 'Bilddetails',
	'IMAGE_DIMENSIONS'		=> '<%width%> × <%height%> Pixel',
	'IMAGE_SAVE_ERROR'		=> 'Bild konnte nicht gespeichert werden',
	'IMAGE_TITLE'			=> 'Titel',
	'IMAGE_URL'				=> 'URL',
	'INSERT_ON_ENTRY'		=> 'Insert on text',
	'FILES_DELETED'			=> 'Datien gelöscht',
	'FILES_DRAG'			=> 'Zum Hochladen Dateien per Drag and Drop ablegen',
	'FILES_DROP'			=> 'Zum Hochladen Dateien hier ablegen',
	'FILES_REMOVE_CONFIRM'	=> 'Die Dateien werden unwiderruflich gelöscht<br />Weitermachen?',
	'MAX_IMAGESIZE'			=> 'Die Größe der Bilder wird auf %d x %d Pixel geändert.',
	'FORMAT_INVALID'		=> 'Ungültiges Format',
	'MAX_FILESIZE'			=> 'Maximale Dateigröße: %s.',
	'MEDIA_UPDATED'			=> 'Änderungen gespeichert',
	'OR'					=> 'oder',
	'PROCCESS'				=> 'Prozess',
	'SELECT_ICON'			=> 'Neues Icon auswählen',
	'SELECT_IMAGE'			=> 'Neues Bild auswählen',
	'SELECT_FILE'			=> 'Datei auswählen',
	'SELECT_FILES'			=> 'Dateien auswählen',
	'SELECTED_COUNT'		=> '<span class="value">0</span> ausgewählt',
	'SET_ICON'				=> 'Icon setzen',
	'SET_IMAGE'				=> 'Bild setzen',
	'UPDATE'				=> 'Aktualisierung',
	'UPLOADING_FILES'		=> 'Dateien hochladen...',

	'CURRENT_LIST'		=> 'Aktuelle Liste',
	'GALLERY'			=> 'Gallerie',
	'ICONS'				=> 'Icons',
	'INSERT_URL'		=> 'Von URL einfügen',
	'UPLOAD_IMAGE'		=> 'Bild hochladen',

	'ICON_BRAND'			=> 'Marke',
	'ICON_DIRECTIONAL'		=> 'Gerichtet',
	'ICON_FILE_TYPE'		=> 'Dateityp',
	'ICON_GENDER'			=> 'Geschlecht',
	'ICON_HAND'				=> 'Hand',
	'ICON_MEDICAL'			=> 'Medizin',
	'ICON_PAYMENT'			=> 'Zahlung und Währung',
	'ICON_TEXT_EDITOR'		=> 'Texteditor',
	'ICON_TRANSPORTATION'	=> 'Transport',
	'ICON_VIDEO_PLAYER'		=> 'Videoplayer',
	'ICON_WEB_APPLICATION'	=> 'Web Applikation',
]);
