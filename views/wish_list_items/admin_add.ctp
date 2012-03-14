<div class="wishListItems form">
<?php echo $form->create('WishListItem');?>
	<fieldset>
 		<legend><?php __('Add WishListItem');?></legend>
	<?php
		echo $form->input('item');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List WishListItems', true), array('action'=>'index'));?></li>
	</ul>
</div>
