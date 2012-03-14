<?php
class IggyPost extends AppModel {
	var $name = 'IggyPost';
	var $displayField = 'published';
	var $order = 'published DESC';
	var $validate = array(
		'published' => array(
			'date' => array('rule' => array('date')),
		),
	);
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
			'filename' => array(  
				'path' => ':webroot/files/iggy_posts/:basename.:extension',
			),
		)  
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>