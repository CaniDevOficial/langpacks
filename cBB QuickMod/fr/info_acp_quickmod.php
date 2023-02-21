<?php
/**
* [French [fr]] by team caforum (https://caforum.fr/forum/)
* @package cBB QuickMod
* @version 1.1.4 01/06/2022
*
* @copyright (c) 2022 CaniDev
* @license https://creativecommons.org/licenses/by-nc/4.0/
*/

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CAT_QUICKMOD'				=> 'Modération rapide',
	'ACP_QUICKMOD_CONFIG'			=> 'Configuration',
	'ACP_QUICKMOD_CONFIG_EXPLAIN'	=> 'A partir de là, vous pouvez gérer les principales options de modération.<br />Pour disposer les boutons, faites-les glisser à la bonne position dans la liste du bas. La visibilité des boutons dans la page viewforum dépend des permissions de l‘utilisateur et de l‘état du sujet.',
	'QM_MAIN_CONFIG'		=> 'Configuration',
	'QM_CONFIRM'			=> 'Confirmer la boîte de dialogue',
	'QM_CONFIRM_EXPLAIN'	=> 'Activer/désactiver la boîte de dialogue de confirmation dans les actions rapides.',
	'QM_BUTTON_MANAGE'		=> 'Gérer les boutons rapides',
	
	'QM_TYPE'				=> 'Affichage des icônes',
	'QM_TYPE_EXPLAIN'		=> 'Définir le format d‘affichage des actions rapides dans le forum.',
	'QM_TYPE_ICON'			=> 'Icones',
	'QM_TYPE_MENU'			=> 'Menu contextuel',
	
	'BUTTONS_AVAILABLE'		=> 'Boutons disponibles',
	'BUTTONS_SELECTED'		=> 'Boutons sélectionnés',

	'LOG_QUICKMOD_CONFIG'	=> '<strong>Modération rapide :</strong> Configuration modifiée',
));
