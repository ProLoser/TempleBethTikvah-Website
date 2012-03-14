<div class="guestbooks form">
<?php echo $form->create('Guestbook');?>
	<fieldset>
 		<legend><?php __('Add Guestbook');?></legend>
	<?php
		echo $form->input('ip');
		echo $form->input('name');
		echo $form->input('email');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Guestbooks', true), array('action'=>'index'));?></li>
	</ul>
</div>
