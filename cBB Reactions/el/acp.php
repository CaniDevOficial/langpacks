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
	'ACP_REACTIONS_CONFIG_EXPLAIN'	=> 'Από εδώ μπορείτε να ρυθμίσετε διάφορες επιλογές σχετικά με τις αντιδράσεις.',
	'ACP_REACTIONS_MANAGE_EXPLAIN'	=> 'Από εδώ μπορείτε να διαμορφώσετε τις αντιδράσεις οι οποίες θα είναι διαθέσιμες στο φόρουμ.',
	'ABOVE'							=> 'Πάνω',
	'BELOW'							=> 'Κάτω',
	'ENABLE_DISABLE'				=> 'Ενεργοποίηση/Απενεργοποίηση',
	'ERROR_REACTION_NO_EXISTS'		=> 'Η συγκεκριμένη αντίδραση δεν υπάρχει',
	'ERROR_SCORE_INVALID'			=> 'Το ορισθέν σκορ είναι λανθασμένο',
	'NO_REACTIONS' 					=> 'Δεν προστέθηκε αντίδραση.',
	'REACTION_ADD'					=> 'Πρόσθεσε αντίδραση',
	'REACTION_COLOR'				=> 'Χρώμα',
	'REACTION_COLOR_EXPLAIN'		=> 'Χρώμα σχετικό με αυτή την αντίδραση.',
	'REACTION_ENABLED'				=> 'Ενεργοποιημένο',
	'REACTION_ENABLED_EXPLAIN'		=> 'Ορίζει αν η αντίδραση θα είναι διαθέσιμη για χρήση.',
	'REACTION_IMAGE'				=> 'Εικονίδιο',
	'REACTION_IMAGE_EXPLAIN'		=> 'Εικονίδιο/Emoticon σχετικό με αυτή την αντίδραση.',
	'REACTION_SCORE'				=> 'Σκορ',
	'REACTION_SCORE_EXPLAIN'		=> 'Ορίζει την επίδραση (σε μορφή πόντων) που αυτή η αντίδραση θα έχει στο μήνυμα.',
	'REACTION_TITLE'				=> 'Τίτλος',
	'REACTION_TITLE_EXPLAIN'		=> 'Όνομα ή τίτλος της αντίδρασης',
	
	'REACTIONS_ALLOW_CHANGE'			=> 'Επιτέπεται αλλαγή της αντίδρασης',
	'REACTIONS_ALLOW_CHANGE_EXPLAIN'	=> 'Ορίζει αν τα μέλη θα μπορούν να αλλάξουν τις αντιδράσεις τους στα μηνύματα.',
	'REACTIONS_ALLOW_MYSELF'			=> 'Επιτέπεται αντίδραση σε δικά μας μηνύματα',
	'REACTIONS_ALLOW_MYSELF_EXPLAIN'	=> 'Αν ενεργοποιηθεί, τα μέλη θα μπορούν να αντιδράσουν σε δικά τους μηνύματα.',
	'REACTIONS_BUTTON_POSITION'			=> 'Θέση κουμπιού αντιδράσεων',
	'REACTIONS_BUTTON_POSITION_EXPLAIN'	=> 'Ορίζει σε ποια θέση θα εμφανιστεί το κουμπί των αντιδράσεων στο μήνυμα.',
	'REACTIONS_FORCE_ATTACH'			=> 'Εξαναγκασμός σε αντίδραση για να δει κάποιος τα συνημμένα',
	'REACTIONS_FORCE_ATTACH_EXPLAIN'	=> 'Αν ενεργοποιηθεί, τα μέλη θα πρέπει να αντιδράσουν σε ένα μήνυμα για να δουν τα συνημμένα αρχεία σε αυτό.',
	'REACTIONS_FORCE_REPLY'				=> 'Εξαναγκασμός σε αντίδραση για να απαντήσει κάποιος στο τόπικ',
	'REACTIONS_FORCE_REPLY_EXPLAIN'		=> 'Αν ενεργοποιηθεί, τα μέλη θα πρέπει να αντιδράσουν στο πρώτο μήνυμα του τόπικ για να μπορούν να απαντήσουν σε αυτό.',
	'REACTIONS_LIST_ORDER'				=> 'Κατάταξη λίστας ανά',
	'REACTIONS_LIST_ORDER_EXPLAIN'		=> 'Καθορίζει τα κριτήρια που θα χρησιμοποιηθούν για να κατατάξουν τα μέλη που αντέδρασαν στην λίστα.',
	'REACTIONS_ORDER_TIME'				=> 'Ημερομηνία αντίδρασης',
	'REACTIONS_ORDER_USERNAME'			=> 'Όνομα μέλους',
	'REACTIONS_SCORE_ON_PROFILE'		=> 'Δείξε το σκορ στο προφίλ',
	'REACTIONS_SCORE_ON_PROFILE_EXPLAIN'	=> 'Αν ενεργοποιηθεί, το σκορ των αντιδράσεων κάθε μέλους θα εμφανίζεται στο προφίλ τους.',
	'REACTIONS_ZONE_ALL'				=> 'Όλα τα ποστ',
	'REACTIONS_ZONE_ONLY_FIRST_POST'	=> 'Μόνο στο πρώτο πόστ',
	'REACTIONS_ZONE_ONLY_REPLIES'		=> 'Μόνο στις απαντήσεις',
	'REACTIONS_ZONES'					=> 'Στα ποστ που μπορείς να αντιδράσεις',
	'REACTIONS_ZONES_EXPLAIN'			=> 'Ορίζει σε ποια ποστ η επιλογή της αντίδρασης θα είναι ορατή.<br /><br />
		<em>Η επιλογή αυτή μπορεί να αλλάξει ή να θέσει όρια στην συμπεριφορά άλλων ρυθμίσεων την συγκεκριμένης επέκτασης.</em>',

	'SCORE_CUSTOM'			=> 'Επιλογή σκορ',
	'SCORE_CUSTOM_VALUE'	=> 'Επιλογή σκορ (%s)',
	'SELECT_COLOUR'			=> 'Επιλέξτε χρώμα',

	'scores' 	=> [
		1 		=> 'Θετικό (+1)',
		0 		=> 'Ουδέτερο',
		-1 		=> 'Αρνητικό (-1)',
	],
]);
