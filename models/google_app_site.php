<?php
class GoogleAppSite extends AppModel {

	var $name = 'GoogleAppSite';
	var $order = 'GoogleAppSite.order ASC';
	var $validate = array(
		'name' => array('notempty'),
		'published' => array('boolean')
	);

}
?>