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
// ’ « » “ ” …
//
$lang = array_merge($lang, array(
	'ACP_HEADERLINK_CONFIG_EXPLAIN'				=> 'Configuration et aperçu des liens d’en-tête.',
	'ACP_HEADERLINK_PREVIEW'					=> 'Aperçu',
	'ACP_HEADERLINK_INFO'						=> 'Informations',
	'ACP_HEADERLINK_INSTRUCTIONS'				=> 'Vous pouvez saisir autant de liens que vous le souhaitez, chacun ayant son propre nom et sa propre cible.',

	'ACP_HEADERLINK_NOTES'						=> 'Vous pouvez modifier ou supprimer (en laissant vide le champ URL) chaque lien. Vous serez en mesure de voir les résultats ci-dessus après avoir validé la page.',
	'ACP_HEADERLINK_URL'						=> 'Liens',
	'ACP_HEADERLINK_URL_EXPLAIN'				=> 'URL complète du lien, ex. https://www.phpbb.com <br>Laisser ce champ vide supprimera le lien.',
	'ACP_HEADERLINK_NAME'						=> 'Nom du lien',
	'ACP_HEADERLINK_NAME_EXPLAIN'				=> 'Intitulé du lien',
	'ACP_HEADERLINK_HOVER'						=> 'Survol',
	'ACP_HEADERLINK_HOVER_EXPLAIN'				=> 'Texte informatif affiché dans une infobulle au survol du lien (facultatif)',
	'ACP_HEADERLINK_ICON'						=> 'Icône Font Awesome',
	'ACP_HEADERLINK_ICON_EXPLAIN'				=> 'Afficher une icône devant le lien',
	'ACP_HEADERLINK_ICON_CODE'					=> 'Code Icône FA',
	'ACP_HEADERLINK_ICON_CODE_EXPLAIN'			=> 'Les codes des icônes FA peuvent être obtenus en cliquant sur <a href="https://fontawesome.com/v4/icons" target="_blank">ce lien</a>.<br>Saisissez le code sous la forme suivante : ex. fa-credit-card',
	'ACP_HEADERLINK_ICON_COLOUR'				=> 'Couleur de l’icône',
	'ACP_HEADERLINK_TEXT_SHADOW'				=> 'Ombre portée du texte ?',
	'ACP_HEADERLINK_TEXT_SHADOW_COLOUR'			=> 'Saisissez la couleur de l’ombre portée',
	'ACP_HEADERLINK_COLOUR'						=> 'Couleurs',
	'ACP_HEADERLINK_COLOUR_EXPLAIN'				=> 'Les couleurs des boutons, du texte et des ombres doivent être renseignées dans le format hexadécimal, par exemple « #FF0000 », ou avec le mot-clé en anglais de la couleur, par exemple « red ».',
	'ACP_HEADERLINK_COLOUR_FINDER'				=> 'Sélecteur de couleurs hexadécimales',
	'ACP_HEADERLINK_COLOUR_FINDER_EXPLAIN'		=> 'Cliquez dans le champ pour sélectionner la couleur, puis copiez le code obtenu dans le champ correspondant.',
	
	'ACP_HEADERLINK_ENABLE'						=> 'Activer les liens d’en-tête',
	'ACP_HEADERLINK_HOVER_COLOUR'				=> 'Couleur au survol.',
	'ACP_HEADERLINK_HOVER_COLOUR_EXPLAIN'		=> 'Quelle couleur voulez-vous afficher au survol du bouton ?',
	'ACP_HEADERLINK_NAVBAR'						=> 'Position de la barre de liens de l’en-tête',

	'ACP_HEADERLINK_SWITCH_IN_HEADER'			=> 'Dans l’en-tête',
	'ACP_HEADERLINK_SWITCH_UNDER_HEADER'		=> 'Sous l’en-tête',
	'ACP_HEADERLINK_SWITCH_IN_NAVBAR'			=> 'Dans la barre de navigation',

	'ACP_HEADERLINK_HIDE'						=> 'Masquer',
	'ACP_HEADERLINK_SHOW'						=> 'Afficher',

	'ACP_HEADERLINK_URL'						=> 'URL du lien',
	'ACP_HEADERLINK_NAME'						=> 'Nom du lien',
	'ACP_HEADERLINK_HOVER'						=> 'Description du lien',
	'ACP_HEADERLINK_TARGET'						=> 'Ouvrir le lien dans',
	'ACP_HEADERLINK_SAME'						=> 'la même fenêtre',
	'ACP_HEADERLINK_NEW'						=> 'un nouvel onglet',

	'ACP_HEADERLINK_PERMISSION'					=> 'Qui peut voir le lien ?',
	'ACP_HEADERLINK_DISABLE'					=> 'Désactiver ce lien',
	'ACP_HEADERLINK_GUEST'						=> 'Invités uniquement',
	'ACP_HEADERLINK_MEMBER'						=> 'Membres uniquement',
	'ACP_HEADERLINK_ACTIVE'						=> 'Tout le monde',
	'ACP_HEADERLINK_ADMIN'						=> 'Administrateur uniquement',
	'ACP_HEADERLINK_MOD'						=> 'Modérateurs uniquement',

	'ACP_HEADERLINK_BUTTON_COLOUR'				=> 'Couleur de fond du lien',
	'ACP_HEADERLINK_TEXT_COLOUR'				=> 'Couleur du texte',

	'ACP_HEADERLINK_MORE_LINKS'					=> 'Ajouter un nouveau lien',

	'HEADERLINK_CONFIG'							=> 'Configuration des liens d’en-tête',
	'HEADERLINK_SAVED'							=> 'Paramètres des liens d’en-tête sauvegardés',

	'HEADERLINK_MENU'							=> 'Liens',
	'HEADERLINK_MENU_HOVER'						=> 'Afficher les liens',

	'HEADERLINK_DEFAULT_TITLE'					=> 'Nouveau lien',
));
