<?php
class WishListItem extends AppModel {

	var $name = 'WishListItem';
	var $validate = array(
		'item' => array('notempty')
	);

}
?>