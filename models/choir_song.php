<?php
class ChoirSong extends AppModel {
	
	var $name = 'ChoirSong';
	
	var $validate = array(
		'title' => 'notEmpty',
	);
	
	var $actsAs = array(  
		'Upload.Upload' => array(  
			'music_file' => array(
				'path' => ':webroot/files/choir_song/music_file/:basename.:extension',
			),
			'word_file' => array(  
				'path' => ':webroot/files/choir_song/word_file/:basename.:extension',
			),
			'sheet_music' => array(  
				'path' => ':webroot/files/choir_song/sheet_music/:basename.:extension',
			)
		)  
	); 

	var $categories = array(
		'Choir Music' => 'Choir Music',
		'High Holidays' => 'High Holidays',
		'Junior Choir' => 'Junior Choir'
	);

}
?>