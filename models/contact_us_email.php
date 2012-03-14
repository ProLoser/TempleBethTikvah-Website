<?php
class ContactUsEmail extends AppModel {

	var $name = 'ContactUsEmail';
	var $validate = array(
		'name' => array('notempty'),
		'email' => array(
			'rule' => 'email',
			'message' => 'Please enter a valid email address',
		),
		'subject' => array('notempty'),
		'message' => array('notempty'),
		'captcha' => array(
			'rule' => 'captcha',
			'message' => 'Seriously, the answer is always yes',
		),
	);
	
	var $categories = array(
		'info@TempleBethTikvah.com' => 'Temple Beth Tikvah',
		'oldgreybear@earthlink.net' => 'IGGY Youth',
		'admin@templebethtikvah.com' => 'Webmaster'
	);
	
	function captcha($check) {
		$value = array_shift($check);
		$value = substr($value, 0, 1);
		return (strtolower($value) == 'y');
	}

}
?>