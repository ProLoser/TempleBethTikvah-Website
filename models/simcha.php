<?php
class Simcha extends AppModel {

	var $name = 'Simcha';
	var $validate = array(
		'date' => array('date'),
		'first_name' => array('notempty'),
		'last_name' => array('notempty'),
		'category' => array(
			'rule' => array ('inlist', array('birthday','anniversary'))
		),
	);
	var $categories = array('birthday'=>'Birthday','anniversary'=>'Anniversary');

}
?>