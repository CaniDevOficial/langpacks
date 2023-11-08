<?php
/**
 * [English [En]]
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
	$lang = [];
}

$lang = array_merge($lang, array(
	'COPY_TO_LIST'			=> 'Αντιγραφή στην τρέχουσα λίστα',
	'CREATE_SERVER_COPY'	=> 'Δημιουργία αντιγράφου σε αυτόν τον server',
	'DELETE_FROM_LIST'		=> 'Διαγραφή από την λίστα',
	'DELETE_ICON'			=> 'Διαγραφή εικονιδίου',
	'DELETE_IMAGE'			=> 'Διαγραφή εικόνας',
	'DELETE_PERMANENTLY'	=> 'Μόνιμη διαγραφή',
	'ICON_PREVIEW'			=> 'Προεπισκόπιση εικονιδίου',
	'IMAGE_DESCRIPTION'		=> 'Περιγραφή',
	'IMAGE_DETAILS'			=> 'Λεπτομέρειες εικόνας',
	'IMAGE_DIMENSIONS'		=> '<%πλάτος%> × <%ύψος%> σε pixels',
	'IMAGE_SAVE_ERROR'		=> 'Δεν είναι δυνατή η αποθήκευση της εικόνας',
	'IMAGE_TITLE'			=> 'Τίτλος',
	'IMAGE_URL'				=> 'Url',
	'INSERT_ON_ENTRY'		=> 'Εισαγωγή στο κείμενο',
	'FILES_DELETED'			=> 'Τα αρχεία διαγράφηκαν',
	'FILES_DRAG'			=> 'Επιλογή και σύρσιμο αρχείων για ανέβασμα',
	'FILES_DROP'			=> 'Ρίξτε αρχεία για ανέβασμα',
	'FILES_REMOVE_CONFIRM'	=> 'Είστε έτοιμοι να διαγράψετε μόνιμα τα επιλεγμένα αρχεία<br />Θέλετε να συνεχίσετε;',
	'FORMAT_INVALID'		=> 'Λάθος μορφοποίηση',
	'MAX_IMAGESIZE'			=> 'Οι εικόνες θα αλλάξουν μέγεθος σε %d x %d pixels.',
	'MAX_FILESIZE'			=> 'Μέγιστο μέγεθος αρχείου: %s.',
	'MEDIA_UPDATED'			=> 'Οι αλλαγές αποθηκεύτηκαν',
	'OR'					=> 'ή',
	'PROCCESS'				=> 'Επεξεργασία',
	'SELECT_ICON'			=> 'Επιλογή νέου εικονιδίου',
	'SELECT_IMAGE'			=> 'Επιλογή νέας εικόνας',
	'SELECT_FILE'			=> 'Επιλογή αρχείου',
	'SELECT_FILES'			=> 'Επιλογή αρχείων',
	'SELECTED_COUNT'		=> '<span class="value">0</span> επιλέχθηκαν',
	'SET_ICON'				=> 'Ορίστε εικονίδιο',
	'SET_IMAGE'				=> 'Ορίστε εικόνα',
	'UPDATE'				=> 'Αναβάθμιση',
	'UPLOADING_FILES'		=> 'Ανέβασμα αρχείων...',
	
	'CURRENT_LIST'		=> 'Τρέχουσα λίστα',
	'GALLERY'			=> 'Γκαλερί',
	'ICONS'				=> 'Εικονίδια',
	'INSERT_URL'		=> 'Εισαγωγή από URL',
	'UPLOAD_IMAGE'		=> 'Ανεβάστε εικόνα',
	
	'ICON_BRAND'			=> 'Brand',
	'ICON_DIRECTIONAL'		=> 'Directional',
	'ICON_FILE_TYPE'		=> 'File Type',
	'ICON_GENDER'			=> 'Gender',
	'ICON_HAND'				=> 'Hand',
	'ICON_MEDICAL'			=> 'Medical',
	'ICON_PAYMENT'			=> 'Payment and Currency',
	'ICON_TEXT_EDITOR'		=> 'Text Editor',
	'ICON_TRANSPORTATION'	=> 'Transportation',
	'ICON_VIDEO_PLAYER'		=> 'Video Player',
	'ICON_WEB_APPLICATION'	=> 'Web Application',
));
