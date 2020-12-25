<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
?>
<div id="tinyphotos">
	
	<ul id="carousel" class="jcarousel-skin-tango">

<?php 
	$i=0;
	foreach($news as $new){
	?>
	
		<li><img src="<?php JURI::base(); ?>administrator/components/com_tinynews/images/<?php echo $new->image; ?>" alt="<?php echo $new->caption; ?>" height="70"/></li>

	<?php	
		$i++;
	}
?>

	</ul>

</div>

<script type="text/javascript">

	jQuery(document).ready(function() {
	    jQuery('#carousel').jcarousel();
	});

</script>
<noscript>
	<style>
		#tinyphotos{
			width: 892px;
			height: 90px;
			overflow: auto;				
		}
		
		#tinyphotos ul{
			width: <?php echo (165 * $i); ?>px
		}		
	</style>	
</noscript>