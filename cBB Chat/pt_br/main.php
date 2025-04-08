<?php
/** 
 * [Brazilian Portuguese [pt_br]] 
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 * Brazilian Portuguese  translation by eunaumtenhoid [2017][ver 1.2.0] (https://github.com/phpBBTraducoes)
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

// Chat language
$lang = array_merge($lang, [
	'CHAT'						=> 'Chat',
	'CHAT_APPLY'				=> 'Aplicar',
	'CHAT_ARCHIVE'				=> 'Arquivo do chat',
	'CHAT_BAN_DATE'				=> 'Fim da exclusão',
	'CHAT_BAN_DATE_EXPLAIN'		=> 'O formato válido é DD/MM/AA hh:mm:ss.',
	'CHAT_BAN_PERIOD'			=> 'Duração da exclusão',
	'CHAT_BAN_USER'				=> 'Excluir',
	'CHAT_BBCODE'				=> 'BBcodes',
	'CHAT_CHANGE_NAME'			=> 'Mudar de nome',
	'CHAT_COLOR'				=> 'Cor do texto',
	'CHAT_CONNECT'				=> 'Conectar/Desconectar',
	'CHAT_CUSTOM_BBCODES'		=> 'BBcodes personalizados',
	'CHAT_DELETE_USER'			=> 'Excluir usuário',
	'CHAT_DEST_ROOM'			=> 'Destino',
	'CHAT_DISCONNECT_MESSAGE'	=> 'Você está desconectado.',
	'CHAT_FLOOD_WAIT'			=> 'O tempo de Flood esta definido. Por favor, espere...',
	'CHAT_GUEST'				=> 'Visitante_%s',
	'CHAT_GUEST_ROOM'			=> 'Geral',
	'CHAT_MENTION'				=> 'Menção',
	'CHAT_MOVE'					=> 'Mover para outra sala',
	'CHAT_MOVE_CONFIRM'			=> 'Tem certeza de que deseja mover as mensagens selecionadas?',
	'CHAT_NO_INFORMATION'		=> 'Informação não disponível.',
	'CHAT_PM_EXCEED'			=> 'Você não pode abrir mais conversas privadas por causa de um limite definido pela administração.',
	'CHAT_PURGE'				=> 'Excluir mensagens',
	'CHAT_PURGE_CONFIRM'		=> 'Tem certeza de que deseja excluir todas as mensagens da sala <strong><em>%s</em></strong> ?',
	'CHAT_REFRESH'				=> 'Atualizar',
	'CHAT_RULES'				=> 'Regras do chat',
	'CHAT_SEND_PM'				=> 'Mensagem privada',
	'CHAT_SMILIES'				=> 'Smilies',
	'CHAT_SOUND'				=> 'Ativar/Desativar som',

	'CHAT_ENTER_AS_GUEST'		=> 'Entrar como visitante',
	'CHAT_ENTER_AS_REGISTERED'	=> 'Entrar como membro',
	
	'CHAT_STATUS_AVAILABLE'		=> 'Disponível',
	'CHAT_STATUS_AWAY'			=> 'Ausente',
	'CHAT_STATUS_BUSY'			=> 'Ocupado',
	'CHAT_STATUS_HIDDEN'		=> 'Oculto',

	'CHAT_TIP'					=> 'Dicas',
	'CHAT_UNBAN_USER'			=> 'Remover exclusão',
	'CHAT_USER_BANNED_PERIOD'		=> 'Você está excluído do chat até: %s',
	'CHAT_USER_BANNED_PERMANENT'	=> 'Você está excluído do chat permanentemente.',
	'CHAT_USER_ALREADY_EXISTS'		=> 'O usuário já está em uso.',
    'CHAT_VIEW_HISTORY'				=> 'Ver mensagens anteriores',
	
	'CUSTOM_DATE'	=> 'Data personalizada',
	'EDIT'			=> 'Editar',
	'HALF_AN_HOUR'	=> 'Meia hora',
	'NEW_TOPIC'		=> 'Novo tópico',
	'PERMANENT'		=> 'Permanente',
	'QUOTE'			=> 'Citar',

	'CORE_INSTALL_ERROR'	=> 'Você não carregou todos os arquivos do pacote de instalação ou está tentando instalar um pacote antigo.<br />
		Certifique-se de fazer upload de todos os arquivos (incluindo a pasta <em>core</em>) e usar um pacote baixado do site oficial.',
]);

// Text language
$lang = array_merge($lang, []);
