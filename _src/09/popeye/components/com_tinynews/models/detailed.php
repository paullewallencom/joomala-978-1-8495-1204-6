<?php
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );
 
class TinynewsModelDetailed extends JModel{

    function getnews(){
    	
				$id = JRequest::getVar( 'id', 'null' );
				
        $query = ' SELECT * FROM #__tinynews WHERE id = '.$id;
        $this->_db->setQuery( $query );
        $data = $this->_db->loadObject();
		    
		    if (!$data) {
		        $data = new stdClass();
		        $data->id = 0;
		        $data->title = null;
		        $data->text = null;
		        $data->image = null;
		        $data->caption = null;
		    }
		    
		    return $data;
		      	
    }

}
