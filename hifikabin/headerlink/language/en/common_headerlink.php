<?php
/**
*
* @package phpBB Extension - Header link
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ACP_HEADERLINK_CONFIG_EXPLAIN'				=> 'Header Link Configuration and Preview.',
	'ACP_HEADERLINK_PREVIEW'					=> 'Preview',
	'ACP_HEADERLINK_INFO'						=> 'Informations',
	'ACP_HEADERLINK_INSTRUCTIONS'				=> 'You can enter as many links as you would like each with its own name and target.',

	'ACP_HEADERLINK_NOTES'						=> 'You can edit or delete (by leaving the URL field empty) any link. You will be able to see the results above after you submit the page.',
	'ACP_HEADERLINK_URL'						=> 'Links',
	'ACP_HEADERLINK_URL_EXPLAIN'				=> 'All URL\'s must be entered in full including http:// </br>Leaving this field empty will delete the link.',
	'ACP_HEADERLINK_NAME'						=> 'Link Name',
	'ACP_HEADERLINK_NAME_EXPLAIN'				=> 'Enter the link name',
	'ACP_HEADERLINK_HOVER'						=> 'Link',
	'ACP_HEADERLINK_HOVER_EXPLAIN'				=> 'Informative text displayed in a tooltip when hovering the link (Optional)',
	'ACP_HEADERLINK_ICON'						=> 'Font Awesome Icon',
	'ACP_HEADERLINK_ICON_EXPLAIN'				=> 'Display an icon in front of the link.',
	'ACP_HEADERLINK_ICON_CODE'					=> 'FA Icon Code',
	'ACP_HEADERLINK_ICON_CODE_EXPLAIN'			=> 'FA Icon codes can be found by clicking <a href="https://fontawesome.com/v4/icons" target="_blank">this link</a>.<br>Enter the code in the following form: eg fa-credit-card',
	'ACP_HEADERLINK_ICON_COLOUR'				=> 'Enter Icon Colour',
	'ACP_HEADERLINK_TEXT_SHADOW'				=> 'Text Drop Shadow?',
	'ACP_HEADERLINK_TEXT_SHADOW_COLOUR'			=> 'Enter Drop Shadow Colour',
	'ACP_HEADERLINK_COLOUR'						=> 'Colours',
	'ACP_HEADERLINK_COLOUR_EXPLAIN'				=> 'Button, text and shadow colours need to be entered in either the hex color format. eg. #FF0000 0r in the colour name eg red',
	'ACP_HEADERLINK_COLOUR_FINDER'				=> 'Hex Color Finder.',
	'ACP_HEADERLINK_COLOUR_FINDER_EXPLAIN'		=> 'Click the box to select the colour, then copy that code into the relevant box.',
	
	'ACP_HEADERLINK_ENABLE'						=> 'Enable Header Links.',
	'ACP_HEADERLINK_HOVER_COLOUR'				=> '“On Hover” Colour.',
	'ACP_HEADERLINK_HOVER_COLOUR_EXPLAIN'		=> 'What Colour do you want the show when the button is hovered over?',
	'ACP_HEADERLINK_NAVBAR'						=> 'Header Link Bar Position',

	'ACP_HEADERLINK_SWITCH_IN_HEADER'			=> 'In Header.',
	'ACP_HEADERLINK_SWITCH_UNDER_HEADER'		=> 'Under Header',
	'ACP_HEADERLINK_SWITCH_IN_NAVBAR'			=> 'In Navbar.',

	'ACP_HEADERLINK_HIDE'						=> 'Hide',
	'ACP_HEADERLINK_SHOW'						=> 'Show',

	'ACP_HEADERLINK_URL'						=> 'Link URL',
	'ACP_HEADERLINK_NAME'						=> 'Link Name',
	'ACP_HEADERLINK_HOVER'						=> 'Link description',
	'ACP_HEADERLINK_TARGET'						=> 'Open link in',
	'ACP_HEADERLINK_SAME'						=> 'Same Tab',
	'ACP_HEADERLINK_NEW'						=> 'New tab',

	'ACP_HEADERLINK_PERMISSION'					=> 'Who do you wish to see the link?',
	'ACP_HEADERLINK_DISABLE'					=> 'Disable this Link?',
	'ACP_HEADERLINK_GUEST'						=> 'Activate this Link for Guests Only?',
	'ACP_HEADERLINK_MEMBER'						=> 'Activate this Link for Members Only?',
	'ACP_HEADERLINK_ACTIVE'						=> 'Activate this Link for Everyone?',
	'ACP_HEADERLINK_ADMIN'						=> 'Activate this Link for Administrators Only?',
	'ACP_HEADERLINK_MOD'						=> 'Activate this Link for Moderators Only?',

	'ACP_HEADERLINK_BUTTON_COLOUR'				=> 'Enter Button Colour.',
	'ACP_HEADERLINK_TEXT_COLOUR'				=> 'Enter Text Colour.',

	'ACP_HEADERLINK_MORE_LINKS'					=> 'Add Another Link',

	'HEADERLINK_CONFIG'							=> 'Header Link Settings',
	'HEADERLINK_SAVED'							=> 'Header Link settings saved',

	'HEADERLINK_MENU'							=> 'Links',
	'HEADERLINK_MENU_HOVER'						=> 'Show Links',

	'HEADERLINK_DEFAULT_TITLE'					=> 'New link',
));
