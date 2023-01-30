<?php
/**
*
* @package phpBB Extension - Header Link
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\headerlink\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var  \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var  \phpbb\request\request */
	protected $request;

	/** @var  \headerlink_table */
	protected $headerlink_table;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \phpbb\template\template			$template
	* @parem \phpbb\user 						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @parem \phpbb\request\request				$request
	* @param string								$headerlink_table
	* @param \phpbb\config\config				$config
	*/

	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db,
	\phpbb\request\request $request, $headerlink_table, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->user = $user;
		$this->db = $db;
		$this->request = $request;
		$this->headerlink_table = $headerlink_table;
		$this->config = $config;
	}

	public static function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'headerlink',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext		= $event['lang_set_ext'];
		$lang_set_ext[]		= array(
			'ext_name'		=> 'hifikabin/headerlink',
			'lang_set'		=> 'common_headerlink',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function headerlink($event)
	{
		$this->template->assign_vars(array(
			'HEADERLINK_ENABLE'					=> $this->config['headerlink_enable'],
			'HEADERLINK_HOVER_COLOUR'			=> $this->config['headerlink_hover_colour'],
			'HEADERLINK_NAVBAR'					=> $this->config['headerlink_navbar'],
			));

		$sql = 'SELECT * 
		FROM '. $this->headerlink_table;
		$result	 = $this->db->sql_query($sql,86400);


			while ($row = $this->db->sql_fetchrow($result))
			{
			if (!empty($row['headerlink_url']))
				{
				$this->template->assign_block_vars('headerlink_urls', array(
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
					));
				}
			}
		$this->db->sql_freeresult($result);
	}
}
