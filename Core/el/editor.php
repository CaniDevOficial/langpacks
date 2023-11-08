<?php
/**
 * [English [En]]]
 * @package Ext Common Core
 * @version 1.1.2 20/09/2023
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

$lang = array_merge($lang, array(
	'AUTHOR'					=> 'Συντάκτης:',
	'CODE'						=> 'Κώδικας',
	'DATE'						=> 'Ημερομηνία:',
	'DESCRIPTION_OPTIONAL'		=> 'Περιγραφή (προαιρετική):',
	'INSERT'					=> 'Εισαγωγή',
	'MAXIMIZE'					=> 'Μεγιστοποίηση κειμενογράφου',
	'PRINT'						=> 'Εκτύπωση',
	'REMOVE_FORMAT'				=> 'Αφαίρεση μορφοποίησης',
	'UNLINK'					=> 'Αφαίρεση συνδέσμου',
	'URL'						=> 'Url:',
	'VIEW_SOURCE'				=> 'Εμφάνιση κώδικα',
));
