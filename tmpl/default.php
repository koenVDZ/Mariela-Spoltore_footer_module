<?php
/**
 * @package    M.S. Footer Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$domain = $params->get('domain', 'https://rioguides.biz');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_msfooter', JPATH_SITE);
?>

<p style="text-align: center;">
	<img src="images/logos/logo_mscom_80.png" alt="" />
</p>
<p style="text-align: center;">
	<span style="font-size: 10pt;"><?php echo Text::_('MOD_MSFOOTER_COPYRIGHT'); ?></span>
		<span style="font-family: courier new, courier, monospace;"></span>
		<br />
		<?php echo date('Y');?>
		<br />
		</span><?php echo Text::_('MOD_MSFOOTER_MS_ALL_RIGHTS_RESERVED'); ?></span>
</p>
<div class="grid-child footer__wrapper">
	<!-- Sandra Tobón -->
	<div class="footer__item-1">
		<div class="icon-pencil-paintbrush"><?php echo Text::_('MOD_MSFOOTER_LOGO_DESIGN'); ?></div>
	</div>
	<!-- RioGuides Info -->
	<div class="footer__item-2">
		<div>
			<img style="display: block; margin-left: auto; margin-right: auto;" src="images/logos/rioguides_logo_blue_20x20.jpg" alt="" width="20" height="20" />
		</div>
		<div><?php echo Text::_('MOD_MSFOOTER_WEBDESIGN'); ?>
			<a title="Web Design &amp; Development" href="<?php echo $domain; ?>" target="_blank" rel="noopener noreferrer">RioGuides.biz</a>
		</div>
	</div>
	<!-- Soledad Voulgaris -->
	<div class="footer__item-3">
		<div class="icon-pencil-paintbrush"><?php echo Text::_('MOD_MSFOOTER_ILLUSTRATIONS'); ?></div>
	</div>
</div>