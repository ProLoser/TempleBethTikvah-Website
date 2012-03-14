<?php
class SchoolFee extends AppModel {
	var $name = 'SchoolFee';
	var $validate = array(
		'family_name' => array(
			'notEmpty'=>array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a valid family name.',
			),
		),
		'1_day_students' => array(
			'numeric'=>array(
				'rule' => 'numeric',
				'message' => 'Please enter number.',
				'allowEmpty' => true
			),
		),
		'2_day_students' => array(
			'numeric'=>array(
				'rule' => 'numeric',
				'message' => 'Please enter a valid number.',
				'allowEmpty' => true
			),
		),
		'confirmation_students' => array(
			'numeric'=>array(
				'rule' => 'numeric',
				'message' => 'Please enter a valid number.',
				'allowEmpty' => true
			),
		),
		'payment_frequency' => array(
			'notEmpty'=>array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a valid payment frequency.',
			),
		),
	);
	
	var $belongsTo = array(
		'Family',
	);
}