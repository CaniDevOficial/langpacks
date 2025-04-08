<?php
/**
 * [Greek [El]]
 * @package cBB QuickQuote
 * @version 1.0.5 08/04/2025
 *
 * @copyright (c) 2025 CaniDev
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
	'QQ_INSERT'				=> 'Εισαγωγή',
	'QQ_INSERT_ALL'			=> 'Εισαγωγή όλων',
	'QQ_INSERT_QUOTES'		=> 'Εισαγωγή παραθέσεων',
	'QQ_INSERT_SELECTED'	=> 'Εισαγωγή επιλεγμένων',
	'QQ_REMOVE'				=> 'Αφαίρεση',
	'QQ_REMOVE_ALL'			=> 'Αφαίρεση όλων',
	'QQ_REMOVE_SELECTED'	=> 'Αφαίρεση επιλεγμένων',
	'QQ_REPLY'				=> 'Απάντηση',
	'QQ_SAVE_QUOTE'			=> 'Αποθήκευση παράθεσης',
	'QUOTES'				=> 'Παραθέσεις',

	'CORE_INSTALL_ERROR'	=> 'Δεν ΄χετε ανεβάσει όλα τα αρχείο από το πακέτο εγκατάστασης ή προσπαθείτε να εγκαταστήσετε μια παλιά έκδοση.<br />
		Παρακαλώ ανεβάστε όλα τα αρχεία (συμπεριλαμβανομένου του φακέλου <em>core</em>) και χρησιμοποιήστε ένα αρχείο κατεβασμένο από το επίσημο site.',
]);
