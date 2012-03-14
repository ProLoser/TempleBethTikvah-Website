<?php
class ParentVolunteer extends AppModel {
	var $name = 'ParentVolunteer';
	var $validate = array(
		'family_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Family name missing',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'children' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Children missing',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'grades' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Grades missing',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Family',
	);
}
?>