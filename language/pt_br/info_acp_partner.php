<?php
/**
*
* @package phpBB Extension - Partner Page
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_DMP_CONFIG'			=> 'Configuração',
	'ACP_DMP_PARTNERS'			=> 'Página de Parceiros',
	'ACP_DMP_PARTNERS_DESC'		=> 'Aqui você pode gerenciar seus parceiros',
	'ACP_DMP_ADDED'				=> 'O parceiro foi adicionado com sucesso',
	'ACP_DMP_AKTIV'				=> 'Parceiro ativado',
	'ACP_DMP_AKTIV_DESC'		=> 'Se você selecionar, seu parceiro será exibido na página de Parceiros',
	'ACP_DMP_BB_SET'			=> 'Ativar BBCodes',
	'ACP_DMP_COUNT'				=> ' Clique',
	'ACP_DMP_COUNTS'			=> ' Cliques',
	'ACP_DMP_DELETED'			=> 'O Parceiro foi deletado com sucesso.',
	'ACP_DMP_DESC'				=> 'Descrição do parceiro',
	'ACP_DMP_DESC_DESC'			=> 'Digite aqui uma descrição detalhada do seu parceiro. Se ativado, você pode usar BBCodes e smilies nas descrições dos parceiros.',
	'ACP_DMP_DESC_FRONT'		=> 'Aqui você pode encontrar todos os parceiros do seu fórum',
	'ACP_DMP_EMPTY_TEXT'		=> 'Sem descrição',
	'ACP_DMP_IMG'				=> 'Imagem de logotipo do seu parceiro',
	'ACP_DMP_IMG_DESC'			=> 'Digite aqui o URL da imagem do logotipo do seu parceiro (incluindo http: //) ',
	'ACP_DMP_KLICKS'			=> 'Cliques de URL',
	'ACP_DMP_KLICKS_AKTIV'		=> 'Será contado',
	'ACP_DMP_NEED_DATA'			=> 'Você deve inserir um <strong>URL</strong> e um <strong>título</strong>, se você quiser adicionar um parceiro',
	'ACP_DMP_NEED_SITE'			=> 'Você deve inserir um <strong>título</strong>, se quiser adicionar um parceiro',
	'ACP_DMP_NEED_URL'			=> 'Você deve inserir um <strong>URL</strong>, se quiser adicionar um parceiro',
	'ACP_DMP_NO_ENTRY'			=> 'Não há parceiros listados',
	'ACP_DMP_REALY_DELETE'		=> 'Tem certeza de que gostaria de deletar esse parceiro?',
	'ACP_DMP_SAVE_KLICK'		=> 'Ativar contador de cliques',
	'ACP_DMP_SAVE_KLICK_DESC'	=> 'Se esta opção for selecionada, o contador de clique será ativado e será exibido. Você pode inserir um valor de início no arquivo ao lado',
	'ACP_DMP_SETTING'			=> 'Configurações de texto',
	'ACP_DMP_SETTING_DESC'		=> 'Selecione, se você gosta de usar BBCodes, smilies e / ou links de URL',
	'ACP_DMP_SITE'				=> 'Nome do site do seu parceiro',
	'ACP_DMP_SITE_DESC'			=> 'Digite aqui o nome ou o nome do site do seu parceiro. Isso será mostrado como título clicável',
	'ACP_DMP_SMILY_SET'			=> 'Ativar smilies',
	'ACP_DMP_TITLE_ADD'			=> 'Adicionar parceiro',
	'ACP_DMP_TITLE_EDIT'		=> 'Editar parceiro',
	'ACP_DMP_UPDATED'			=> 'O parceiro foi modificado com sucesso',
	'ACP_DMP_URL'				=> 'URL',
	'ACP_DMP_URL_DESC'			=> 'Digite aqui a URL para o site do seu parceiro (incluindo http: //)',
	'ACP_DMP_URL_SET'			=> 'Uso de URL ativo',
	'ACP_DMP_EDIT_EXPLAIN'		=> 'Aqui você pode editar um parceiro existente',
	'ACP_DMP_ADD_EXPLAIN'		=> 'Aqui você pode adicionar um novo parceiro',

	// Log entires
	'LOG_DMP_DELETE'			=> 'Parceiro deletado <strong># %s</strong>',
	'LOG_DMP_SAVE'				=> 'Parceiro editado <strong>%s</strong>',
	'LOG_DMP_SAVE_NEW'			=> 'Novo parceiro adicionado<strong>%s</strong>',

	// Permissions
	'ACL_U_DM_PARTNERS_ADD'		=> 'Pode adicionar parceiros à página de Parceiros',
	'ACL_U_DM_PARTNERS_VIEW'	=> 'Pode ver a página de parceiros',
));
