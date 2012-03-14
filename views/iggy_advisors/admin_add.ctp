<div class="iggyAdvisors form">
<?php echo $form->create('IggyAdvisor', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Iggy Advisor');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List IggyAdvisors', true), array('action' => 'index'));?></li>
	</ul>
</div>