<?php
/**
 * [English [En]]
 * @package cBB Attachments
 * @version 1.0.0 26/01/2024
 *
 * @copyright (c) 2024 CaniDev
 * @copyright (c) 2024 French Translation by Fred Rimbert https://forums.caforum.fr/
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
	'ACP_AP_CONFIG_EXPLAIN'		=> 'Depuis cette page, vous pouvez gérer les options spécifiques pour certains formats de pièces jointes.',

	'AP_ALLOW_DOWNLOAD'			=> 'Autoriser le téléchargement',
	'AP_ALLOW_DOWNLOAD_EXPLAIN'	=> 'Permet à l‘utilisateur de télécharger le fichier.<br>S‘il est désactivé, le bouton de téléchargement ne sera pas affiché sur le fichier.',
	'AP_VIEW_TYPE'			=> 'Type de vue',
	'AP_VIEW_TYPE_EXPLAIN'	=> 'Définit comment les fichiers avec ce format seront affichés.',

	'AP_SHOW_INFO'				=> 'Montrer l‘information',
	'AP_SHOW_PLAYER'			=> 'Afficher le lecteur',
	'AP_SHOW_PLAYER_AND_INFO'	=> 'Afficher le lecteur + l‘information',
	'AP_SHOW_PREVIEW'			=> 'Afficher l‘aperçu',

	'AP_OPACITY'				=> 'Opacité',
	'AP_POSITION'				=> 'Position',
	'AP_SIZE'					=> 'Taille',
	
	// Format: Audio
	'FORMAT_AUDIO_TITLE'		=> 'Fichiers audio',
	'FORMAT_AUDIO_EXPLAIN'		=> 'Options spécifiques et lecteur de fichiers audio.',

	// Format: Basic
	'FORMAT_BASIC_TITLE'		=> 'Format de base',
	'FORMAT_BASIC_EXPLAIN'		=> 'Affiche une présentation de base pour tous les fichiers non contenus dans les autres modules.<br>Si désactivé, la mise en page phpBB par défaut sera affichée.',

	// Format: Cad
	'FORMAT_CAD_TITLE'			=> 'Fichiers CAD',
	'FORMAT_CAD_EXPLAIN'		=> 'Options spécifiques et aperçu des fichiers AutoCad.',

	// Format: Image
	'FORMAT_IMAGE_TITLE'			=> 'Images',
	'FORMAT_IMAGE_EXPLAIN'			=> 'Options pour les fichiers image.',
	'AP_IMAGE_HIDE_TEXT'			=> 'Masquer la légende',
	'AP_IMAGE_HIDE_TEXT_EXPLAIN'	=> 'Définit si le texte affiché sous les images sera masqué',
	'AP_IMAGE_REMOVE_EXIF'			=> 'Supprimer les données Exif',
	'AP_IMAGE_REMOVE_EXIF_EXPLAIN'	=> 'Si cette option est activée, les données EXIF ​​intégrées à l‘image (par exemple : emplacement, appareil photo, flash, etc.) seront supprimées lors du téléchargement en pièce jointe.<br><em>Cela affecte uniquement l‘extension jpg ou jpeg.</em>',
	'AP_IMAGE_WATERMARK'			=> 'Filigrane',
	'AP_IMAGE_WATERMARK_EXPLAIN'	=> 'Vous pouvez définir un filigrane pour les nouvelles images téléchargées.',

	// Format: Pdf
	'FORMAT_PDF_TITLE'			=> 'Fichiers PDF',
	'FORMAT_PDF_EXPLAIN'		=> 'Options spécifiques et aperçu pour les fichiers PDF.',

	// Format: Video
	'FORMAT_VIDEO_TITLE'		=> 'Fichiers video',
	'FORMAT_VIDEO_EXPLAIN'		=> 'Options spécifiques et lecteur de fichiers vidéo.',
]);
