<?php
/**
* [French [Fr]]]
* French translation by cabot (https://cabotweb.fr)
*
* @package Ext Common Core
* @version 1.1.1 15/01/2023
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

//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACCEPT'					=> 'Accepter',
	'ALL_GROUPS'				=> 'Tous les groupes',
	'BATCH_ACTIONS'				=> 'Action Batch',
	'CONFIGURE'					=> 'Configurer',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Documentation et support',
	'EDIT'						=> 'Modifier',
	'NO_ITEMS'					=> 'Aucun élément à afficher',
	'REPORT_EXPLAIN'			=> 'Indiquez ci-dessous autant d’informations que possible sur l’erreur.<br>
	En plus de ce qui est décrit ici, des informations de base sur l’environnement d’exécution seront envoyées pour un examen correct du problème.<br>
		<a href="https://www.canidev.com/api/report/documentation" target="_blank">Voir les détails</a>',
	'REPORT_SENDED'				=> 'Le rapport a été envoyé avec succès',
	'REPORT_TITLE'				=> 'Signaler une erreur',
	'SAVE'						=> 'Sauvegarder',
	'SEND'						=> 'Envoyer',

	// Errors
	'ERROR_REPORT_SEND'			=> 'Votre rapport n’a pas pu être envoyé',
));
