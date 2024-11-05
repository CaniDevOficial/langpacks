<?php
/**
 * [French [fr]]] by team caforum (https://caforum.fr/forum/)
 * @package Ext Common Core
 * @version 1.1.6 17/06/2024
 *
 * @copyright (c) 2024 CaniDev
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

$lang = array_merge($lang, [
	'AUTHOR'					=> 'Auteur:',
	'CODE'						=> 'Code',
	'DATE'						=> 'Date:',
	'DESCRIPTION_OPTIONAL'		=> 'Description (facultatif):',
	'INSERT'					=> 'Insérer',
	'MAXIMIZE'					=> 'Agrandir l‘éditeur',
	'PRINT'						=> 'Imprimer',
	'REMOVE_FORMAT'				=> 'Supprimer le format',
	'UNLINK'					=> 'Supprimer le lien',
	'URL'						=> 'Url:',
	'VIEW_SOURCE'				=> 'Afficher le code',
]);
