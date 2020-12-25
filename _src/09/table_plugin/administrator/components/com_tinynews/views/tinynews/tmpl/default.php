<?php 

defined('_JEXEC') or die('Restricted access'); 

$js = JURI::base().'components/com_tinynews/js/jquery.tablePager-1.2.js';
$document =& JFactory::getDocument();
$document->addScript($js);

$js = "

	jQuery(document).ready(function($){
		
		$('.adminlist').tablePager();
		
	});

";

$document->addScriptDeclaration($js);

$css = JURI::base().'components/com_tinynews/css/styles.css';
$document->addStyleSheet( $css );


?>

<form action="index.php" method="post" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
        <tr>
        		<th width="5">
        			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->news ); ?>);" />
        		</th>
            <th width="5">
                Id
            </th>
            <th>
                Title
            </th>
            <th>
                Text
            </th>            
        </tr>            
    </thead>
    <?php
    
    $i = 0;
    $row = 0;
    foreach($this->news as $new){

    ?>
        <tr class="<?php echo "row$i"; ?>">
        		<td>
        			<?php echo JHTML::_( 'grid.id', $row, $new->id ); ?>
        		</td>
            <td>
                <?php echo $new->id; ?>
            </td>
            <td>
                <a href="<?php echo JRoute::_( 'index.php?option=com_tinynews&task=edit&cid[]='. $new->id ); ?>"><?php echo $new->title; ?></a>
            </td>
            <td>
                <?php echo $new->text; ?>
            </td>            
        </tr>
        <?php
        $row++;
        $i = 1 - $i;
    }
    ?>
    </table>
</div>
 
<input type="hidden" name="option" value="com_tinynews" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
 
</form>
