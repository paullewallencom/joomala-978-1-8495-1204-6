<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');
 
class TinynewsController extends JController{
		
		function detail(){					
	    JRequest::setVar( 'view', 'detailed' );
	    JRequest::setVar( 'layout', 'default'  );
			
			parent::display();			
		}
		
		
    function display(){
        parent::display();
    }
 
}