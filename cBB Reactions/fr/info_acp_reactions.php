<?php
/**
 * [French [Fr]]]
 * French translation by cabot (https://cabotweb.fr)
 * 
 * @package cBB Reactions
 * @version 1.0.3 26/02/2024
 *
 * @copyright (c) 2024 CaniDev
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

//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'ACP_REACTIONS'			=> 'Réactions',
	'ACP_REACTIONS_CONFIG'	=> 'Options des réactions',
	'ACP_REACTIONS_MANAGE'	=> 'Configuration des réactions',
	
	'EXT_INSTALL_ERROR'		=> 'Cette extension n’est compatible avec aucune autre extension installée.<br>Consultez la documentation pour plus d’informations.',
	'CORE_INSTALL_ERROR'	=> 'Vous n’avez pas téléversé tous les fichiers du paquet d’installation ou vous essayez d’installer un ancien paquet.<br>
	Veillez à téléverser tous les fichiers (y compris le dossier <code>core/</code>) et à utiliser un paquet téléchargé sur le site officiel.',
]);
