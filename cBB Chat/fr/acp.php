<?php
/**
 * [French [Fr]] translation by Galixte (http://www.galixte.com)
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CHAT_CONFIG_EXPLAIN'	=> 'Permet de modifier les différentes fonctionnalités du tchat.<br />
		L’auteur de l’extension: « cBB Chat » vous remercie d’avoir choisi son outil pour votre forum !',
	'ACP_CHAT_PAGES_EXPLAIN'	=> 'Depuis cette page il est possible de gérer les pages où sera chargé le tchat et son emplacement.',
	'ACP_CHAT_ROOMS_EXPLAIN'	=> 'Depuis cette page il est possible de gérer les salons spéciaux qui seront affichés dans le tchat.<br />Pour ordonner l’affichage des salons il est possible de les sélectionner puis les déplacer.',
	'ACP_CHAT_TEXTS_EXPLAIN'	=> 'Depuis cette page il est possible de gérer les annonces, conseils et règles du tchat.<br />
		Pour ordonner l’affichage des textes il est possible de les sélectionner puis les déplacer.',
	
	'CHAT_ALLOW_BBCODE'			=> 'Autoriser les BBCodes',
	'CHAT_ALLOW_BBCODE_EXPLAIN'	=> 'Permet d’autoriser l’utilisation des BBCodes aux utilisateurs.',
	'CHAT_ALLOW_PM'				=> 'Autoriser les messages privés',
	'CHAT_ALLOW_PM_EXPLAIN'		=> 'Permet d’autoriser l’utilisation des messages privés entre utilisateurs.',
	'CHAT_ANONYMOUS_ALLOWED'	=> 'Autoriser les invités anonymes',
	'CHAT_ANONYMOUS_ALLOWED_EXPLAIN'	=> 'Si activé, les invités auront accès au tchat avec un nom aléatoire au lieu de décider de leur propre nom d’utilisateur.<br />
		<em>Cette option fonctionne uniquement si le groupe « Invités » a la permission : « Peut voir le tchat. ». </em>',
	'CHAT_AUTOCONNECT'			=> 'Activer la connexion automatique',
	'CHAT_AUTOCONNECT_EXPLAIN'	=> 'Permet aux utilisateurs de se connecter automatiquement.',
	'CHAT_AUTO_AWAY'			=> 'Disponibilité',
	'CHAT_AUTO_AWAY_EXPLAIN'	=> 'Permet de définir la limite de temps (en minutes) après laquelle le statut <em><strong>Disponible</strong></em>, de l’utilisateur, change pour le statut <em><strong>Absent</strong></em>.<br /><em> Paramétrer sur 0 pour désactiver cette fonctionnalité</em>.',
	'CHAT_AUTO_AWAY_ERROR'		=> 'Le temps du changement de statut doit être inférieur au temps de déconnexion.',
	'CHAT_AVATARS'				=> 'Afficher les avatars',
	'CHAT_BBCODE_FORMAT'		=> 'Format personnalisé des BBCodes',
	'CHAT_BBCODE_FORMAT_EXPLAIN'	=> 'Permet de choisir le style d’affichage des BBCodes dans le tchat.',
	'CHAT_BBCODE_INBUTTON'		=> 'Boutons',
	'CHAT_BBCODE_INSELECT'		=> 'Menu de sélection',
	'CHAT_CHARS'				=> 'Nombre de caractères',
	'CHAT_CHARS_EXPLAIN'		=> 'Permet de définir la limite du nombre de caractères dans les messages.<br />
		<em>Paramétrer sur 0 pour désactiver cette limite</em>.',
	'CHAT_DIRECTION'			=> 'Sens d’affichage',
	'CHAT_DIRECTION_EXPLAIN'	=> 'Permet de définir le sens d’affichage des messages dans le tchat selon leur date.',
	'CHAT_DIRECTION_DOWN'		=> 'Croissant',
	'CHAT_DIRECTION_UP'			=> 'Décroissant',
	'CHAT_DISALLOWED_BBCODE'	=> 'Désactiver les BBCodes',
	'CHAT_DISALLOWED_BBCODE_EXPLAIN'	=> 'Permet de <strong>désactiver</strong> les BBCodes dans le tchat.<br />
		Il est possible de sélectionner plusieurs choix en usant de la touche du clavier <em>Ctrl</em> ou <em>CMD</em> et du clic gauche.',
	'CHAT_FLOOD'				=> 'Intervalle de flood',
	'CHAT_FLOOD_EXPLAIN'		=> 'Permet de définir l’intervalle de temps (en secondes) durant lequel l’utilisateur doit patienter avant de rédiger un nouveau message.<br />
		<em>Paramétrer sur 0 pour désactiver cette fonctionnalité</em>.',
	'CHAT_FORUM_POSTS'			=> 'Afficher les messages du forum',
	'CHAT_FORUM_POSTS_EXPLAIN'	=> 'Permet de définir si les nouveaux sujets ou messages du forum seront affichés dans les salons du tchat.',
	'CHAT_GROUP_USERS'			=> 'Grouper les utilisateurs',
	'CHAT_GROUP_USERS_EXPLAIN'	=> 'Permet de grouper les utilisateurs dans le tchat selon leur groupe par défaut sur le forum.',
	'CHAT_HEIGHT'				=> 'Hauteur du tchat',
	'CHAT_HEIGHT_EXPLAIN'		=> 'Permet de définir la hauteur (en pixels) dans l’espace de conversation.',
	'CHAT_HEIGHT_PAGE'			=> 'Hauteur de la page du tchat',
	'CHAT_HEIGHT_PAGE_EXPLAIN'	=> 'Permet de définir la hauteur (en pixels) de l’espace de conversation pour cette page.<br /><em>Paramétrer sur 0 pour utiliser la valeur par défaut</em>.',
	'CHAT_HIDE_POPUP'			=> 'Masquer automatiquement les menus',
	'CHAT_HIDE_POPUP_EXPLAIN'	=> 'S\'il est activé, les menus BBcode, couleur et émoticône se fermeront automatiquement lorsque vous exécuterez l\'action.',
	'CHAT_MAIN_CONFIG'			=> 'Configuration principale',
	'CHAT_MESSAGES_CONFIG'		=> 'Configuration des messages',
	'CHAT_NOTICES_ADD'			=> 'Créer une annonce',
	'CHAT_NOTICES_EDIT'			=> 'Modifier une annonce',
	'CHAT_NOTICES_EXPLAIN'		=> 'Permet de définir le texte qui sera affiché comme <em>annonce</em> ou alerte en haut du tchat.',
	'CHAT_NOTICES_ITEM'			=> 'Annonce',
	'CHAT_NOTICES_ITEM_EXPLAIN'	=> 'Permet de rédiger une annonce. Il est possible d’utiliser les variables de langue, telle que <em>{L_CHAT}</em>.<br />
		<em>Les BBCodes ou le langage HTML sont autorisés<br />
		Les smileys le sont aussi.</em>',
	'CHAT_NOTICES'				=> 'Annonces',
	'CHAT_PAGE_ALIAS'			=> 'Alias de la page',
	'CHAT_PAGE_ALIAS_EXPLAIN'	=> 'Permet de définir un ID unique pour la page qui sera utilisé dans le fichier de configuration.<br /><em>Seuls les chiffres et les lettres sont autorisés</em>.',
	'CHAT_PAGE_CONFIG'			=> 'Configuration de la page',
	'CHAT_PAGE_CUSTOM'			=> 'Chemin personnalisé',
	'CHAT_PAGE_CUSTOM_EXPLAIN'	=> 'Permet de définir le chemin complet (relatif à phpBB) de la page.<br />Par exemple: <em>repertoire/fichier.php</em>.',
	'CHAT_PAGE_ENABLED'			=> 'Activer la page du tchat',
	'CHAT_PAGE_ENABLED_EXPLAIN'	=> 'Permet d’activer la page principale du tchat.',
	'CHAT_PAGE_FILE'			=> 'Nom du fichier de la page',
	'CHAT_PAGE_FILE_EXPLAIN'	=> 'Permet de définir le fichier où sera affiché le tchat.',
	'CHAT_PAGE_FORUMS'			=> 'Forums',
	'CHAT_PAGE_FORUMS_EXPLAIN'	=> 'Permet de définir les forums où le tchat est affiché.<br />Il est possible de sélectionner plusieurs choix en usant de la touche du clavier <em>Ctrl</em> ou <em>CMD</em> et du clic gauche.<br /><em>Si aucun forum n’est sélectionné le tchat sera affiché dans tous les forums.</em> ',
	'CHAT_PM_CONFIG'			=> 'Configuration des messages privés',
	'CHAT_PM_IGNORE_FLOOD'		=> 'Ignorer l’intervalle de flood',
	'CHAT_PM_IGNORE_FLOOD_EXPLAIN'	=> 'Permet de ne pas appliquer l’intervalle de flood lors d’échanges de messages privés entre membres la publication.',
	'CHAT_PM_MAX'				=> 'Limite de messages privés',
	'CHAT_PM_MAX_EXPLAIN'		=> 'Permet de définir le nombre maximum de messages privés qu’un membre peut ouvrir simultanément.<br /><em>Définir sur la valeur 0 pour désactiver cette limite</em>.',
	'CHAT_PM_MAXAGE'			=> 'Durée de la sauvegarde',
	'CHAT_PM_MAXAGE_EXPLAIN'	=> 'Permet de définir la durée (en jours) durant laquelle les messages privés seront conservés.
		<br />Les messages plus anciens que cette durée seront supprimés.
		<br /><br /><em>La valeur doit être comprise entre 1 et 365</em>.',
	'CHAT_POSITION'				=> 'Position du tchat',
	'CHAT_POSITION_EXPLAIN'		=> 'Permet de définir la position du tchat sur la page.',
	'CHAT_POSITION_BOTTOM'		=> 'En bas',
	'CHAT_POSITION_TOP'			=> 'En haut',
	'CHAT_REFRESH_TIME'			=> 'Fréquence d’actualisation',
	'CHAT_REFRESH_TIME_EXPLAIN'	=> 'Permet de définir le temps (en secondes) après lequel le tchat s’actualise.',
	'CHAT_REMEMBER_STATUS'		=> 'Enregistrer du statut',
	'CHAT_REMEMBER_STATUS_EXPLAIN'	=> 'Permet d’enregistrer le statut des utilisateurs pour chaque nouvelle connexion, cependant, les utilisateurs auront le statut <em><strong>Disponible</strong></em> lorsqu’ils seront connectés.',
	'CHAT_ROOM_AUTH'			=> 'Permissions du salon',
	'CHAT_ROOM_AUTOPURGE'		=> 'Purge automatique',
	'CHAT_ROOM_AUTOPURGE_EXPLAIN'	=> 'Permet de définir la fréquence de la purge des messages de ce salon uniquement.',
	'CHAT_ROOM_CONFIG'			=> 'Configuration du salon',
	'CHAT_ROOM_CONNECTIONS'		=> 'Connexions',
	'CHAT_ROOM_ENABLED'			=> 'Activer le salon',
	'CHAT_ROOM_GROUPS'			=> 'Autoriser les groupes',
	'CHAT_ROOM_GROUPS_EXPLAIN'	=> 'Permet d’autoriser les groupes utilisateurs à utiliser ce salon.<br />Il est possible de sélectionner plusieurs choix en usant de la touche du clavier <em>Ctrl</em> ou <em>CMD</em> et du clic gauche.',
	'CHAT_ROOM_GUEST_FORUMS'			=> 'Forums liés au salon principal',
	'CHAT_ROOM_GUEST_FORUMS_EXPLAIN'	=> 'Permet de sélectionner les forums dans lesquels les sujets et messages seront affichés dans le salon principal.<br />
		Si aucun forum n’est sélectionné tous seront liés au salon (exceptés ceux assignés à un autre salon).<br />
		Pour effectuer une sélection multiple il est possible d’utiliser la combinaison de la touche <em>Ctrl</em> et du clic gauche de la souris.',
	'CHAT_ROOM_LINKED_FORUMS'			=> 'Forums lié à ce salon',
	'CHAT_ROOM_LINKED_FORUMS_EXPLAIN'	=> 'Permet de sélectionner le salon par défaut des forums sélectionnés ici, leur sujets et messages seront affichés en lieu et place d’être affichés dans le salon principal.<br />
		Pour effectuer une sélection multiple il est possible d’utiliser la combinaison de la touche <em>Ctrl</em> et du clic gauche de la souris.',
	'CHAT_ROOM_LINKED_GROUPS'			=> 'Groupes liés à ce salon',
	'CHAT_ROOM_LINKED_GROUPS_EXPLAIN'	=> 'Permet de sélectionner le salon pour lequel les groupes sélectionnés ici auront accès par défaut.<br />
		Pour effectuer une sélection multiple il est possible d’utiliser la combinaison de la touche <em>Ctrl</em> et du clic gauche de la souris.',
	'CHAT_ROOM_ADDED'			=> 'Le salon a été créé avec succès.',
	'CHAT_ROOM_UPDATED'			=> 'La configuration du salon a été modifiée avec succès.',
	'CHAT_ROOM_MSG_LIMIT'		=> 'Limite du message',
	'CHAT_ROOM_MSG_LIMIT_EXPLAIN'	=> 'Permet de définir la limite du nombre de messages pouvant être stockés dans ce salon. Si la limite est atteinte, les plus anciens messages seront supprimés périodiquement.
		<br /><em>Paramétrer sur 0 pour désactiver cette limite</em>.',
	'CHAT_ROOM_TITLE'			=> 'Titre du salon',
	'CHAT_ROOM_TITLE_EXPLAIN'	=> 'Permet de saisir le texte du titre du salon. Les variables de langue sont autorisées',
	'CHAT_ROOM_USERS'			=> 'Autoriser les utilisateurs',
	'CHAT_ROOM_USERS_EXPLAIN'	=> 'Permet de définir les utilisateurs qui seront autorisés à utiliser ce salon.<br />Saisir un nom d’utilisateur par ligne.',
	'CHAT_ROW_ALIGN'			=> 'Alignement des messages',
	'CHAT_ROW_ALIGN_EXPLAIN'	=> 'Définit de quel côté les messages seront affichés dans le chat. <br /><em>Ce paramètre est affecté si la langue utilisée est RTL.</em>',
	'CHAT_ROW_BUBBLE'			=> 'Bulle',
	'CHAT_ROW_FORMAT'			=> 'Format de message',
	'CHAT_ROW_FORMAT_EXPLAIN'	=> 'Définissez le style visuel des messages.',
	'CHAT_ROW_LEFT'				=> 'Afficher à gauche',
	'CHAT_ROW_MEOTHER'			=> 'Afficher l\'utilisateur actuel d\'un côté et se reposer de l\'autre',
	'CHAT_ROW_NORMAL'			=> 'Normale',
	'CHAT_ROW_RIGHT'			=> 'Afficher à droit',
	'CHAT_ROW_ZIGZAG'			=> 'Afficher en ZigZag',
	'CHAT_ROWS'					=> 'Messages sur le tchat',
	'CHAT_ROWS_EXPLAIN'			=> 'Permet de définir le nombre maximum de messages qui seront affichés dans l’espace de conversation.',
	'CHAT_RULES_ADD'			=> 'Créer une règle',
	'CHAT_RULES_EDIT'			=> 'Modifier une règle',
	'CHAT_RULES_EXPLAIN'		=> 'Permet de définir le texte qui sera affiché comme <em>règle</em> dans la ligne des règles du tchat.',
	'CHAT_RULES_ITEM'			=> 'Règle',
	'CHAT_RULES_ITEM_EXPLAIN'	=> 'Permet de rédiger une règle. Il est possible d’utiliser les variables de langue, telle que <em>{L_CHAT}</em>.<br />
		<em>Les BBCodes ou le langage HTML sont autorisés<br />
		Les smileys le sont aussi.</em>',
	'CHAT_RULES'				=> 'Règles',
	'CHAT_SOUND_ENABLED'		=> 'Activer le son',
	'CHAT_SHOW_NONE'			=> 'Ne pas afficher',
	'CHAT_SHOW_POSTS'			=> 'Tous les nouveaux messages',
	'CHAT_SHOW_TOPICS'			=> 'Uniquement les nouveaux sujets',
	'CHAT_TIMEOUT'				=> 'Temps de déconnexion',
	'CHAT_TIMEOUT_EXPLAIN'		=> 'Permet de définir le temps (en minutes) après lequel le tchat considère l’utilisateur comme « inactif » et le déconnecte du tchat.<br /><em>Paramétrer sur 0 pour désactiver cette fonctionnalité</em>.',
	'CHAT_TIPS_ADD'				=> 'Créer un conseil',
	'CHAT_TIPS_EDIT'			=> 'Modifier un conseil',
	'CHAT_TIPS_EXPLAIN'			=> 'Permet de définir le texte qui sera affiché comme <em>conseil</em> dans le champ de saisie du texte dans le tchat.',
	'CHAT_TIPS_ITEM'			=> 'Conseil',
	'CHAT_TIPS_ITEM_EXPLAIN'	=> 'Permet de rédiger un conseil. Il est possible d’utiliser les variables de langue, telle que <em>{L_CHAT}</em>.<br />
		<em>Les BBCodes ou le langage HTML sont autorisés<br />
		Les smileys le sont aussi.</em>',
	'CHAT_TIPS'					=> 'Conseils',
	'CHAT_USERS_CONFIG'			=> 'Configuration des utilisateurs',
	
	'EACH_DAY'		=> 'Chaque jour',
	'EACH_WEEK'		=> 'Chaque semaine',
	'EACH_MONTH'	=> 'Chaque mois',
	'EACH_YEAR'		=> 'Chaque année',
	
	'ADD_ROOM'					=> 'Créer un salon',
	'CONTENT'					=> 'Contenu',
	'CUSTOM_BBCODES'			=> 'BBCodes personnalisés',
	'CUSTOM_ROUTE'				=> 'Route personnalisé',
	'CUSTOM_ROUTES'				=> 'Routes personnalisés',
	'DEFAULT_BBCODES'			=> 'BBCodes par défaut',
	'FORUM_ROUTES'				=> 'Routes du forum',
	'NO_PAGES'					=> 'Pages non disponibles',
	'NO_ROOM'					=> 'Le salon sélectionné n’existe pas',
	'NO_TEXTS'					=> 'Textes non disponibles',
	'PAGE_ADD'					=> 'Créer une page',
	'PAGE_ALIAS'				=> 'ID de la page',
	'PAGE_URL'					=> 'Adresse URL de la page',
	'ROOM_TITLE'				=> 'Titre du salon',
	'SELECT_PAGE'				=> 'Sélectionner un fichier',
	
	'INVALID_FILE'			=> 'Le fichier n’existe pas ou a un format invalide.',
	'NO_ALIAS'				=> 'L’alias de la page est invalide.',
	'PAGE_ALREADY_EXISTS'	=> 'La page est déjà utilisée.',
	
	'REMOVE_ROOM_CONFIRM'	=> 'Confirmer la suppression de ce salon ainsi que tous ses messages.',
]);
