<div class="yartzeits form">
<?php echo $form->create('Yartzeit');?>
	<fieldset>
 		<legend><?php __('Add Yartzeit');?></legend>
	<?php
		echo $form->input('date');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('memorial_plaque');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Yartzeits', true), array('action'=>'index'));?></li>
	</ul>
</div>
