<div class="iggyAdvisors form">
<?php echo $form->create('IggyAdvisor', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit IggyAdvisor');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('position');
		echo $form->input('bio');
		echo $form->input('picture', array('type'=>'file'));
		echo $form->input('order');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('IggyAdvisor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IggyAdvisor.id'))); ?></li>
		<li><?php echo $html->link(__('List IggyAdvisors', true), array('action' => 'index'));?></li>
	</ul>
</div>