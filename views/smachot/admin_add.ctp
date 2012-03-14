<div class="smachot form">
<?php echo $form->create('Simcha');?>
	<fieldset>
 		<legend><?php __('Add Simcha');?></legend>
	<?php
		echo $form->input('date');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('category');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Smachot', true), array('action'=>'index'));?></li>
	</ul>
</div>
