<?php
class BoardMember extends AppModel {

	var $name = 'BoardMember';
	var $validate = array(
		'position' => array('notempty'),
		'name' => array('notempty'),
		/*'email' => array(
			'rule' => 'email',
			'message' => 'Please enter a valid email address',
			'allowEmpty' => true,
		),*/
		'board' => array('boolean'),
		'order' => array(
			'rule' => 'numeric',
			'message' => 'Please enter numbers only'
		)
	);

}
?>