<?php 

defined('_JEXEC') or die('Restricted access'); 

$js = JURI::base().'components/com_tinynews/js/jquery.simpleautogrow.js';
$document =& JFactory::getDocument();
$document->addScript($js);

$js = JURI::base().'components/com_tinynews/js/jquery.formtips.1.2.js';
$document->addScript($js);

$js = "

	jQuery(document).ready(function($){
		
		$('textarea').simpleautogrow();
		
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
 
<form action="index.php" method="post" name="adminForm" id="adminForm">
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
                <label for="title">
                    Text:
                </label>
            </td>
            <td>
                <textarea class="text_area" type="text" name="text" id="text" cols="40" rows="5" title="Write the news' text here"><?php echo $this->news->text;?></textarea>
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
