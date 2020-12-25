<?php
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );
 
class TinynewsModelAddnews extends JModel{
		
		function &getData(){

				$array = JRequest::getVar('cid',  0, '', 'array');
				$id = $array[0];
				
        $query = ' SELECT * FROM #__tinynews WHERE id = '.$id;
        $this->_db->setQuery( $query );
        $data = $this->_db->loadObject();
		    
		    if (!$data) {
		        $data = new stdClass();
		        $data->id = 0;
		        $data->title = null;
		        $data->text = null;
		    }
		    
		    return $data;
		}
		
		function savedata(){
				
		    $row =& $this->getTable('addnews');
		    
		    if(!empty($_FILES["image"]["tmp_name"])){
					move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"].DS."administrator".DS."components".DS."com_tinynews".DS."images".DS.$_FILES["image"]["name"]);	
		    }
		    
		    $data = array();
		    $data['id'] = JRequest::getVar( 'id', 'null' );
		    $data['title'] = JRequest::getVar( 'title', 'null' );
		    $data['text'] = JRequest::getVar( 'text', 'null' );
		    $data['image'] = (!empty($_FILES["image"]["tmp_name"])  ? $_FILES["image"]["name"] : "");
		    $data['caption'] = JRequest::getVar( 'caption', 'null' );

		    if (!$row->bind( $data )) {
		        $this->setError($this->_db->getErrorMsg());
		        return false;
		    }
		 
		    if (!$row->check()) {
		        $this->setError($this->_db->getErrorMsg());
		        return false;
		    }
		 
		    if (!$row->store()) {
		        $this->setError($this->_db->getErrorMsg());
		        return false;
		    }
		 
		    return true;

		}
	
		function delete(){
		    $cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
		    
		    $row =& $this->getTable('addnews');
		 
		    foreach($cids as $cid) {
		        if (!$row->delete( $cid )) {
		            $this->setError( $row->getErrorMsg() );
		            return false;
		        }
		    }
		 
		    return true;
		}

}
