<?php
/**
 * @version     1.0
 * @package     mod_jdayusa_charts
 * @copyright   Copyright (C) 2022. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk  / JModules.com
 */
//No Direct Access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_jdayusa_charts', $params->get('layout', 'default'));
?>
