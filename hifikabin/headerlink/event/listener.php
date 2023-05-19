<?php
/**
 *
 * @package phpBB Extension - Header Link
 * @copyright (c) 2015 - HiFiKabin
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hifikabin\headerlink\event;

use phpbb\template\template;
use phpbb\db\driver\driver_interface;
use phpbb\config\config;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 *
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var string */
	protected $headerlink_table;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config					$config
	 * @param \phpbb\template\template				$template
	 * @param \phpbb\db\driver\driver_interface		$db
	 * @param string								$headerlink_table
	 */

	public function __construct(config $config, template $template, driver_interface $db, $headerlink_table)
	{
		$this->config = $config;
		$this->template = $template;
		$this->db = $db;
		$this->headerlink_table = $headerlink_table;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'headerlink',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext		= $event['lang_set_ext'];
		$lang_set_ext[]		= [
			'ext_name'		=> 'hifikabin/headerlink',
			'lang_set'		=> 'common_headerlink',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function headerlink($event)
	{
		$this->template->assign_vars([
			'HEADERLINK_ENABLE'					=> $this->config['headerlink_enable'],
			'HEADERLINK_HOVER_COLOUR'			=> $this->config['headerlink_hover_colour'],
			'HEADERLINK_NAVBAR'					=> $this->config['headerlink_navbar'],
			'HEADERLINK_ALIGN'					=> $this->config['headerlink_align'],
			'HEADERLINK_RESPONSIVE'				=> $this->config['headerlink_responsive'],
			'HEADERLINK_RESPONSIVE_WIDTH'		=> $this->config['headerlink_responsive_width'],
		]);

		$sql = 'SELECT *
		FROM '. $this->headerlink_table;
		$result	 = $this->db->sql_query($sql, 86400);

			while ($row = $this->db->sql_fetchrow($result))
			{
			if (!empty($row['headerlink_url']))
				{
				$this->template->assign_block_vars('headerlink_urls', [
					'HEADERLINK_URL'					=> $row['headerlink_url'],
					'HEADERLINK_NAME'					=> $row['headerlink_name'],
					'HEADERLINK_HOVER'					=> $row['headerlink_hover'],
					'HEADERLINK_ICON'					=> $row['headerlink_icon'],
					'HEADERLINK_ICON_COLOUR'			=> $row['headerlink_icon_colour'],
					'HEADERLINK_ICON_SW'				=> $row['headerlink_icon_sw'],
					'HEADERLINK_PERMISSION'				=> $row['headerlink_permission'],
					'HEADERLINK_TARGET'					=> $row['headerlink_target'],
					'HEADERLINK_BUTTON_COLOUR'			=> $row['headerlink_button_colour'],
					'HEADERLINK_TEXT_COLOUR'			=> $row['headerlink_text_colour'],
					'HEADERLINK_TEXT_SHADOW'			=> $row['headerlink_text_shadow'],
					'HEADERLINK_TEXT_SHADOW_COLOUR'		=> $row['headerlink_text_shadow_colour'],
					]);
				}
			}
		$this->db->sql_freeresult($result);
	}
}
