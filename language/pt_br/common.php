<?php
/**
*
* @package phpBB Extension - Partner Page
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
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
	'DM_PARTNERS'			=> 'Partners',
	'PARTNERS'				=> 'Parceiros',
	'DM_PARTNERS_EXPLAIN'	=> 'Veja nossos parceiros',
	'DMP_ADD'				=> 'Adicionar novo parceiro',
	'DMP_ADDED'				=> 'Sua página foi adicionada com sucesso. O administrador verificará sua solicitação e a ativará, se tudo estiver bem.<br />',
	'DMP_ADD_BACK_LINK'		=> '<br />Clique %saqui%s para reiniciar a sua entrada.',
	'DMP_BACK_LINK'			=> 'Clique %saqui%s Para retornar à página de parceiros.',
	'DMP_COUNT'				=> ' Clique',
	'DMP_COUNTS'			=> ' Cliques',
	'DMP_DESC'				=> 'Descrição do seu site (*) ',
	'DMP_DESC_DESC'			=> 'Por favor, insira uma descrição detalhada da sua página. Você pode usar BBCodes e smilies',
	'DMP_DESC_FRONT'		=> 'Aqui você pode encontrar nossos parceiros',
	'DMP_EMPTY_TEXT'		=> 'Sem descrição',
	'DMP_GO_ADD'			=> 'Adicione seu site',
	'DMP_IMG'				=> 'Logo do seu site',
	'DMP_IMG_DESC'			=> 'Digite aqui o URL do logotipo do seu site (<strong>incluindo http://</strong>).<br />O URL pode não exceder o número máximo de 255 caracteres!<br />A largura da imagem não deve ser superior a 400px.',
	'DMP_NEED'				=> 'Campos com um (*) precisa ser preenchido!',
	'DMP_NEED_DATA'			=> 'Você precisa inserir uma <strong>URL</strong> e um <strong>título</strong>, se você quiser adicionar seu site.',
	'DMP_NEED_SITE'			=> 'Você precisa inserir um <strong>título</strong>, se você quiser adicionar seu site.',
	'DMP_NEED_URL'			=> 'Você precisa inserir um <strong>URL</strong>, se você quiser adicionar seu site.',
	'DMP_NEW_ENTRY'			=> 'Você tem pedidos de novos parceiros. Por favor, vá para o seu ACP e verifique-os!',
	'DMP_NO_ENTRY'			=> 'Nenhum parceiro para %s',
	'DMP_SITE'				=> 'Nome do seu site (*) ',
	'DMP_SITE_DESC'			=> 'Digite aqui o nome do seu site. Este nome será mostrado como título.',
	'DMP_TITLE_ADD'			=> 'Adicione seu site',
	'DMP_TITLE_ADD_DESC'	=> 'Aqui você pode adicionar sua própria página, se você quiser ser listado como nosso parceiro.<br /> Por favor, preencha o formulário abaixo e verifique sua entrada com cuidado! Você não pode editar a entrada depois.',
	'DMP_URL'				=> 'URL para o seu site (*) ',
	'DMP_URL_DESC'			=> 'Digite o URL no seu site (<strong>incluindo http: //</strong>). <br /> O URL não pode exceder o número máximo de 255 caracteres!',
	'DMP_VIEW_NOT_ALLOWED'	=> 'Desculpe, mas você não tem as permissões para visualizar nossa página de Parceiros!',
	'DMP_COPYRIGHT'			=> '&copy; 2008, 2009 Die Muellers Dot Org',
	'DMP_COPYRIGHT_TITLE'	=> 'DM Partners',
	'DMP_COPYRIGHT_BASED'	=> 'Baseado em',
	'DMP_COPYRIGHT2'		=> 'phpBB3 Partners Mod by djchrisnet',
	'DMP_COPYRIGHT_TITLE2'	=> 'phpBB3 Partners',
	'DMP_COPYRIGHT_DMZX'	=> '&copy; 2015 dmzx-web.net',
	'DMP_TITLE_DMZX'		=> 'dmzx-web.net',
));
