<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');


JHTML::stylesheet('jquery.jcarousel.css','modules/mod_tinyphotos/css/');
JHTML::stylesheet('skin.css','modules/mod_tinyphotos/css/tango/');
JHTML::stylesheet('styles.css','modules/mod_tinyphotos/css/');


$document =& JFactory::getDocument();
$document->addscript(JURI::root(true).'modules'.DS.'mod_tinyphotos'.DS.'js'.DS.'jquery.jcarousel.pack.js');

require_once(dirname(__FILE__).DS.'helper.php');

$news = ModTinyphotosHelper::getallphotos();


require(JModuleHelper::getLayoutPath('mod_tinyphotos','default_tmpl'));