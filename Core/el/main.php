<?php
/**
 * [English [En]]]
 * @package Ext Common Core
 * @version 1.1.3 20/10/2023
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
	'ACCEPT'					=> 'Αποδοχή',
	'ALL_GROUPS'				=> 'Όλα τα γκρουπ',
	'BATCH_ACTIONS'				=> 'Μαζικές ενέργειες',
	'CONFIGURE'					=> 'Ρύθμιση',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Τεκμηρίωση και Υποστήριξη',
	'EDIT'						=> 'Σύνταξη',
	'ENABLE_DISABLE'			=> 'Ενεργοποίηση/Απενεργοποίηση',
	'NO_ITEMS'					=> 'Κανένα αντικείμενο για εμφάνιση',
	'REPORT_EXPLAIN'			=> 'Γράψτε παρακάτω όσες περισσότερες πληροφορίες μπορείτε για το σφάλμα.<br /><br />
		Επιπροσθέτως με το ότι περιγράφεται εδώ, βασικές πληροφορίες σχετικές με το περιβάλλον εκτέλεσης θα αποσταλούν για την σωστή αντιμετώπιση του προβλήματος.<br />
		<a href="https://www.canidev.com/api/report/documentation" onclick="window.open(this.href); return false;">Δείτε λεπτομέρειες</a>',
	'REPORT_SENDED'				=> 'Η αναφορά στάλθηκε επιτυχώς',
	'REPORT_TITLE'				=> 'Αναφορά σφάλματος',
	'SAVE'						=> 'Αποθήκευση',
	'SEND'						=> 'Αποστολή',

	// Errors
	'ERROR_REPORT_SEND'			=> 'Η αναφορά σας δεν μπορεί να αποσταλεί',
));
