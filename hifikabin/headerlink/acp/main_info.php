<?php
/**
*
* @package phpBB Extension - Header Link
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\headerlink\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\hifikabin\headerlink\acp\main_module',
			'title'		=> 'ACP_HEADERLINK_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title' 	=> 'ACP_HEADERLINK_CONFIG',
					'auth' 		=> 'hifikabin/headerlink && acl_a_board',
					'cat'		=> array('ACP_HEADERLINK_CONFIG')),
				),
		);
	}
}
