<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted access');

SpAddonsConfig::addonConfig(
	array(
		'type'=>'general',
		'addon_name'=>'sp_progress_bar',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_DESC'),
		'pro' => true,
		'attr' => true,
		)
	);
