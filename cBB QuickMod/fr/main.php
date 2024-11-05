<?php
/**
 * [French [fr]] by team caforum (https://caforum.fr/forum/)
 * @package cBB QuickMod
 * @version 1.1.6 01/11/2024
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
	'APPROVE_TOPIC'			=> 'Approuver',
	'CHANGE_ICON'			=> 'Changer l‘icône',
	'CHANGE_ICON_TOPIC'		=> 'Changer l‘icône',
	'CHANGE_POSTER_TOPIC'	=> 'Changer l‘auteur du sujet',
	'CHANGE_TIME_TOPIC'		=> 'Changer la date de publication',
	'DISAPPROVE_TOPIC'		=> 'Désapprouver',
	
	'CONFIRM_CHANGE_TOPIC'		=> 'Êtes-vous sûr de vouloir modifier le sujet sélectionné ?',
	'CONFIRM_CHANGE_TOPICS'		=> 'Êtes-vous sûr de vouloir modifier les sujets sélectionnés ?',
	'CONFIRM_DELETE_TOPIC'		=> 'Êtes-vous sûr de vouloir supprimer le sujet sélectionné ?',
	'CONFIRM_DELETE_TOPICS'		=> 'Êtes-vous sûr de vouloir supprimer les sujets sélectionnés ?',
	'CONFIRM_LOCK_TOPIC'		=> 'Êtes-vous sûr de vouloir vérrouiller le sujet sélectionné ?',
	'CONFIRM_LOCK_TOPICS'		=> 'Êtes-vous sûr de vouloir vérouiller les sujets sélectionnés ?',
	'CONFIRM_RENAME_TOPIC'		=> 'Êtes-vous sûr de vouloir renommer le sujet sélectionné ?',
	'CONFIRM_RENAME_TOPICS'		=> 'Êtes-vous sûr de vouloir renommer les sujets sélectionnés ?',
	'CONFIRM_RESTORE_TOPIC'		=> 'Êtes-vous sûr de vouloir restaurer le sujet sélectionné ?',
	'CONFIRM_RESTORE_TOPICS'	=> 'Êtes-vous sûr de vouloir restaurer les sujets sélectionnés ?',
	'CONFIRM_UNLOCK_TOPIC'		=> 'AÊtes-vous sûr de vouloir déverrouiller le sujet sélectionné ?',
	'CONFIRM_UNLOCK_TOPICS'		=> 'Êtes-vous sûr de vouloir déverrouiller les sujets sélectionnés ?',
	
	'DELETE_TOPIC'				=> 'Supprimer',
	'DELETE_PERMANENTLY_TOPIC'	=> 'Supprimer définitivement',
	'FORK_TOPIC'				=> 'Copie',
	'MAKE_ANNOUNCE_TOPIC'		=> 'Changer en annonce',
	'MAKE_GLOBAL_TOPIC'			=> 'Changer en annonce globale',
	'MAKE_NORMAL_TOPIC'			=> 'Changer en sujet normal',
	'MAKE_STICKY_TOPIC'			=> 'changer en sujet épinglé',
	
	'MARK_ANNOUNCE'			=> 'Marquer par annonce',
	'MARK_BY_STATUS'		=> 'Marquer par état',
	'MARK_BY_TYPE'			=> 'Marquer par type',
	'MARK_GENERAL'			=> 'Général',
	'MARK_GLOBAL'			=> 'Marquer les sujets globaux',
	'MARK_LOCKED'			=> 'Marquer les sujets verrouillés',
	'MARK_MOVED'			=> 'Marquer les sujets déplacés',
	'MARK_NORMAL'			=> 'Marquer les sujets normaux',
	'MARK_STICKY'			=> 'Marquer les sujets épinglés',
	'MARK_TOPICS'			=> 'Marquer les sujets',
	'MARK_UNLOCKED'			=> 'Marquer les sujets déverrouillés',
	
	'MOVE_TOPIC'			=> 'Déplacer',
	'NO_TOPIC_SELECTED'		=> 'Aucun sujet sélectionné',
	'OPTIONS_APPROVE'		=> 'Actions pour approuver',
	'OPTIONS_LOCK'			=> 'Actions pour verrouiller',
	'OPTIONS_REMOVE'		=> 'Actions pour supprimer',
	'OPTIONS_TOOLS'			=> 'Outils',
	'RENAME_TOPIC'			=> 'Renommer',
	'RESTORE_TOPIC'			=> 'Restaurer',
	'RESYNC_TOPIC'			=> 'Synchroniser',
	'TOPIC_TYPE'			=> 'Type de sujet',
	'UNLOCK_TOPIC'			=> 'Dévérouiller',

	'ICON'					=> 'Icône',
	'NOTHING'				=> 'Il n‘y a eu aucun changement',
	'SELECT_ACTION'			=> 'Sélectionner une action',
	'WITH_SELECTED'			=> 'Avec sélection',

	'AUTHOR_CHANGE_SUCCESS'	=> 'L\'auteur des sujets a été modifié correctement.',
	'ICON_CHANGE_SUCCESS'	=> 'L\'icône a été modifiée correctement.',
	'TIME_CHANGE_SUCCESS'	=> 'L\'heure a été modifiée correctement.',
	'TOPIC_RENAMED_SUCCESS'	=> 'Le sujet a été renommé correctement.',
	
	'CORE_INSTALL_ERROR'	=> 'Vous n‘avez pas téléchargé tous les fichiers du package d‘installation ou vous essayez d‘installer un ancien package.<br />
		Assurez-vous de télécharger tous les fichiers (y compris le dossier <em>core</em>) et d‘utiliser un package téléchargé depuis le site officiel.',
]);
