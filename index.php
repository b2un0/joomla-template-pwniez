<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 - 2014 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

$bxslider = array('auto' => false, 'autoControls' => true, 'video' => true);

/* dont change order! */
JFactory::getDocument()->addStyleSheet('templates/'.$this->template.'/css/jquery.bxslider.css');
JFactory::getDocument()->addStyleSheet('templates/'.$this->template.'/css/template.css');
JFactory::getDocument()->addScript('templates/'.$this->template.'/js/jquery.bxslider.js');
JFactory::getDocument()->addScript('templates/'.$this->template.'/js/jquery.fitvids.js');
JFactory::getDocument()->addScriptDeclaration('jQuery(document).ready(function(){jQuery(\'#wrapper .content .blog\').bxSlider(' . json_encode($bxslider, JSON_FORCE_OBJECT) . ');});');
JFactory::getDocument()->setMetaData('viewport', 'width=950, initial-scale=1');

?>
<!DOCTYPE html>
<html>
<head>
<jdoc:include type="head" />
</head>
<body>
<div id="headline"></div>

<div id="wrapper">
	<header>
	<div class="header">
		<a href="<?php echo JUri::base(true); ?>"><img class="logo" src="<?php echo JUri::base(true) . 'templates/'.$this->template; ?>/images/pwniez.png" alt="" /></a>
		<jdoc:include type="modules" name="header" style="raw" />
	</div>
	</header>
	<div class="content">
		<jdoc:include type="component" />
	</div>
	<footer>
	<div class="footer">
		<jdoc:include type="modules" name="footer" style="raw" />
	</div>
	</footer>
</div>
<jdoc:include type="modules" name="debug" style="raw" />
</body>
</html>