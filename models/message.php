<?php
class Message extends AppModel {

	var $name = 'Message';
	var $validate = array(
		'message' => 'notEmpty',
	);
	var $order = 'published DESC';
	var $categories = array(
		'weeklyRabbi'=>'Weekly Rabbi',
		'monthlyRabbi'=>'Monthly Rabbi',
		'monthlyPresident'=>'Monthly President',
		'monthlyEclc'=>'Monthly ECLC',
		'monthlyReligiousSchool'=>'Monthly Religious School',
		'monthlyMensClub'=>'Monthly Mens Club',
		'monthlySisterhood'=>'Monthly Sisterhood',
		'projectLegacy'=>'Project Legacy',
	);

}
?>