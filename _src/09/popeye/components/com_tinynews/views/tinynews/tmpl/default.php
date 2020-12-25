<?php 

defined('_JEXEC') or die('Restricted access'); 

$document =& JFactory::getDocument();

$css = JURI::base().'components/com_tinynews/css/frontend_style.css';
$document->addStyleSheet( $css );

$js = JURI::base().'components/com_tinynews/js/jquery.equalheights.js';
$document->addScript($js);
$js = JURI::base().'components/com_tinynews/js/jquery.quickpaginate.js';
$document->addScript($js);


$js = "

	jQuery(document).ready(function($){
		
		$('.news_box').equalHeights();
		$('#news_container div.news_box').quickpaginate({ perpage: 4, showcounter: true, pager : $('#news_container_page') });
		
		$('.news_image').hover(function(){  
		   $('img', this).stop().animate({top:'76px'},{duration:160});  
		}, function() {  
		   $('img', this).stop().animate({top:'0px'},{duration:160});  
		});  		

		
	});

";

$document->addScriptDeclaration($js);

?>
<div id="news_container">
	<?php
	foreach($this->news as $new){
	?>
		<div class="news_box">
			
			<?php 
				if(!empty($new->image)){				
			?>
			
				<div class="news_image">
					<img src="<?php JURI::base(); ?>administrator/components/com_tinynews/images/<?php echo $new->image; ?>" alt="<?php echo $new->caption; ?>" width="165"/>
					<div class="caption">  
						<p>Title: <?php echo $new->caption; ?></p>
					</div>
				</div>					
					
			<?php
				}
			?>
			
			<h1><?php echo $new->title; ?></h1>
			<p><?php echo substr($new->text,0,256); ?></p>
			<p><a href="<?php JURI::base() ?>index.php?option=com_tinynews&task=detail&id=<?php echo $new->id; ?>">Read more</a></p>
		</div>	
	<?php
	}
	?>
</div>

<div id="news_container_page">&nbsp;</div>