<?php
/**
 * @package		mod_show_squad_list for USPSd5.org Site
 * @subpackage	Main mod_show_squad_list module.
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
*/

// no direct access
defined('_JEXEC') or die;
jimport('USPS.includes.routines');
$logging = $params->get('siteLog');
if ($logging) log_it("ShowSquadList Starting.");
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$params->def('greeting', 1);

$squadrons	= modshowsquadlistHelper::getSquadronList();
if ($logging) log_it("ShowSquadList found ".count($squadrons)." records.");
if (! $squadrons )
	log_it ("Did not obtain squadron records.");
require JModuleHelper::getLayoutPath('mod_show_squad_list', $params->get('layout', 'default'));
