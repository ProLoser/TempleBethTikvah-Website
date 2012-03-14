<div class="guestbooks form">
<?php echo $form->create('Guestbook');?>
	<fieldset>
 		<legend><?php __('Edit Guestbook');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('ip');
		echo $form->input('name');
		echo $form->input('email');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Guestbook.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Guestbook.id'))); ?></li>
		<li><?php echo $html->link(__('List Guestbooks', true), array('action'=>'index'));?></li>
	</ul>
</div>
