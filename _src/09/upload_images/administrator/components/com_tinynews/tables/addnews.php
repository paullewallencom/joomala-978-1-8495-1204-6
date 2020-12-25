<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class TableAddnews extends JTable{

	var $id = null;
	var $title = null;
	var $text = null;
	var $image = null;
	var $caption = null;
	

	function TableAddnews(& $db) {
		parent::__construct('#__tinynews', 'id', $db);
	}
	
}