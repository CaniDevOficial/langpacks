<?php
/**
 * [German [De]]
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

$lang = array_merge($lang, [
	'ACP_REACTIONS_CONFIG_EXPLAIN'	=> 'Hier erfolgt die Konfiguration der Erweiterung.',
	'ACP_REACTIONS_MANAGE_EXPLAIN'	=> 'Hier können die in diesem Forum verfügbaren Reaktionen konfiguriert werden.',
	'ABOVE'							=> 'Über Beitrag',
	'BELOW'							=> 'Unter Beitrag',
	'ENABLE_DISABLE'				=> '(De-)Aktivieren',
	'ERROR_REACTION_NO_EXISTS'		=> 'Die ausgewählte Reaktion existiert nicht',
	'ERROR_SCORE_INVALID'			=> 'Die gewählten Punkte sind ungültig',
	'NO_REACTIONS' 					=> 'Keine Reaktion hinzugefügt.',
	'REACTION_ADD'					=> 'Reaktion hinzufügen',
	'REACTION_COLOR'				=> 'Farbe',
	'REACTION_COLOR_EXPLAIN'		=> 'Mit dieser Reaktion verbundene Farbe.',
	'REACTION_ENABLED'				=> 'Aktiviert',
	'REACTION_ENABLED_EXPLAIN'		=> 'Gibt an, ob diese Reaktion verwendet werden kann.',
	'REACTION_IMAGE'				=> 'Bild',
	'REACTION_IMAGE_EXPLAIN'		=> 'Mit dieser Reaktion verknüpftes Bild/Emoticon.',
	'REACTION_SCORE'				=> 'Punkte',
	'REACTION_SCORE_EXPLAIN'		=> 'Legt die Auswirkung (in Form von Punkten) dieser Reaktion fest.',
	'REACTION_TITLE'				=> 'Titel',
	'REACTION_TITLE_EXPLAIN'		=> 'Name oder Titel dieser Reaktion',

	'REACTIONS_ALLOW_CHANGE'			=> 'Reaktion darf geändert werden',
	'REACTIONS_ALLOW_CHANGE_EXPLAIN'	=> 'Legt fest, ob eine Reaktion nachträglich geändert werden kann.',
	'REACTIONS_ALLOW_MYSELF'			=> 'Reaktion auf eigene Beiträge',
	'REACTIONS_ALLOW_MYSELF_EXPLAIN'	=> 'Wenn aktiviert, dürfen Nutzer auf ihre eigenen Beiträge reagieren.',
	'REACTIONS_BUTTON_POSITION'			=> 'Position der Schaltfläche',
	'REACTIONS_BUTTON_POSITION_EXPLAIN'	=> 'Legt fest, wo die Schaltfläche zur Reaktion auf eine Nachricht erscheint.',
	'REACTIONS_FORCE_ATTACH'			=> 'Reaktion erforderlich für Anhänge',
	'REACTIONS_FORCE_ATTACH_EXPLAIN'	=> 'Wenn aktiviert, müssen Nutzer reagieren um Anhänge zu sehen.',
	'REACTIONS_FORCE_REPLY'				=> 'Reaktion erforderlich für Antwort',
	'REACTIONS_FORCE_REPLY_EXPLAIN'		=> 'Wenn aktiviert, müssen Nutzer auf den ersten Beitrag in einem Thema reagieren, um zu antworten.',
	'REACTIONS_LIST_ORDER'				=> 'Sortierreihenfolge',
	'REACTIONS_LIST_ORDER_EXPLAIN'		=> 'Legt die Sortierreihenfolge in der Liste der Reaktionen fest.',
	'REACTIONS_ORDER_TIME'				=> 'Reaktionszeitpunkt',
	'REACTIONS_ORDER_USERNAME'			=> 'Nutzername',
	'REACTIONS_SCORE_ON_PROFILE'		=> 'Punktzahl anzeigen',
	'REACTIONS_SCORE_ON_PROFILE_EXPLAIN'	=> 'Wenn aktiviert, wird die erreichte Punktzahl eines Nutzers auf dessen Profil angezeigt.',
	'REACTIONS_ZONE_ALL'				=> 'Alle Beiträge',
	'REACTIONS_ZONE_ONLY_FIRST_POST'	=> 'Nur erster Beitrag',
	'REACTIONS_ZONE_ONLY_REPLIES'		=> 'Nur Antworten',
	'REACTIONS_ZONES'					=> 'Beiträge, auf die reagiert werden kann',
	'REACTIONS_ZONES_EXPLAIN'			=> 'Legt fest, auf welche Art von Beiträgen reagiert werden kann.<br /><br />
		<em>Die hier gewählte Einstellung kann die Funktion anderer Einstellungen ändern/einschränken.</em>',

	'SCORE_CUSTOM'			=> 'Benutzerdefiniert',
	'SCORE_CUSTOM_VALUE'	=> 'Benutzerdefiniert (%s)',
	'SELECT_COLOUR'			=> 'Farbe wählen',

	'scores' 	=> [
		1 		=> 'Positiv (+1)',
		0 		=> 'Neutral',
		-1 		=> 'Negativ (-1)',
	],
]);
