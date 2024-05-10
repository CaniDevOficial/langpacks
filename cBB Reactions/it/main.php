<?php
/**
 * [Italiano [It]]
 * @package cBB Reactions
 * @version 1.0.3 26/02/2024
 *
 * @copyright (c) 2024 CaniDev & Lord Phobos
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
	'NO_ATTACH_REACTION'	=> 'Devi reagire a questo messaggio per poterne vedere gli allegati',
	'NO_POST_REACTION'		=> 'Devi reagire al primo messaggio per poter replicare',

	'REACTIONS_NOTIFICATION_POST'		=> [
		1	=> '%s ha reagito ad un messaggio che hai postato',
		2	=> '%s hanno reagito ad un messaggio che hai postato',
	],

	'REACTIONS_NOTIFICATION_TYPE_POST'	=> 'Qualcuno ha reagito ad un messaggio che hai postato',

	'REACTION_SCORE_LABEL_SIMPLE'			=> '%1$s',
	'REACTION_SCORE_LABEL_COUNT_ONE'		=> '%1$s e un altro utente',
	'REACTION_SCORE_LABEL_COUNT_MULTIPLE'	=> '%1$s e altri %2$d utenti',
	
	'REACTIONS'			=> 'Reazioni',
	'REACTIONS_ALL'		=> 'Tutte',
	'REACTIONS_SCORE'	=> 'Punteggio',
	'TOTAL_REACTIONS'	=> 'Reazioni',

	'TOTAL_REACTIONS_LABEL'	=> [
		1	=> 'Ha reagito ad %d messaggio',
		2	=> 'Ha reagito a %d messaggi',
	],

	'REACTIONS_USER_SCORE'	=> 'Punteggio reazioni',

	'REACTION_ANGRY'	=> 'Arrabbiato',
	'REACTION_ENJOY'	=> 'Haha',
	'REACTION_LIKE'		=> 'Mi piace',
	'REACTION_LOVE'		=> 'Amo!',
	'REACTION_MATTER'	=> 'Voglio bene',
	'REACTION_SAD'		=> 'Triste',
	'REACTION_SURPRISE'	=> 'Wow',
]);
