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
	'ACCEPT'					=> 'Accepter',
	'ALL_GROUPS'				=> 'Tous les groupes',
	'APPLY'						=> 'Appliquer',
	'BATCH_ACTIONS'				=> 'Actions par lots',
	'CLIPBOARD_LINK_ERROR'		=> 'Le lien n\'a pas pu être copié',
	'CLIPBOARD_LINK_SUCCESS'	=> 'Lien copié dans le presse-papier',
	'CLIPBOARD_TEXT_ERROR'		=> 'Le texte n\'a pas pu être copié',
	'CLIPBOARD_TEXT_SUCCESS'	=> 'Texte copié dans le presse-papiers',
	'CONFIGURE'					=> 'Configurer',
	'COPY_TO_CLIPBOARD'			=> 'Copier dans le presse-papier',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Documentation et Assistance',
	'EDIT'						=> 'Editer',
	'ENABLE_DISABLE'			=> 'Activer/Désactiver',
	'NO_ITEMS'					=> 'Aucun élément à afficher',
	'ONLY_DEFAULT_GROUPS'		=> 'Considérez uniquement le groupe par défaut',
	'REPORT_EXPLAIN'			=> 'Énumérez ci-dessous autant d\'informations que possible sur l\'erreur.<br /><br />
		En plus de ce qui est décrit ici, des informations de base sur l\'environnement d\'exécution seront envoyées pour un examen correct du problème.<br />
		<a href="https://www.canidev.com/api/report/documentation" onclick="window.open(this.href); return false;">Voir les détails</a>',
	'REPORT_SENDED'				=> 'Rapport envoyé avec succès',
	'REPORT_TITLE'				=> 'Rapportez une erreur',
	'SAVE'						=> 'Sauvegarder',
	'SEND'						=> 'Envoyer',

	'NO_LIMIT'			=> 'Aucune limite',
	'ONE_DAY'			=> 'Un jour',
	'ONE_HOUR'			=> 'Une heure',
	'ONE_WEEK'			=> 'Une semaine',
	'ONE_MONTH'			=> 'Un mois',
	'ONE_YEAR'			=> 'Une année',
	'TWO_YEARS'			=> 'Deux années',

	// Errors
	'ERROR_REPORT_SEND'			=> 'Votre rapport n\'a pas pu être envoyé',
]);
