<?php
/**
 *
 * @package phpBB Extension - Header Link
 * @copyright (c) 2015 - HiFiKabin
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hifikabin\headerlink\acp;

/**
 * @package acp
 */

class main_module
{
	/** @var string */
	public $u_action;
	/** @var string */
	public $tpl_name;
	/** @var string */
	public $page_title;

	function main($id, $mode)
	{
		global $db, $user, $template, $request, $phpbb_log, $phpbb_container, $cache, $config, $language;

		$this->tpl_name = 'acp_headerlink';
		$language->add_lang('acp_headerlink', 'hifikabin/headerlink');
		$this->page_title = $language->lang('ACP_HEADERLINK_TITLE');
		$headerlink_table = $phpbb_container->getParameter('tables.headerlink_table');

		add_form_key('headerlink/acp_headerlink');

		$sql = 'SELECT *
		FROM '. $headerlink_table;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			if (!empty($row['headerlink_url']))
			{
				$template->assign_block_vars('headerlink_urls', [
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
		};

		if (empty($row['headerlink_url']))
		{
			$template->assign_block_vars('headerlink_urls', [
				'HEADERLINK_URL'	=> '',
			]);
		};
		$db->sql_freeresult($result);

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('headerlink/acp_headerlink'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('headerlink_enable', $request->variable('headerlink_enable', 0));
			$config->set('headerlink_hover_colour', $request->variable('headerlink_hover_colour', ''));
			$config->set('headerlink_navbar', $request->variable('headerlink_navbar', 0));
			$config->set('headerlink_align', $request->variable('headerlink_align', 0));
			$config->set('headerlink_responsive', $request->variable('headerlink_responsive', 0));
			$config->set('headerlink_responsive_width', $request->variable('headerlink_responsive_width', ''));

			$sql = 'DELETE FROM ' . $headerlink_table ;
			$db->sql_query($sql);

			$headerlink_url 					= $request->variable('headerlink_url', ['' => ''], true);
			$headerlink_name 					= $request->variable('headerlink_name', ['' => ''], true);
			$headerlink_hover 					= $request->variable('headerlink_hover', ['' => ''], true);
			$headerlink_icon 					= $request->variable('headerlink_icon', ['' => ''], true);
			$headerlink_icon_colour 			= $request->variable('headerlink_icon_colour', ['' => ''], true);
			$headerlink_icon_sw 				= $request->variable('headerlink_icon_sw', ['' => ''], true);
			$headerlink_permission 				= $request->variable('headerlink_permission', ['' => ''], true);
			$headerlink_target 					= $request->variable('headerlink_target', ['' => ''], true);
			$headerlink_button_colour 			= $request->variable('headerlink_button_colour', ['' => ''], true);
			$headerlink_text_colour 			= $request->variable('headerlink_text_colour', ['' => ''], true);
			$headerlink_text_shadow 			= $request->variable('headerlink_text_shadow', ['' => ''], true);
			$headerlink_text_shadow_colour 		= $request->variable('headerlink_text_shadow_colour', ['' => ''], true);

			$i = 0;
			$sql_ary = [];
			while ($i < count($headerlink_url))
			{
				$sql_ary[] = [
					'headerlink_url' 					=> $headerlink_url[$i],
					'headerlink_name'					=> $headerlink_name[$i],
					'headerlink_hover'					=> $headerlink_hover[$i],
					'headerlink_icon' 					=> $headerlink_icon[$i],
					'headerlink_icon_colour' 			=> $headerlink_icon_colour[$i],
					'headerlink_icon_sw' 				=> $headerlink_icon_sw[$i],
					'headerlink_permission'				=> $headerlink_permission[$i],
					'headerlink_target'					=> $headerlink_target[$i],
					'headerlink_button_colour' 			=> $headerlink_button_colour[$i],
					'headerlink_text_colour'			=> $headerlink_text_colour[$i],
					'headerlink_text_shadow'			=> $headerlink_text_shadow[$i],
					'headerlink_text_shadow_colour'		=> $headerlink_text_shadow_colour[$i],
				];
				$i++;
			}
			$db->sql_multi_insert($headerlink_table,  $sql_ary);

			$cache->destroy('sql', $headerlink_table);

			$user_id = $user->data['user_id'];
			$user_ip = $user->ip;

			$phpbb_log->add('admin', $user_id, $user_ip, 'ACP_HEADERLINK_SAVED');
			trigger_error($language->lang('ACP_HEADERLINK_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars([
			'HEADERLINK_ENABLE'					=> $config['headerlink_enable'],
			'HEADERLINK_HOVER_COLOUR'			=> $config['headerlink_hover_colour'],
			'HEADERLINK_NAVBAR'					=> $config['headerlink_navbar'],
			'HEADERLINK_ALIGN'					=> $config['headerlink_align'],
			'HEADERLINK_RESPONSIVE'				=> $config['headerlink_responsive'],
			'HEADERLINK_RESPONSIVE_WIDTH'		=> $config['headerlink_responsive_width'],
		]);
	}
}
