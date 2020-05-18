<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_showMember
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form">
<?php if (!empty($squadrons)) : ?>
	<ul class="<?php echo $moduleclass_sfx ?>" >
	<?php foreach($squadrons as $squad) : ?>
		<li>
			<?php echo $squad; ?>
		</li>
	<?php endforeach;  ?>
	</ul>
<?php endif; ?>
</form>
