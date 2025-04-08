<?php
/**
 * [Greek [El]]
 * @package cBB Reactions
 * @version 1.0.4 01/04/2025
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
	'NO_ATTACH_REACTION'	=> 'Πρέπει να αντιδράσετε σε αυτό το μήνυμα για να δείτε τα συνημμένα',
	'NO_POST_REACTION'		=> 'Πρέπει να αντιδράσετε στο πρώτο μήνυμα για να μπορέσετε να απαντήσετε',

	'REACTIONS_NOTIFICATION_POST'		=> [
		1	=> '%s αντέδρασε σε ένα μήνυμα που δημοσιεύσατε',
		2	=> '%s αντέδρασε σε ένα μήνυμα που δημοσιεύσατε',
	],

	'REACTIONS_NOTIFICATION_TYPE_POST'	=> 'Κάποιος αντέδρασε σε ένα μήνυμα που δημοσιεύσατε',

	'REACTION_SCORE_LABEL_ANONYMOUS'		=> [
		1	=> '1 χρήστης αντέδρασε',
		2	=> '%d χρήστες αντέδρασαν',
	],
	
	'REACTION_SCORE_LABEL_SIMPLE'		=> '%1$s',
	
	'REACTION_SCORE_LABEL_COUNT'		=> [
		1	=> '%1$s και άλλο ένα μέλος',
		2	=> '%1$s και άλλα %2$d μέλη',
	],
	
	'REACTIONS'			=> 'Αντιδράσεις',
	'REACTIONS_ALL'		=> 'Όλοι',
	'REACTIONS_SCORE'	=> 'Σκορ',
	'TOTAL_REACTIONS'	=> 'Συνολ. αντιδράσεις',

	'TOTAL_REACTIONS_LABEL'	=> [
		1	=> 'Αντέδρασε στο %d μήνυμα',
		2	=> 'Αντέδρασε σε %d μηνύματα',
	],

	'REACTIONS_USER_SCORE'	=> 'Σκορ αντιδράσεων',

	'REACTION_ANGRY'	=> 'Angry',
	'REACTION_ENJOY'	=> 'Haha',
	'REACTION_LIKE'		=> 'Like',
	'REACTION_LOVE'		=> 'Love',
	'REACTION_MATTER'	=> 'Care',
	'REACTION_SAD'		=> 'Sad',
	'REACTION_SURPRISE'	=> 'Wow',
]);
