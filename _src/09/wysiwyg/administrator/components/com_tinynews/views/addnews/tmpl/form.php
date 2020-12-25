<?php 

defined('_JEXEC') or die('Restricted access'); 

$document =& JFactory::getDocument();
$js = JURI::base().'components/com_tinynews/js/jquery.formtips.1.2.js';
$document->addScript($js);

$js = "

	jQuery(document).ready(function($){
		
    $('input,textarea').formtips({
  	  tippedClass: 'note'
    });
		
	});

";

$document->addScriptDeclaration($js);

$css = JURI::base().'components/com_tinynews/css/styles.css';
$document->addStyleSheet( $css );

?>

<?php defined('_JEXEC') or die('Restricted access'); ?>
 
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col100">
    <fieldset class="adminform">
        <legend>News' details</legend>
        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="title">
                    Title:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="title" id="title" value="<?php echo $this->news->title;?>" size="40" title="Write your title here"/>
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="text">
                    Text:
                </label>
            </td>
            <td>
                <?php
                $editor =& JFactory::getEditor();
                echo $editor->display('text', $this->news->text, '550', '400', '60', '20');
                ?>               
            </td>
        </tr>    
        <tr>
            <td width="100" align="right" class="key">
                <label for="image">
                    Image:
                </label>
            </td>
            <td>
                <input class="text_area" type="file" name="image" id="file"/>
                
                
            </td>
        </tr>   
        <tr>
            <td width="100" align="right" class="key">
                <label for="caption">
                    Image caption:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="caption" id="caption" value="<?php echo $this->news->caption;?>" size="40" title="Write your image caption here"/>
            </td>
        </tr>                    
    </table>
    </fieldset>
</div>
 
<div class="clr"></div>
 
<input type="hidden" name="option" value="com_tinynews" />
<input type="hidden" name="id" value="<?php echo $this->news->id; ?>" />
<input type="hidden" name="task" value="" />
</form>
