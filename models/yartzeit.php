<?php
class Yartzeit extends AppModel {

	var $name = 'Yartzeit';
	var $validate = array(
		'date' => array('date'),
		'first_name' => array('notempty'),
		'last_name' => array('notempty'),
		'memorial_plaque' => array('boolean')
	);

}
?>