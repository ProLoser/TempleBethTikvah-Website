<?php
class Student extends AppModel {
	var $name = 'Student';
	var $validate = array(
		'last_name' => array(
			'rule' => array('notempty'),
			'message' => 'Last name missing',
		),
		'first_name' => array(
			'rule' => array('notempty'),
			'message' => 'First name missing',
		),
		'birth_date' => array(
			'rule' => array('notempty'),
			'message' => 'Birthday must be specified',
		),
		'grade' => array(
			'rule' => array('notempty'),
			'message' => 'Grade level missing',
		),
	);

	var $belongsTo = array(
		'Family',
	);

}
?>