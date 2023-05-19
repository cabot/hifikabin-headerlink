<?php
/**
 *
 * @package phpBB Extension - Header Link
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
	'ACP_HEADERLINK_ACTIVE'							=> 'Everyone',
	'ACP_HEADERLINK_ADMIN'							=> 'Administrators only',
	'ACP_HEADERLINK_ALIGN'							=> 'Links alignment',
	'ACP_HEADERLINK_ALIGN_CENTER'					=> 'Center',
	'ACP_HEADERLINK_ALIGN_END'						=> 'Right',
	'ACP_HEADERLINK_ALIGN_START'					=> 'Left',
	'ACP_HEADERLINK_BUTTON_COLOUR'					=> 'Link background color',
	'ACP_HEADERLINK_CONFIG_EXPLAIN'					=> 'Header Link Configuration and Preview.',
	'ACP_HEADERLINK_DEFAULT_TITLE'					=> 'New link',
	'ACP_HEADERLINK_DISABLE'						=> 'Disable this Link',
	'ACP_HEADERLINK_ENABLE'							=> 'Enable Header Links',
	'ACP_HEADERLINK_GUEST'							=> 'Guests only',
	'ACP_HEADERLINK_HOVER'							=> 'Link description',
	'ACP_HEADERLINK_HOVER_COLOUR'					=> 'Background colour on hover',
	'ACP_HEADERLINK_HOVER_COLOUR_EXPLAIN'			=> 'Background colour of links on hover.<br>Enter the value “transparent” to use the same background colour as the links.',
	'ACP_HEADERLINK_HOVER_EXPLAIN'					=> 'Informative text displayed in a tooltip when hovering the link (Optional).',
	'ACP_HEADERLINK_INFO'							=> 'Informations',
	'ACP_HEADERLINK_ICON'							=> 'Font Awesome icon',
	'ACP_HEADERLINK_ICON_CODE'						=> 'FA icon code',
	'ACP_HEADERLINK_ICON_CODE_EXPLAIN'				=> 'Enter the code of the icon (e.g. fa-comments-o).<br>FA icon codes can be found by clicking <a href="https://fontawesome.com/v4/icons" target="_blank">this link</a>.',
	'ACP_HEADERLINK_ICON_COLOUR'					=> 'Icon colour',
	'ACP_HEADERLINK_ICON_EXPLAIN'					=> 'Display an icon in front of the link.',
	'ACP_HEADERLINK_INSTRUCTIONS'					=> 'You can enter as many links as you would like each with its own name and target.',
	'ACP_HEADERLINK_LINKS'							=> 'Links',
	'ACP_HEADERLINK_MEMBER'							=> 'Members only',
	'ACP_HEADERLINK_MOD'							=> 'Moderators only',
	'ACP_HEADERLINK_MORE_LINKS'						=> 'Add another link',
	'ACP_HEADERLINK_NAVBAR'							=> 'Header Link bar position',
	'ACP_HEADERLINK_NAME'							=> 'Link name',
	'ACP_HEADERLINK_NAME_EXPLAIN'					=> 'Enter the link name',
	'ACP_HEADERLINK_NEW'							=> 'New tab',
	'ACP_HEADERLINK_PERMISSION'						=> 'Display of the link',
	'ACP_HEADERLINK_PREVIEW'						=> 'Preview',
	'ACP_HEADERLINK_PREVIEW_EXPLAIN'				=> 'Only links already validated will be displayed here.',
	'ACP_HEADERLINK_RESPONSIVE'						=> 'Responsive behaviour',
	'ACP_HEADERLINK_RESPONSIVE_EXPLAIN'				=> ' - No drop-down list: the links will all be displayed regardless of the width of the forum, on several lines if needed.<br> - Drop-down list with predefined width: the links will all be placed in a drop-down list if the screen width is less than a predefined width.<br> - Drop-down list with automatic width: links will be individually placed in a drop-down list according to the width of the screen. This option may cause an unwanted brief display when changing pages as it requires a recalculation of the width.',
	'ACP_HEADERLINK_RESPONSIVE_AUTO_CHOICE'			=> 'Drop-down list with automatic width',
	'ACP_HEADERLINK_RESPONSIVE_NATURAL_CHOICE'		=> 'No drop-down list',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_CHOICE'		=> 'Drop-down list with predefined width',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_VAL'			=> 'Maximum width in pixels',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_VAL_EXPLAIN'	=> 'Minimum width: 360. Default width: 700',
	'ACP_HEADERLINK_SAME'							=> 'Same tab',
	'ACP_HEADERLINK_SAVED'							=> 'Header link settings saved',
	'ACP_HEADERLINK_SWITCH_ABOVE_BOARD'				=> 'Top of the board',
	'ACP_HEADERLINK_SWITCH_IN_HEADER'				=> 'In header',
	'ACP_HEADERLINK_SWITCH_IN_NAVBAR'				=> 'In navbar',
	'ACP_HEADERLINK_SWITCH_UNDER_HEADER'			=> 'Under header',
	'ACP_HEADERLINK_TARGET'							=> 'Open link in',
	'ACP_HEADERLINK_TEXT_COLOUR'					=> 'Text colour',
	'ACP_HEADERLINK_TEXT_SHADOW'					=> 'Text shadow',
	'ACP_HEADERLINK_TEXT_SHADOW_COLOUR'				=> 'Enter drop shadow colour',
	'ACP_HEADERLINK_URL'							=> 'Link URL',
	'ACP_HEADERLINK_URL_EXPLAIN'					=> 'Enter the full URL of the link (e.g. https://www.phpbb.com)<br><strong>Leave this field blank to remove the link.</strong>',
]);
