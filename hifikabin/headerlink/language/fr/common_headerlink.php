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
	'ACP_HEADERLINK_ACTIVE'						=> 'Tout le monde',
	'ACP_HEADERLINK_ADMIN'						=> 'Administrateurs uniquement',
	'ACP_HEADERLINK_ALIGN'						=> 'Alignement des liens',
	'ACP_HEADERLINK_ALIGN_CENTER'				=> 'Au centre',
	'ACP_HEADERLINK_ALIGN_END'					=> 'À droite',
	'ACP_HEADERLINK_ALIGN_START'				=> 'À gauche',
	'ACP_HEADERLINK_BUTTON_COLOUR'				=> 'Couleur de fond du lien',
	'ACP_HEADERLINK_CONFIG_EXPLAIN'				=> 'Configuration et aperçu des liens d’en-tête.',
	'ACP_HEADERLINK_DEFAULT_TITLE'				=> 'Nouveau lien',
	'ACP_HEADERLINK_DISABLE'					=> 'Désactiver ce lien',
	'ACP_HEADERLINK_ENABLE'						=> 'Activer les liens d’en-tête',
	'ACP_HEADERLINK_GUEST'						=> 'Invités uniquement',
	'ACP_HEADERLINK_HOVER'						=> 'Description du lien',
	'ACP_HEADERLINK_HOVER_COLOUR'				=> 'Couleur de fond au survol',
	'ACP_HEADERLINK_HOVER_COLOUR_EXPLAIN'		=> 'Couleur de fond des liens au survol.<br>Entrez la valeur « transparent » pour utiliser la même couleur de fond que celle des liens.',
	'ACP_HEADERLINK_HOVER_EXPLAIN'				=> 'Texte informatif affiché dans une infobulle lors du survol du lien (facultatif).',
	'ACP_HEADERLINK_NAVBAR'						=> 'Position de la barre de liens de l’en-tête',
	'ACP_HEADERLINK_INFO'						=> 'Informations',
	'ACP_HEADERLINK_ICON'						=> 'Icône Font Awesome',
	'ACP_HEADERLINK_ICON_CODE'					=> 'Code de l’icône FA',
	'ACP_HEADERLINK_ICON_CODE_EXPLAIN'			=> 'Saisissez le code de l’icône (ex. fa-comments-o).<br>Les codes des icônes FA peuvent être obtenus en cliquant sur <a href="https://fontawesome.com/v4/icons" target="_blank">ce lien</a>.',
	'ACP_HEADERLINK_ICON_COLOUR'				=> 'Couleur de l’icône',
	'ACP_HEADERLINK_ICON_EXPLAIN'				=> 'Affichez une icône devant le lien',
	'ACP_HEADERLINK_INSTRUCTIONS'				=> 'Vous pouvez saisir autant de liens que vous le souhaitez, chacun ayant son propre nom et sa propre cible.',
	'ACP_HEADERLINK_LINKS'						=> 'Liens',
	'ACP_HEADERLINK_MEMBER'						=> 'Membres uniquement',
	'ACP_HEADERLINK_MOD'						=> 'Modérateurs uniquement',
	'ACP_HEADERLINK_MORE_LINKS'					=> 'Ajouter un nouveau lien',
	'ACP_HEADERLINK_NAME'						=> 'Nom du lien',
	'ACP_HEADERLINK_NAME_EXPLAIN'				=> 'Entrez l’intitulé du lien',
	'ACP_HEADERLINK_NEW'						=> 'Un nouvel onglet',
	'ACP_HEADERLINK_NOTES'						=> 'Vous pouvez modifier ou supprimer (en laissant vide le champ URL) chaque lien. Vous serez en mesure de voir les résultats ci-dessus après avoir validé la page.',
	'ACP_HEADERLINK_PERMISSION'					=> 'Affichage du lien',
	'ACP_HEADERLINK_PREVIEW'					=> 'Aperçu',
	'ACP_HEADERLINK_PREVIEW_EXPLAIN'			=> 'Seuls les liens déjà validés seront affichés ici.',
	'ACP_HEADERLINK_SAME'						=> 'La même fenêtre',
	'ACP_HEADERLINK_SAVED'						=> 'Paramètres des liens d’en-tête sauvegardés',
	'ACP_HEADERLINK_SWITCH_IN_HEADER'			=> 'Dans l’en-tête',
	'ACP_HEADERLINK_SWITCH_IN_NAVBAR'			=> 'Dans la barre de navigation',
	'ACP_HEADERLINK_SWITCH_UNDER_HEADER'		=> 'Sous l’en-tête',
	'ACP_HEADERLINK_TARGET'						=> 'Ouvrir le lien dans',
	'ACP_HEADERLINK_TEXT_COLOUR'				=> 'Couleur du texte',
	'ACP_HEADERLINK_TEXT_SHADOW'				=> 'Ombre portée du texte',
	'ACP_HEADERLINK_TEXT_SHADOW_COLOUR'			=> 'Saisissez la couleur de l’ombre portée.',
	'ACP_HEADERLINK_URL'						=> 'URL du lien',
	'ACP_HEADERLINK_URL_EXPLAIN'				=> 'Saisissez l’URL complète du lien, ex. https://www.phpbb.com<br><strong>Laissez ce champ vide pour supprimer le lien.</strong>',
));
