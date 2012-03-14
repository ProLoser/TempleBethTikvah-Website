<?php
class Sermon extends AppModel {

	var $name = 'Sermon';
	var $order = 'Sermon.published DESC';
	var $validate = array(
		'published' => array('date'),
		'title' => array('notempty'),
	);
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
			'audio' => array(  
				'path' => ':webroot/files/sermons/audio/:basename.:extension',  
			),
			'text' => array(  
				'path' => ':webroot/files/sermons/text/:basename.:extension',  
			)
		)  
	); 
}
?>