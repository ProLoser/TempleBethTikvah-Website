<div class="wishListItems form">
<?php echo $form->create('WishListItem');?>
	<fieldset>
 		<legend><?php __('Edit WishListItem');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('item');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('WishListItem.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('WishListItem.id'))); ?></li>
		<li><?php echo $html->link(__('List WishListItems', true), array('action'=>'index'));?></li>
	</ul>
</div>
