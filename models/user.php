<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
		'username' => array(
			'rule' => 'isUnique',
			'message' => 'Username already taken.',
			'allowEmpty' => false
		),
		'password' => array(
			'rule' => array('comparePasswords'),
			'message' => 'Your passwords do not match. Please type the same password in each field',
		),
		'email' => array(
			'rule' => 'email',
			'message' => 'Please enter valid email address.'
		),
	);
	
	function comparePasswords() {
		if ($this->data['User']['confirm_password'] == null) return false;
		else return Security::hash($this->data['User']['confirm_password'],null, true) == $this->data['User']['password'];
	}

}
?>