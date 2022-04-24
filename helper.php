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

$jn_charts_data_type         = $params->get('jn_charts_data_type');
$jn_charts_linecolor         = $params->get('jn_charts_linecolor');
$jn_charts_bar  	          = $params->get('jn_charts_bar');
$jn_charts_width             = $params->get('jn_charts_width');
$jn_charts_height            = $params->get('jn_charts_height');
$jn_charts_title             = preg_replace("/[^a-zA-Z0-9 ]+/", "", $params->get('jn_charts_title'));
$jn_load_jquery              = $params->get('jn_load_query');
$jn_load_bootstrap           = $params->get('jn_load_bootstrap');
$jn_charts_data              = $params->get('jn_charts_data');
$jn_charts_grouped           = $params->get('jn_charts_grouped');
$jn_charts_grouped_data      = $params->get('jn_charts_grouped_data');


class mod_jdayusa_charts{
   
}
?>