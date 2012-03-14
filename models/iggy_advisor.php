<?php
class IggyAdvisor extends AppModel {
	var $name = 'IggyAdvisor';
	var $displayField = 'name';
	var $order = 'order ASC';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'order' => array(
			'numeric' => array('rule' => array('numeric')),
		),
	);
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
			'picture' => array(  
				'path' => ':webroot/files/iggy_advisors/:basename.:extension',
			),
		)  
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>