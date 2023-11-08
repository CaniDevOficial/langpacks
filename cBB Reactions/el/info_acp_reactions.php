<?php
/**
 * [English [En]]
 * @package cBB Reactions
 * @version 1.0.1 15/01/2023
 *
 * @copyright (c) 2023 CaniDev
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
	'ACP_REACTIONS'			=> 'Αντιδράσεις',
	'ACP_REACTIONS_CONFIG'	=> 'Επιλογές',
	'ACP_REACTIONS_MANAGE'	=> 'Ρυθμίσεις αντιδράσεων',
	
	'EXT_INSTALL_ERROR'		=> 'Αυτό το πρόσθετο δεν είναι συμβατό με κάποιο εγκατεστημένο πρόσθετο.<br />Δείτε την τεκμηρίωση για περισσότερες πληροφορίες.',
	'CORE_INSTALL_ERROR'	=> 'Δεν ανεβάσατε όλα τα αρχεία από το αρχείο εγκατάστασης ή προσπαθείτε να εγκαταστήσετε μια παλιότερη έκδοση.<br />
		Παρακαλώ σιγουρευτείτε ότι ανεβάσατε όλα τα αρχεία (συμπεριλαμβανομένου του φακέλου <em>core</em>) και ότι χρησιμοποιείτε ένα πακέτο κατεβασμένο από το επίσημο site.',
]);
