<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/jj15/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/jj15/css/styles.css" type="text/css" />
  
<script type="text/javascript" src="/jj15/plugins/content/ppgallery/res/jquery.prettyPhoto.js" charset="utf-8"></script>
  
</head>

<body id="web">
	
	<div id="wrapper">
		
		<div id="header">
			<img src="<?php echo $this->baseurl ?>/templates/jj15/images/header_image.gif" />
		</div><!-- End of header -->
		
		<div id="menu">
			
			<div id="topmenu">
				
				<div id="mainmenu">
					<jdoc:include type="modules" name="menu" />
				</div><!-- End of mainmenu -->
				
				<div id="search">
					<jdoc:include type="modules" name="search" />
				</div><!-- End of search -->
				
			</div><!-- End of topmenu -->
			
		</div><!-- End of menu -->
			
		<br class="clean" />
			
		<?php if($this->countModules('module_1')) : ?>
		<div id="module_1">
				<div class="pad">
					<jdoc:include type="modules" name="module_1" />
				</div>			
		</div><!-- End module 1 -->
		<?php endif; ?>
		
		<?php if($this->countModules('module_2')) : ?>
		<div id="module_2">
					<jdoc:include type="modules" name="module_2" />
		</div><!-- End module 2 -->	
		<?php endif; ?>
		
		<?php if($this->countModules('module_3')) : ?>
		<div id="module_3">
				<div class="pad2">
						<jdoc:include type="modules" name="module_3" />
				</div>			
		</div><!-- End module 3 -->
		<?php endif; ?>
		
		<br class="clean" />
		
		<?php if($this->countModules('module_4')) : ?>
		<div id="module_4">
				<div class="pad">
						<jdoc:include type="modules" name="module_4" />
				</div>			
		</div><!-- End module 4 -->
		<?php endif; ?>
		
		<?php if($this->countModules('module_5')) : ?>
		<div id="module_5">
				<div class="pad">
						<jdoc:include type="modules" name="module_5" />
				</div>			
		</div><!-- End module 5 -->
		<?php endif; ?>
		
		<?php if($this->countModules('module_6')) : ?>
		<div id="module_6">
				<div class="pad">
						<jdoc:include type="modules" name="module_6" />
				</div>			
		</div><!-- End module 6 -->		
		<?php endif; ?>
		
		<br class="clean" /><br/>
			
		<div id="component_top">&nbsp;</div>
		<div id="component">
			<div class="pad">
				
				<div id="content">
					<jdoc:include type="component" />
				</div><!-- End content -->
				
				<?php if($this->countModules('adzone')) : ?>
				<div id="adzone">
					<jdoc:include type="modules" name="adzone" />
				</div><!-- End adzone -->
				<?php endif; ?>
				
				<br class="clean" />
				
			</div>
		</div><!-- End component -->		
		<div id="component_bottom">&nbsp;</div>
		
		<br class="clean" />		
		
	</div><!-- End of wrapper -->
	
	<div id="footer">
		<div id="footer_wrapper">
			<div class="pad">
				
				<?php if($this->countModules('module_7')) : ?>
				<div id="module_7">
						<div class="pad">
								<jdoc:include type="modules" name="module_7" />
						</div>			
				</div><!-- End module 7 -->	
				<?php endif; ?>
				
				<?php if($this->countModules('module_8')) : ?>
				<div id="module_8">
						<div class="pad">
								<jdoc:include type="modules" name="module_8" />
						</div>			
				</div><!-- End module 8 -->	
				<?php endif; ?>
				
				<?php if($this->countModules('module_9')) : ?>
				<div id="module_9">
						<div class="pad">
								<jdoc:include type="modules" name="module_9" />
						</div>			
				</div><!-- End module 9 -->	
				<?php endif; ?>													
				
			</div>	
			
			<br class="clean" />
							
		</div><!-- End footer wrapper -->
		
		<br/><br/>
	</div><!-- End footer -->
	
</body>

</html>