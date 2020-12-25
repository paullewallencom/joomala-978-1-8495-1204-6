<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.view');
 
class TinynewsViewDetailed extends JView{
	
    function display(){
    	
        $model =& $this->getModel();
        
	      $news = $model->getnews();	      
        $this->assignRef('news', $news);
 
        parent::display();
    }
}