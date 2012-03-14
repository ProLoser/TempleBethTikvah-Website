<?php
class MensClubScrollArticle extends AppModel {
	var $name = 'MensClubScrollArticle';
	var $order = 'MensClubScrollArticle.publish_date DESC';
	var $validate = array(
		/*'article_file_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
			),
		),*/
		'publish_date' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Please enter a valid date',
				//'allowEmpty' => false,
			),
		),
	);
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
			'article' => array(
				'path' => ':webroot/files/mens_club/:basename.:extension',
			),
		)  
	);
	
}
?>