<?php 

defined('_JEXEC') or die('Restricted access'); 

$document =& JFactory::getDocument();

$css = JURI::base().'components/com_tinynews/css/frontend_style.css';
$document->addStyleSheet( $css );
$css = JURI::base().'components/com_tinynews/css/jquery.popeye.css';
$document->addStyleSheet( $css );
$css = JURI::base().'components/com_tinynews/css/jquery.popeye.style.css';
$document->addStyleSheet( $css );

$js = JURI::base().'components/com_tinynews/js/jquery.popeye-1.0.js';
$document->addScript($js);

$js = "

	jQuery(document).ready(function($){

		$('#popeye1').popeye();
		
	});

";

$document->addScriptDeclaration($js);

?>
<div id="news_container">
			
	<?php 
		$news = $this->news;
	?>
	
	<h1><?php echo $news->title; ?></h1>
	<p>
		
		<?php 
			if(!empty($news->image)){				
		?>		
    <div style="clear:both;">
        <div id="popeye1">
            <ul>
                <li><a href="<?php JURI::base(); ?>administrator/components/com_tinynews/images/<?php echo $news->image; ?>"><img src="<?php JURI::base(); ?>administrator/components/com_tinynews/images/<?php echo $news->image; ?>" alt="<?php echo $news->caption; ?>" width="200"/></a></li>
            </ul>
        </div>
    </div>	
		<?php 
			}				
		?>	    
    	
		<?php echo nl2br($news->text); ?>
		<br/><br/>		
	</p>
	
	
	<p><a href="<?php JURI::base() ?>index.php?option=com_tinynews">Back to all the news</a></p>
</div>
