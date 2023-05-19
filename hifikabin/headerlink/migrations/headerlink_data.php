<?php
/**
 *
 * @package phpBB Extension - Header Link
 * @copyright (c) 2015 - HiFiKabin
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hifikabin\headerlink\migrations;

class headerlink_data extends \phpbb\db\migration\migration
{

	public function update_schema()
	{
		return array(
			'add_tables'	=> [
			// ADD NEW TABLE STRUCTURE
				$this->table_prefix . 'headerlink'	=> [
					'COLUMNS' => [
					'headerlink_id'						=> ['UINT', null, 'auto_increment'],
					'headerlink_url'					=> ['VCHAR', ''],
					'headerlink_name'					=> ['VCHAR', ''],
					'headerlink_hover'					=> ['VCHAR', ''],
					'headerlink_icon'					=> ['VCHAR', ''],
					'headerlink_icon_colour'			=> ['VCHAR', ''],
					'headerlink_icon_sw'				=> ['BOOL', 0],
					'headerlink_permission'				=> ['VCHAR', ''],
					'headerlink_target'					=> ['VCHAR', ''],
					'headerlink_button_colour'			=> ['VCHAR', ''],
					'headerlink_text_colour'			=> ['VCHAR', ''],
					'headerlink_text_shadow'			=> ['VCHAR', ''],
					'headerlink_text_shadow_colour'		=> ['VCHAR', ''],
					],
					'PRIMARY_KEY'	=> 'headerlink_id',
				],
			],
		);
	}

	public function update_data()
	{
		// ADD CONFIG
		return [
			['config.add', ['headerlink_enable', '0']],
			['config.add', ['headerlink_hover_colour', '#0c93d7']],
			['config.add', ['headerlink_navbar', '0']],

			// Add ACP modules
			['module.add', ['acp', 'ACP_CAT_DOT_MODS', 'ACP_HEADERLINK_TITLE']],
			['module.add', ['acp', 'ACP_HEADERLINK_TITLE', [
				'module_basename'	=> '\hifikabin\headerlink\acp\main_module',
				'module_langname'	=> 'ACP_HEADERLINK',
				'module_mode'		=> 'overview',
				'module_auth'		=> 'ext_hifikabin/headerlink && acl_a_board',
			]]],
		];
	}

	/**
	 * Drop the Header Link table schema from the database
	 *
	 * @return array Array of table schema
	 * @access public
	 */
	public function revert_schema()
	{
		return [
			'drop_tables'	=> [
				$this->table_prefix . 'headerlink',
			],
		];
	}
}
