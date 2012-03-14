<div class="boardMembers form">
<?php echo $form->create('BoardMember');?>
	<fieldset>
 		<legend><?php __('Edit BoardMember');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('position');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('board');
		echo $form->input('order');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BoardMember.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BoardMember.id'))); ?></li>
		<li><?php echo $html->link(__('List BoardMembers', true), array('action'=>'index'));?></li>
	</ul>
</div>
