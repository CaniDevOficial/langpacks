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
	'ACP_CHAT_CONFIG_EXPLAIN'	=> 'Obrigado por escolher cBB Chat como complemento do seu fórum!<br />
        A partir desta página, você pode modificar as principais características do chat.',
	'ACP_CHAT_PAGES_EXPLAIN'	=> 'Aqui você pode gerenciar as páginas que irão carregar o chat e a posição dele.',
	'ACP_CHAT_ROOMS_EXPLAIN'	=> 'Aqui você pode gerenciar as salas especiais para serem exibidas no chat.<br /> Você pode ordenar arrastando as salas para a posição correta.',
	'ACP_CHAT_TEXTS_EXPLAIN'	=> 'Aqui você pode gerenciar os anúncios, dicas e regras do chat.<br />
        Para escolher a ordem dos textos, arraste e solte-os na posição correta.',
	
	'CHAT_ALLOW_BBCODE'			=> 'Permitir BBcode',
	'CHAT_ALLOW_BBCODE_EXPLAIN'	=> 'Define se os usuários podem usar tags BBcode no chat.',
	'CHAT_ALLOW_PM'				=> 'Permitir mensagens privadas',
	'CHAT_ALLOW_PM_EXPLAIN'		=> 'Ativar/Desativar as mensagens privadas entre usuários.',
	'CHAT_ANONYMOUS_ALLOWED'	=> 'Permitir convidados sem nome',
	'CHAT_ANONYMOUS_ALLOWED_EXPLAIN'	=> 'Se ativado, os visitantes irão acessar o chat com um nome aleatório em vez de ter que decidir seu nome.<br />
        <em>Esta opção só é válida se o grupo de convidados tiver permissões para visualizar o chat. </em>',
	'CHAT_AUTOCONNECT'			=> 'Autoconectar',
	'CHAT_AUTOCONNECT_EXPLAIN'	=> 'Define se o chat se autoconecte ao carregar a página.',
	'CHAT_AUTO_AWAY'			=> '<em>Disponível</ em> tempo de status',
	'CHAT_AUTO_AWAY_EXPLAIN'	=> 'Define o tempo limite (em minutos) após o qual o status de um usuário <em><strong>Disponível</strong></em> mude para <em><strong> Ausente </strong> </em>. <Br /><Em>Defina para 0 para desativar esta função</em>.',
	'CHAT_AUTO_AWAY_ERROR'		=> 'O tempo de mudança de status deve ser inferior ao tempo de desconexão',
	'CHAT_AVATARS'				=> 'Mostrar avatares',
	'CHAT_BBCODE_FORMAT'		=> 'Formato do BBCode personalizado',
	'CHAT_BBCODE_FORMAT_EXPLAIN'	=> 'Defina o visual dos BBcodes personalizados no chat.',
	'CHAT_BBCODE_INBUTTON'		=> 'Botões',
	'CHAT_BBCODE_INSELECT'		=> 'Menu selecionável',
	'CHAT_CHARS'				=> 'Caracteres de mensagens',
	'CHAT_CHARS_EXPLAIN'		=> 'Máximo número de caracteres permitidos nas mensagens.<br />
        <em>Defina 0 para desativar esse limite</em>.',
	'CHAT_DIRECTION'			=> 'Direção das mensagens',
	'CHAT_DIRECTION_EXPLAIN'	=> 'Define a ordem das mensagens no chat.',
	'CHAT_DIRECTION_DOWN'		=> 'Mais velho primeiro',
	'CHAT_DIRECTION_UP'			=> 'Mais novo primeiro',
	'CHAT_DISALLOWED_BBCODE'	=> 'BBcode tags no allowed',
	'CHAT_DISALLOWED_BBCODE_EXPLAIN'	=> 'As tags BBcode que <strong>não</strong> serão permitidas no chat.<br />
		Você pode selecionar várias tags usando a tecla <em>Ctrl</em> no seu teclado.',
	'CHAT_FLOOD'				=> 'Limite flood',
	'CHAT_FLOOD_EXPLAIN'		=> 'Define o tempo (em segundos) que os usuários devem aguardar para escrever uma nova mensagem. <br />
        <em>Defina 0 para desativar esse limite</em>. ',
	'CHAT_FORUM_POSTS'			=> 'Forum posts',
	'CHAT_FORUM_POSTS_EXPLAIN'	=> 'Define se os novos tópicos ou novos messagens no fórum serão exibidos na sala <em>Geral</em> do chat.',
	'CHAT_GROUP_USERS'			=> 'Agrupar usuários por grupos',
	'CHAT_GROUP_USERS_EXPLAIN'	=> 'Se ativado, os usuários serão agrupados no chat pelo grupo padrão.',
	'CHAT_HEIGHT'				=> 'Altura do chat',
	'CHAT_HEIGHT_EXPLAIN'		=> 'Define a altura (em pixels) do contêiner de conversação.',
	'CHAT_HEIGHT_PAGE'			=> 'Altura do chat',
	'CHAT_HEIGHT_PAGE_EXPLAIN'	=> 'Defina a altura (em pixels) do contêiner de conversação nesta página. <br/><em>Defina 0 para usar o valor padrão.</em>',
	'CHAT_HIDE_POPUP'			=> 'Ocultar menus automaticamente',
	'CHAT_HIDE_POPUP_EXPLAIN'	=> 'Se habilitado, os menus BBcode, cores e emoticons serão fechados automaticamente ao realizar a ação.',
	'CHAT_MAIN_CONFIG'			=> 'Configuração principal',
	'CHAT_MESSAGES_CONFIG'		=> 'Configuração da mensagem',
	'CHAT_NOTICES_ADD'			=> 'Adicionar anúncio',
	'CHAT_NOTICES_EDIT'			=> 'Editar anúncio',
	'CHAT_NOTICES_EXPLAIN'		=> 'Este texto será exibido como anúncios ou alertas na parte superior do bate-papo.',
	'CHAT_NOTICES_ITEM'			=> 'Anúncio',
	'CHAT_NOTICES_ITEM_EXPLAIN'	=> 'Você pode usar variáveis ​​de idioma, por exemplo <em>{L_CHAT}</em>.<br />
        <em>BBcode ou HTML é permitido.<br/>
        Smilies são permitidos.</em>',
	'CHAT_NOTICES'		        => 'Anúncios',
	'CHAT_PAGE_ALIAS'			=> 'ID da página',
	'CHAT_PAGE_ALIAS_EXPLAIN'	=> 'Define um ID exclusivo para a página que será usada no arquivo de configuração. <br/><em>Somente letras e números são permitidos</em>.',
	'CHAT_PAGE_CONFIG'			=> 'Configuração da página',
	'CHAT_PAGE_CUSTOM'			=> 'Caminho personalizado',
	'CHAT_PAGE_CUSTOM_EXPLAIN'	=> 'Define o caminho completo (relativo ao phpBB) da página.<br />Por exemplo: <em>folder/file.php</em>.',
	'CHAT_PAGE_ENABLED'			=> 'Página do chat ativada',
	'CHAT_PAGE_ENABLED_EXPLAIN'	=> 'Ativar/Desativar a página principal do chat.',
	'CHAT_PAGE_FILE'			=> 'Nome do arquivo da página',
	'CHAT_PAGE_FILE_EXPLAIN'	=> 'Define o arquivo que irá carregar o chat.',
	'CHAT_PAGE_FORUMS'			=> 'Forums',
	'CHAT_PAGE_FORUMS_EXPLAIN'	=> 'Defina os fóruns onde o chat é exibido.<br /> Você pode selecionar tantos como quiser usando a tecla <em>Ctrl</em> no seu teclado.<br /><em>Se você não selecionar nenhum, o chat será exibido em todos fóruns.</em> ',
	'CHAT_PM_CONFIG'			=> 'Configuração de mensagem privada',
	'CHAT_PM_IGNORE_FLOOD'		=> 'Ignore o tempo de flood',
	'CHAT_PM_IGNORE_FLOOD_EXPLAIN'	=> 'Se ativado, o limite de flood estabelecido não será aplicado ao escrever mensagens privadas entre usuários.',
	'CHAT_PM_MAX'				=> 'Limite de mensagens privadas',
	'CHAT_PM_MAX_EXPLAIN'		=> 'Defina o número máximo de mensagens privadas que um usuário pode abrir simultaneamente.<br /><em>Defina 0 para desativar esse limite</em>.',
	'CHAT_PM_MAXAGE'			=> 'Tempo de armazenamento',
	'CHAT_PM_MAXAGE_EXPLAIN'	=> 'Defina o tempo (em dias) que as mensagens privadas serão salvas.
		<br />Mensagens que excedam esse tempo serão excluídas.
		<br /><br /><em>Valor mínimo 1, valor máximo 365</em>.',
	'CHAT_POSITION'				=> 'Posição do chat',
	'CHAT_POSITION_EXPLAIN'		=> 'Posição do chat dentro da página.',
	'CHAT_POSITION_BOTTOM'		=> 'Inferior',
	'CHAT_POSITION_TOP'			=> 'Superior',
	'CHAT_REFRESH_TIME'			=> 'Intervalo de atualização',
	'CHAT_REFRESH_TIME_EXPLAIN'	=> 'Intervalo de tempo (em segundos) que o chat aguarda para atualizar.',
	'CHAT_REMEMBER_STATUS'		=> 'Manter o status do usuário',
	'CHAT_REMEMBER_STATUS_EXPLAIN'	=> 'Se ativado, o chat mantera o status dos usuários em novas conexões, no entanto, os usuários terão o status <em><strong>Disponível</strong></em> quando se conectarem.',
	'CHAT_ROOM_AUTH'			=> 'Permissões de exibição',
	'CHAT_ROOM_AUTOPURGE'		=> 'Auto deletar',
	'CHAT_ROOM_AUTOPURGE_EXPLAIN'	=> 'Defina com que frequência todas as mensagens são removidas desta sala.',
	'CHAT_ROOM_CONFIG'			=> 'Configuração da sala',
	'CHAT_ROOM_CONNECTIONS'		=> 'Conexões',
	'CHAT_ROOM_ENABLED'			=> 'Sala ativada',	
	'CHAT_ROOM_GROUPS'			=> 'Grupos permitidos',
	'CHAT_ROOM_GROUPS_EXPLAIN'	=> 'Define grupos de usuários que podem usar esta sala.<br />Você pode selecionar vários grupos usando a tecla <em>Ctrl</em> no seu teclado.',
	'CHAT_ROOM_GUEST_FORUMS'			=> 'Fóruns ligados a esta sala',
	'CHAT_ROOM_GUEST_FORUMS_EXPLAIN'	=> 'Aqui você pode selecionar os fóruns dos quais os tópicos e mensagens serão exibidos na sala de chat principal.<br />
		Se você não selecionar nenhum, todos serão usados ​​(exceto aqueles atribuídos a outras salas).<br />
		Você pode selecionar quantas quiser usando a tecla <em>Ctrl</em> no teclado.',
	'CHAT_ROOM_LINKED_FORUMS'			=> 'Fóruns ligados a esta sala',
	'CHAT_ROOM_LINKED_FORUMS_EXPLAIN'	=> 'Esta sala será a sala padrão para os fóruns selecionados aqui, e os tópicos e posts destes fóruns serão mostrados nesta sala, em vez de na sala Geral.<br />
		Você pode selecionar quantas quiser usando a tecla <em>Ctrl</em> no teclado.',
	'CHAT_ROOM_LINKED_GROUPS'			=> 'Grupos ligados a esta sala',
	'CHAT_ROOM_LINKED_GROUPS_EXPLAIN'	=> 'Esta sala será aberta por padrão para os grupos selecionados aqui.<br />
		Você pode selecionar quantos quiser usando a tecla <em>Ctrl</em> no teclado.',
	'CHAT_ROOM_ADDED'			=> 'A sala foi criada com sucesso.',
	'CHAT_ROOM_UPDATED'			=> 'A configuração da sala foi modificada com sucesso.',
	'CHAT_ROOM_MSG_LIMIT'		=> 'Limite de mensagem',
	'CHAT_ROOM_MSG_LIMIT_EXPLAIN'	=> 'Define o número máximo de mensagens armazenadas nesta sala. Se esse limite for excedido, as mensagens mais antigas serão excluídas periodicamente.
        <br /><em>Defina 0 para desativar esse limite.</em>',
	'CHAT_ROOM_TITLE'			=> 'Título da sala',
	'CHAT_ROOM_TITLE_EXPLAIN'	=> 'Suporte a variáveis ​​de idioma.',
	'CHAT_ROOM_USERS'			=> 'Usuários permitidos',
	'CHAT_ROOM_USERS_EXPLAIN'	=> 'Define usuários que podem usar esta sala.<br /> Defina um nome de usuário por linha.',
	'CHAT_ROW_ALIGN'			=> 'Alinhamento de mensagens',
	'CHAT_ROW_ALIGN_EXPLAIN'	=> 'Define de que lado as mensagens serão exibidas no chat.<br /><em>Esta configuração é afetada se o idioma utilizado for RTL.</em>',
	'CHAT_ROW_BUBBLE'			=> 'Bolha',
	'CHAT_ROW_FORMAT'			=> 'Formato da mensagem',
	'CHAT_ROW_FORMAT_EXPLAIN'	=> 'Define o estilo visual das mensagens.',
	'CHAT_ROW_LEFT'				=> 'Mostrar à esquerda',
	'CHAT_ROW_MEOTHER'			=> 'Mostrar o usuário atual de um lado e o restante do outro',
	'CHAT_ROW_NORMAL'			=> 'Normal',
	'CHAT_ROW_RIGHT'			=> 'Mostrar à direita',
	'CHAT_ROW_ZIGZAG'			=> 'Mostrar em ZigZag',
	'CHAT_ROWS'					=> 'Mensagens no chat',
	'CHAT_ROWS_EXPLAIN'			=> 'Número máximo de mensagens que serão mostradas no contêiner de conversação.',
	'CHAT_RULES_ADD'			=> 'Adicionar regra',
	'CHAT_RULES_EDIT'			=> 'Editar regra',
	'CHAT_RULES_EXPLAIN'		=> 'Este texto será mostrado como <em>regras</em> na lista de regras do chat.',
	'CHAT_RULES_ITEM'			=> 'Regra',
	'CHAT_RULES_ITEM_EXPLAIN'	=> 'Você pode usar variáveis ​​de idioma, por exemplo <em>{L_CHAT}</em>.<br />
        <em>BBcode ou HTML é permitido.<br />
        Smilies são permitidos.</em>',
	'CHAT_RULES'			=> 'Regras',
	'CHAT_SOUND_ENABLED'		=> 'Som ativado',
	'CHAT_SHOW_NONE'			=> 'Não mostrar',
	'CHAT_SHOW_POSTS'			=> 'Todas as novas postagens',
	'CHAT_SHOW_TOPICS'			=> 'Apenas novos tópicos',
	'CHAT_TIMEOUT'				=> 'Tempo de desconexão',
	'CHAT_TIMEOUT_EXPLAIN'		=> 'Define o tempo (em minutos) de que o chat precisa considerar um usuário como "inativo" e desconecte do chat.<br /><em> Ajuste para 0 para desativar esta função</em>.',
	'CHAT_TIPS_ADD'				=> 'Adicionar dica',
	'CHAT_TIPS_EDIT'			=> 'Editar dica',
	'CHAT_TIPS_EXPLAIN'			=> 'Este texto será mostrado como pequenas dicas sobre o campo de entrada do chat.',
	'CHAT_TIPS_ITEM'			=> 'Dica',
	'CHAT_TIPS_ITEM_EXPLAIN'	=> 'Você pode usar variáveis ​​de idioma, por exemplo <em>{L_CHAT}</em>.<br />
        <em>BBcode ou HTML é permitido.<br />
        Smilies são permitidos.</em>',
	'CHAT_TIPS'			=> 'Dicas',
	'CHAT_USERS_CONFIG'			=> 'Configuração do usuário',
	
	'EACH_DAY'		=> 'Cada dia',
	'EACH_WEEK'		=> 'Cada semana',
	'EACH_MONTH'	=> 'Cada mês',
	'EACH_YEAR'		=> 'Cada ano',
	
	'ADD_ROOM'				=> 'Adicionar sala',
	'CONTENT'				=> 'Conteúdo',
	'CUSTOM_BBCODES'		=> 'BBcodes personalizados',
	'CUSTOM_ROUTE'			=> 'Rota personalizada',
	'CUSTOM_ROUTES'			=> 'Rotas personalizadas',
	'DEFAULT_BBCODES'		=> 'BBcodes padrão',
	'FORUM_ROUTES'			=> 'Rotas do fórum',
	'NO_PAGES'				=> 'Nenhuma página disponível',
	'NO_ROOM'					=> 'A sala selecionada não existe',
	'NO_TEXTS'				=> 'Nenhum texto disponível',
	'PAGE_ADD'				=> 'Adicionar página',
	'PAGE_ALIAS'			=> 'Id da página',
	'PAGE_URL'				=> 'Url da página ',
	'ROOM_TITLE'			=> 'Título da sala',
	'SELECT_PAGE'			=> 'Selecione o arquivo',
	
	'INVALID_FILE'			=> 'O arquivo não existe ou tem um formato inválido.',
	'NO_ALIAS'				=> 'O ID da página é inválido.',
	'PAGE_ALREADY_EXISTS'	=> 'A página já está em uso.',
	
	'REMOVE_ROOM_CONFIRM'	=> 'Tem certeza de que deseja deletar esta sala e todas as mensagens?',		
]);
