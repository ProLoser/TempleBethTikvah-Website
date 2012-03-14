<div class="yartzeits form">
<?php echo $form->create('Yartzeit');?>
	<fieldset>
 		<legend><?php __('Edit Yartzeit');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Yartzeit.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Yartzeit.id'))); ?></li>
		<li><?php echo $html->link(__('List Yartzeits', true), array('action'=>'index'));?></li>
	</ul>
</div>
