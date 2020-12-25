<?php 

defined('_JEXEC') or die('Restricted access'); 

$document =& JFactory::getDocument();
$css = JURI::base().'components/com_tinynews/css/frontend_style.css';
$document->addStyleSheet( $css );

$js = JURI::base().'components/com_tinynews/js/jquery.equalheights.js';
$document->addScript($js);

$js = "

	jQuery(document).ready(function($){
		
		$('.news_box').equalHeights();
		
	});

";

$document->addScriptDeclaration($js);

foreach($this->news as $new){
?>
	<div class="news_box">
		<h1><?php echo $new->title; ?></h1>
		<p><?php echo $new->text; ?></p>
	</div>	
<?php
}
?>