<?php
/**
 *
 * @package phpBB Extension - Header Link
 * @copyright (c) 2015 - HiFiKabin
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hifikabin\headerlink\migrations;

class headerlink_update_data_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\hifikabin\headerlink\migrations\headerlink_update_data_1'];
	}

	public function update_data()
	{
		return [
			// Add config
			['config.add', ['headerlink_responsive', '0']],
			['config.add', ['headerlink_responsive_width', '700']],
		];
	}
}
