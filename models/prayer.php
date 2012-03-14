<?php
class Prayer extends AppModel {

	var $name = 'Prayer';
	var $validate = array(
		'name' => array('notempty'),
	);
	var $actsAs = array(  
		'Upload.Upload' => array(		 
			'prayer_audio' => array(  
				'path' => ':webroot/files/prayers/prayer_audio/:basename.:extension',  
			),
			'prayer_text_file' => array(  
				'path' => ':webroot/files/prayers/prayer_text_file/:basename.:extension',  
			)
		)  
	); 

}
?>