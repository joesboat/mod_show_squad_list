<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_showMember
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
jimport('usps.tableAccess');
jimport('usps.tableVHQAB');
jimport('usps.tableD5VHQAB');
jimport('usps.includes.routines');
class modshowsquadlistHelper
{
	static function getSquadronList(){
		$vhqab = JoeFactory::getLibrary("USPSd5tableVHQAB");
		if ($vhqab){
			$aList = $vhqab->getD5Squadrons();
		} else {
			log_it("Did not open USPSd5tableVHQAB");
		}
		foreach($aList as $sqd){
			$list[] = $vhqab->getSquadronName($sqd['squad_no'],true);
		}
		$vhqab->close();
		return $list;
	}
}
