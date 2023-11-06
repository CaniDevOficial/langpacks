<?php
/**
 * [German [De]]
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
	'NO_ATTACH_REACTION'	=> 'Um den Anhang zu sehen, reagiere bitte auf diesen Beitrag.',
	'NO_POST_REACTION'		=> 'Um Antworten zu können, reagiere bitte auf diesen Beitrag.',

	'REACTIONS_NOTIFICATION_POST'		=> [
		1	=> '%s hat auf einen Beitrag von dir reagiert',
		2	=> '%s haben auf einen Beitrag von dir reagiert',
	],

	'REACTIONS_NOTIFICATION_TYPE_POST'	=> 'Jemand hat auf einen Beitrag von dir reagiert',

	'REACTION_SCORE_LABEL_SIMPLE'			=> '%1$s',
	'REACTION_SCORE_LABEL_COUNT_ONE'		=> '%1$s und ein weiterer',
	'REACTION_SCORE_LABEL_COUNT_MULTIPLE'	=> '%1$s und %2$d weitere',

	'REACTIONS'			=> 'Reaktionen',
	'REACTIONS_ALL'		=> 'Alle',
	'REACTIONS_SCORE'	=> 'Punkte',
	'TOTAL_REACTIONS'	=> 'Reaktionen',

	'TOTAL_REACTIONS_LABEL'	=> [
		1	=> 'Hat auf %d Beitrag reagiert',
		2	=> 'Hat auf %d Beiträge reagiert',
	],

	'REACTIONS_USER_SCORE'	=> 'Punkte aus Reaktionen',

	'REACTION_ANGRY'	=> 'Wütend',
	'REACTION_ENJOY'	=> 'Haha',
	'REACTION_LIKE'		=> 'Gefällt mir',
	'REACTION_LOVE'		=> 'Liebe',
	'REACTION_MATTER'	=> 'Zuwendung',
	'REACTION_SAD'		=> 'Traurig',
	'REACTION_SURPRISE'	=> 'Wow',
]);
