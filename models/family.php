<?php
/**
 * Family Model
 * 
 * [Short Description]
 *
 * @package default
 * @author Dean Sofer
 * @version $Id$
 * @copyright Art Engineered
 **/
class Family extends AppModel {
	var $name = 'Family';
	
	var $validate = array(
		'family_name' => array(
			'rule' => array('notempty'),
			'message' => 'Family Name missing',
		),
		'address' => array(
			'rule' => array('notempty'),
			'message' => 'Address missing',
		),
		'city' => array(
			'rule' => array('notempty'),
			'message' => 'City missing',
		),
		'zip' => array(
			'rule' => array('postal'),
			'message' => 'Invalid zip code',
		),
		'phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
		),
		'parent1_name' => array(
			'rule' => array('notempty'),
			'message' => 'Parent name missing',
		),
		'parent1_cell' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid cell phone',
			'allowEmpty' => true,
		),
		'parent1_email' => array(
			'rule' => array('email'),
			'message' => 'Invalid email',
		),
		'parent1_zip' => array(
			'rule' => array('postal'),
			'message' => 'Invalid zip code',
			'allowEmpty' => true,
		),
		'parent1_work_phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
		),
		'parent2_cell' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
			'allowEmpty' => true,
		),
		'parent2_email' => array(
			'rule' => array('email'),
			'message' => 'Invalid email address',
			'allowEmpty' => true,
		),
		'parent2_zip' => array(
			'rule' => array('postal'),
			'message' => 'Invalid Zip Code',
			'allowEmpty' => true,
		),
		'parent2_work_phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
			'allowEmpty' => true,
		),
		'emergency_name' => array(
			'rule' => array('notempty'),
			'message' => 'Emergency contact name missing',
		),
		'emergency_relationship' => array(
			'rule' => array('notempty'),
			'message' => 'Emergency contact relationship missing',
		),
		'emergency_phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
		),
		'emergency_state_phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
			'allowEmpty' => true,
		),
		'doctor_phone' => array(
			'rule' => array('phone', null, 'us'),
			'message' => 'Invalid phone number',
			'allowEmpty' => true,
		),
	);
	
	var $hasMany = array(
		'Student',
	);
	
	var $hasOne = array(
		'ParentVolunteer',
		'SchoolFee',
	);
}
?>