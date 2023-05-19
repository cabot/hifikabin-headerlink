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
	'ACP_HEADERLINK_ACTIVE'							=> 'Tout le monde',
	'ACP_HEADERLINK_ADMIN'							=> 'Administrateurs uniquement',
	'ACP_HEADERLINK_ALIGN'							=> 'Alignement des liens',
	'ACP_HEADERLINK_ALIGN_CENTER'					=> 'Au centre',
	'ACP_HEADERLINK_ALIGN_END'						=> 'À droite',
	'ACP_HEADERLINK_ALIGN_START'					=> 'À gauche',
	'ACP_HEADERLINK_BUTTON_COLOUR'					=> 'Couleur de fond du lien',
	'ACP_HEADERLINK_CONFIG_EXPLAIN'					=> 'Configuration et aperçu des liens d’en-tête.',
	'ACP_HEADERLINK_DEFAULT_TITLE'					=> 'Nouveau lien',
	'ACP_HEADERLINK_DISABLE'						=> 'Désactiver ce lien',
	'ACP_HEADERLINK_ENABLE'							=> 'Activer les liens d’en-tête',
	'ACP_HEADERLINK_GUEST'							=> 'Invités uniquement',
	'ACP_HEADERLINK_HOVER'							=> 'Description du lien',
	'ACP_HEADERLINK_HOVER_COLOUR'					=> 'Couleur de fond au survol',
	'ACP_HEADERLINK_HOVER_COLOUR_EXPLAIN'			=> 'Couleur de fond des liens au survol.<br>Entrez la valeur « transparent » pour utiliser la même couleur de fond que celle des liens.',
	'ACP_HEADERLINK_HOVER_EXPLAIN'					=> 'Texte informatif affiché dans une infobulle lors du survol du lien (facultatif).',
	'ACP_HEADERLINK_INFO'							=> 'Informations',
	'ACP_HEADERLINK_ICON'							=> 'Icône Font Awesome',
	'ACP_HEADERLINK_ICON_CODE'						=> 'Code de l’icône FA',
	'ACP_HEADERLINK_ICON_CODE_EXPLAIN'				=> 'Saisissez le code de l’icône (ex. fa-comments-o).<br>Les codes des icônes FA peuvent être obtenus en cliquant sur <a href="https://fontawesome.com/v4/icons" target="_blank">ce lien</a>.',
	'ACP_HEADERLINK_ICON_COLOUR'					=> 'Couleur de l’icône',
	'ACP_HEADERLINK_ICON_EXPLAIN'					=> 'Affichez une icône devant le lien',
	'ACP_HEADERLINK_INSTRUCTIONS'					=> 'Vous pouvez saisir autant de liens que vous le souhaitez, chacun ayant son propre nom et sa propre cible.',
	'ACP_HEADERLINK_LINKS'							=> 'Liens',
	'ACP_HEADERLINK_MEMBER'							=> 'Membres uniquement',
	'ACP_HEADERLINK_MOD'							=> 'Modérateurs uniquement',
	'ACP_HEADERLINK_MORE_LINKS'						=> 'Ajouter un nouveau lien',
	'ACP_HEADERLINK_NAME'							=> 'Nom du lien',
	'ACP_HEADERLINK_NAME_EXPLAIN'					=> 'Entrez l’intitulé du lien',
	'ACP_HEADERLINK_NAVBAR'							=> 'Position de la barre de liens',
	'ACP_HEADERLINK_NEW'							=> 'Un nouvel onglet',
	'ACP_HEADERLINK_PERMISSION'						=> 'Affichage du lien',
	'ACP_HEADERLINK_PREVIEW'						=> 'Aperçu',
	'ACP_HEADERLINK_PREVIEW_EXPLAIN'				=> 'Seuls les liens déjà validés seront affichés ici.',
	'ACP_HEADERLINK_RESPONSIVE'						=> 'Comportement adaptatif',
	'ACP_HEADERLINK_RESPONSIVE_EXPLAIN'				=> ' - Pas de liste déroulante : les liens seront tous affichés quelle que soit la largeur du forum, sur plusieurs lignes si nécessaire.<br> - Liste déroulante avec largeur prédéfinie : les liens seront tous placés dans une liste déroulante si la largeur de l’écran est inférieure à une largeur prédéfinie.<br> - Liste déroulante avec largeur automatique : chaque lien qui ne rentre pas dans la largeur sera ajouté à une liste déroulante. Cette option peut occasionner un bref affichage indésirable lors du changement de page car elle nécessite un recalcul de la largeur.',
	'ACP_HEADERLINK_RESPONSIVE_AUTO_CHOICE'			=> 'Liste déroulante avec largeur automatique',
	'ACP_HEADERLINK_RESPONSIVE_NATURAL_CHOICE'		=> 'Pas de liste déroulante',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_CHOICE'		=> 'Liste déroulante avec largeur prédéfinie',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_VAL'			=> 'Largeur maximale en pixels',
	'ACP_HEADERLINK_RESPONSIVE_WIDTH_VAL_EXPLAIN'	=> 'Largeur minimale : 360. Largeur par défaut : 700',
	'ACP_HEADERLINK_SAME'							=> 'La même fenêtre',
	'ACP_HEADERLINK_SAVED'							=> 'Paramètres des liens d’en-tête sauvegardés',
	'ACP_HEADERLINK_SWITCH_ABOVE_BOARD'				=> 'En haut du forum',
	'ACP_HEADERLINK_SWITCH_IN_HEADER'				=> 'Dans l’en-tête',
	'ACP_HEADERLINK_SWITCH_IN_NAVBAR'				=> 'Dans la barre de navigation',
	'ACP_HEADERLINK_SWITCH_UNDER_HEADER'			=> 'Sous l’en-tête',
	'ACP_HEADERLINK_TARGET'							=> 'Ouvrir le lien dans',
	'ACP_HEADERLINK_TEXT_COLOUR'					=> 'Couleur du texte',
	'ACP_HEADERLINK_TEXT_SHADOW'					=> 'Ombre portée du texte',
	'ACP_HEADERLINK_TEXT_SHADOW_COLOUR'				=> 'Saisissez la couleur de l’ombre portée.',
	'ACP_HEADERLINK_URL'							=> 'URL du lien',
	'ACP_HEADERLINK_URL_EXPLAIN'					=> 'Saisissez l’URL complète du lien, ex. https://www.phpbb.com<br><strong>Laissez ce champ vide pour supprimer le lien.</strong>',
]);
