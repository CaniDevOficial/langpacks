<?php
/**
 * [French [Fr]] translation by Galixte (http://www.galixte.com)
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MCP_CHAT_BAN'				=> 'Exclusions du tchat',
	
	'CHAT_BAN_CELL'				=> 'Nom d’utilisateur',
	'CHAT_BAN_CELL_EXPLAIN'		=> 'Pour spécifier plus d’un nom d’utilisateur, saisir chacun des noms sur une nouvelle ligne.<br />
		Utiliser le lien <em><u>Rechercher un membre</u></em> pour trouver et ajouter automatiquement des utilisateurs.',
	'CHAT_BAN_LIST'				=> 'Utilisateurs exclus',
	'CHAT_EXCLUSIONS_ADDED'		=> 'Les exclusions ont été modifiées',
	'CHAT_EXCLUSIONS_DELETED'	=> 'Les exclusions ont été supprimées',
	'CHAT_EXCLUSIONS_ERROR'		=> 'Une erreur s’est produite, merci de vérifier les données saisies',
	
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Exclusions ajoutées<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Exclusions retirées<br />» %s',
	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Message déplacé de <em>%1$s</em> à <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 message déplacé de <em>%1$s</em> à <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d messages déplacés de <em>%1$s</em> à <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Message supprimé <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 message supprimé de <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d messages supprimés de <em>%1$s</em>',
	],
]);
