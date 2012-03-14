<?php
class Scroll extends AppModel {

	var $name = 'Scroll';
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
		
			'scroll' => array(
				'path' => ':webroot/files/scroll/:basename.:extension',
			),
		)  
	);
	
/*** NO LONGER USED, QUERY IN APP CONTROLLER ***
	function afterSave() {  
		$this->_cacheNav();  
	}  

	function afterDelete() {  
		$this->_cacheNav();  
	}  

	function _cacheNav() {
		$scrolls = $this->field('scroll_file_name', array(), 'Scroll.published DESC');
		Cache::config('scroll', array('engine' => 'File', 'path' => CACHE, 'duration' => '+1 year'));  
		Cache::write('scroll', $scrolls, 'scroll');
	}
*/

}
?>