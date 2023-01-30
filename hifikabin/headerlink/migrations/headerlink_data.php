<?php
/**
*
* @package phpBB Extension - Header Link
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\headerlink\migrations;

class headerlink_data extends \phpbb\db\migration\migration
{

	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
			// ADD NEW TABLE STRUCTURE
				$this->table_prefix . 'headerlink'	=> array(
					'COLUMNS' => array(
					'headerlink_id'						=> array('UINT', null, 'auto_increment'),
					'headerlink_url'					=> array('VCHAR', ''),
					'headerlink_name'					=> array('VCHAR', ''),
					'headerlink_hover'					=> array('VCHAR', ''),
					'headerlink_icon'					=> array('VCHAR', ''),
					'headerlink_icon_colour'			=> array('VCHAR', ''),
					'headerlink_icon_sw'				=> array('BOOL', 0),
					'headerlink_permission'				=> array('VCHAR', ''),
					'headerlink_target'					=> array('VCHAR', ''),
					'headerlink_button_colour'			=> array('VCHAR', ''),
					'headerlink_text_colour'			=> array('VCHAR', ''),
					'headerlink_text_shadow'			=> array('VCHAR', ''),
					'headerlink_text_shadow_colour'		=> array('VCHAR', ''),
					),
					'PRIMARY_KEY'	=> 'headerlink_id',
				),
			),
		);
	}

	public function update_data()
	{
		// ADD CONFIG 
		return array(
			array('config.add', array('headerlink_enable', '0')),
			array('config.add', array('headerlink_hover_colour', '#0c93d7')),
			array('config.add', array('headerlink_navbar', '0')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_HEADERLINK_TITLE')),
			array('module.add', array('acp', 'ACP_HEADERLINK_TITLE', array(
				'module_basename'	=> '\hifikabin\headerlink\acp\main_module',
				'module_langname'	=> 'ACP_HEADERLINK',
				'module_mode'		=> 'overview',
				'module_auth'		=> 'ext_hifikabin/headerlink && acl_a_board',
			))),
		);
	}

	/**
	* Drop the Header Link table schema from the database
	*
	* @return array Array of table schema
	* @access public
	*/
	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'headerlink',
			),
		);
	}
}
