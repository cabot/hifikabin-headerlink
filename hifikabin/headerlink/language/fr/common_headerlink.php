<?php
/**
*
* @package phpBB Extension - Header link
* @copyright (c) 2015 - HiFiKabin
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/


if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// ’ « » “ ” …
//
$lang = array_merge($lang, [
	'HEADERLINK_NEW_TAB'			=> '(Ouvre un nouvel onglet)',
	'HEADERLINK_REVEAL'				=> 'Ouvre et ferme la liste de liens',
	'HEADERLINK_SKIP_TO_CONTENT'	=> 'Aller au contenu',
	'HEADERLINK_SKIP_TO_MENU'		=> 'Aller au menu',
	'HEADERLINK_SKIP_TO_SEARCH'		=> 'Aller à la recherche',
]);
