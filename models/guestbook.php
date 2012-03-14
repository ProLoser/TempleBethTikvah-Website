<?php
class Guestbook extends AppModel {

	var $name = 'Guestbook';
	var $order = 'created DESC';
	var $validate = array(
		'ip' => array('ip'),
		'name' => array('notempty'),
		'email' => array(
			'rule' => 'email',
			'message' => 'Please enter a valid email',
			'allowEmpty' => true
		)
	);

}
?>