<?php
/**
 * [Italiano [It]]
 * @package cBB Follower
 * @version 2.0.4 30/10/2023
 *
 * @copyright (c) 2023 CaniDev & Lord Phobos
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
	'ABOUTME'					=> 'Su di me',
	'ABOUTME_EXPLAIN'			=> 'Breve testo (massimo 500 caratteri), visibile agli altri utenti.',
	'ERROR_ABOUTME_TOO_LONG'	=> 'Il campo "Su di me" contiene più caratteri del consentito',
	'HEADER_IMAGE'				=> 'Immagine del profilo',
	'HEADER_IMAGE_EXPLAIN'		=> 'Immagine che verrà visualizzata come sfondo dell\'intestazione del tuo profilo.',
	
	// Notifiche
	'NOTIFICATION_GROUP_FOLLOWER'	=> 'Notifiche del follower dell\'utente',
	'FW_NOTIFICATION_TYPE_BIRTHDAY'	=> 'Qualcuno che segui compie gli anni',
	'FW_NOTIFICATION_TYPE_COMMENT'	=> 'Qualcuno pubblica un commento sul tuo profilo',
	'FW_NOTIFICATION_TYPE_FOLLOW'	=> 'Qualcuno ti segue',
	'FW_NOTIFICATION_TYPE_LIKE'		=> 'Qualcuno mette "Mi piace" a un tuo commento o messaggio',
	'FW_NOTIFICATION_TYPE_MENTION'	=> 'Qualcuno ti menziona in un commento o messaggio',
	'FW_NOTIFICATION_TYPE_POST'		=> 'Qualcuno che segui pubblica un messaggio',
	'FW_NOTIFICATION_TYPE_REPLY'	=> 'Qualcuno risponde a un commento sul tuo profilo',
	'FW_NOTIFICATION_TYPE_SHARE'	=> 'Qualcuno condivide un commento sul tuo profilo',
	'FW_NOTIFICATION_TYPE_TOPIC'	=> 'Qualcuno che segui pubblica un argomento',

]);
