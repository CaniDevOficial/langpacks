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
	'COPY_TO_LIST'			=> 'Copier dans la liste actuelle',
	'CREATE_SERVER_COPY'	=> 'Créer une copie sur ce serveur',
	'DELETE_FROM_LIST'		=> 'Supprimer de la liste',
	'DELETE_ICON'			=> 'Supprimer l‘icône',
	'DELETE_IMAGE'			=> 'Supprimer l‘image',
	'DELETE_PERMANENTLY'	=> 'Effacé définitivement',
	'ICON_PREVIEW'			=> 'Prévisualiser l‘icône',
	'IMAGE_DESCRIPTION'		=> 'Description',
	'IMAGE_DETAILS'			=> 'Détails de l‘image',
	'IMAGE_DIMENSIONS'		=> '<%width%> × <%height%> pixels',
	'IMAGE_SAVE_ERROR'		=> 'Impossible d‘enregistrer l‘image',
	'IMAGE_TITLE'			=> 'Titre',
	'IMAGE_URL'				=> 'Url',
	'INSERT_ON_ENTRY'		=> 'Insérer dans le texte',
	'FILES_DELETED'			=> 'Fichiers supprimés',
	'FILES_DRAG'			=> 'Glissez-déposez les fichiers à télécharger',
	'FILES_DROP'			=> 'Déposez les fichiers à télécharger',
	'FILES_REMOVE_CONFIRM'	=> 'Vous êtes sur le point de supprimer définitivement les fichiers sélectionnés <br /> Voulez-vous continuer ?',
	'FORMAT_INVALID'		=> 'Format invalide',
	'MAX_IMAGESIZE'			=> 'Les images seront redimensionnées à %d x %d pixels.',
	'MAX_FILESIZE'			=> 'Taille maximum de fichier  %s.',
	'MEDIA_UPDATED'			=> 'Changements sauvegardés',
	'OR'					=> 'ou',
	'PROCCESS'				=> 'Traiter',
	'SELECT_ICON'			=> 'Sélectionner un nouvel icône',
	'SELECT_IMAGE'			=> 'Sélectionner une nouvelle image',
	'SELECT_FILE'			=> 'Choisir le dossier',
	'SELECT_FILES'			=> 'Choisir les dossiers',
	'SELECTED_COUNT'		=> '<span class="value">0</span> choisie',
	'SET_ICON'				=> 'Définir l‘icône',
	'SET_IMAGE'				=> 'Définir l‘image',
	'UPDATE'				=> 'Mettre à jour',
	'UPLOADING_FILES'		=> 'Téléchargement de fichiers...',
	
	'CURRENT_LIST'		=> 'Liste actuelle',
	'GALLERY'			=> 'Gallerie',
	'ICONS'				=> 'Icônes',
	'INSERT_URL'		=> 'Insérer à partir de l‘URL',
	'UPLOAD_IMAGE'		=> 'Télécharger une image',
	
	'ICON_BRAND'			=> 'Marque',
	'ICON_DIRECTIONAL'		=> 'Directionnel',
	'ICON_FILE_TYPE'		=> 'Type de fichier',
	'ICON_GENDER'			=> 'Genre',
	'ICON_HAND'				=> 'Main',
	'ICON_MEDICAL'			=> 'Médical',
	'ICON_PAYMENT'			=> 'Paiement et devise',
	'ICON_TEXT_EDITOR'		=> 'Éditeur de texte',
	'ICON_TRANSPORTATION'	=> 'Transport',
	'ICON_VIDEO_PLAYER'		=> 'Lecteur vidéo',
	'ICON_WEB_APPLICATION'	=> 'Application Web ',
]);
