<?php
/**
 * [Italiano [It]]]
 * @package Ext Common Core
 * @version 1.1.2 20/09/2023
 *
 * @copyright (c) 2023 CaniDev & Lord Phobos
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
	'AUTHOR'					=> 'Autore:',
	'CODE'						=> 'Codice',
	'DATE'						=> 'Data:',
	'DESCRIPTION_OPTIONAL'		=> 'Descrizione (Opzionale):',
	'INSERT'					=> 'Inserisci',
	'MAXIMIZE'					=> 'Massimizza l\'editor',
	'PRINT'						=> 'Stampa',
	'REMOVE_FORMAT'				=> 'Rimuovi Formattazione',
	'UNLINK'					=> 'Rimuovi Link',
	'URL'						=> 'Url:',
	'VIEW_SOURCE'				=> 'Mostra Codice',
));
