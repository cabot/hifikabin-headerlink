<?php
/**
*
* @package phpBB Extension - Header Link
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\headerlink\migrations;

class headerlink_update_data_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\headerlink\migrations\headerlink_data');
	}

	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('headerlink_align', '0')),
			);
	}
}
