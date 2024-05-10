<?php
/**
 * [Italiano [It]]
 * @package cBB Blockgets
 * @version 2.0.5 15/01/2023
 *
 * @copyright (c) 2023 CaniDev & Lord Phobos
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * @general tags and messages
*/
$lang = array_merge($lang, [
	'ACP_BLOCKGETS'				=> 'Blockgets',
	'ACP_BLOCKGETS_GENERAL'		=> 'Generale',
	
	'ACP_BLG_CONFIG_MAIN'		=> 'Configurazione generale',
	'ACP_BLG_CONFIG_OPTIONAL'	=> 'Configurazione addizionale',
	'ACP_BLG_IMAGES'			=> 'Immagini',
	'ACP_PAGES_AND_BLOCKS'		=> 'Pagine e blocchi',
	
	// Logs
	'LOG_BLG_CONFIG'		=> '<strong>cBB Blockgets:</strong> Cambiata la configurazione principale',
	'LOG_BLOCK_ADDED'		=> '<strong>cBB Blockgets:</strong> Nuovo blocco aggiunto<br />» %1$s in %2$s',
	'LOG_BLOCK_COPY_PAGE'	=> '<strong>cBB Blockgets:</strong> Blocchi copiati<br />» da %1$s a %2$s',
	'LOG_BLOCK_MOVED'		=> '<strong>cBB Blockgets:</strong> Cambiate posizioni dei blocchi<br />» %1$s',
	'LOG_BLOCK_MOVED_PAGE'	=> '<strong>cBB Blockgets:</strong> Blocchi spostati<br />» da %1$s a %2$s',
	'LOG_BLOCK_REMOVED'		=> '<strong>cBB Blockgets:</strong> Blocco/blocchi cancellato/i<br />» in %1$s',
	'LOG_BLOCK_UPDATED'		=> '<strong>cBB Blockgets:</strong> Blocco modificato<br />» %1$s in %2$s',
	'LOG_EVENT_REMOVED'		=> '<strong>cBB Blockgets:</strong> Evento cancellato<br />» %1$s',
	'LOG_LIST_REMOVED'		=> '<strong>cBB Blockgets:</strong> Lista cancellata<br />» %1$s',
	'LOG_PAGE_ADDED'		=> '<strong>cBB Blockgets:</strong> Nuova pagina aggiunta<br />» %1$s',
	'LOG_PAGE_UPDATED'		=> '<strong>cBB Blockgets:</strong> Pagina cambiata<br />» %1$s',
	'LOG_PAGE_REMOVED'		=> '<strong>cBB Blockgets:</strong> Pagina cancellata<br />» %1$s',
	
	// Permissions
	'ACL_A_BLOCKGETS_MANAGE'		=> 'Può gestire cBB Blockgets',
	'ACL_U_BLOCKGETS_BIRTHDAYS'		=> 'Può vedere i compleanni nel calendario',
	'ACL_U_BLOCKGETS_CALENDAR'		=> 'Può vedere il calendario',
	'ACL_U_BLOCKGETS_EVENTS'		=> 'Può gestire gli eventi di calendario',
]);
