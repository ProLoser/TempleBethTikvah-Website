<div class="boardMembers form">
<?php echo $form->create('BoardMember');?>
	<fieldset>
 		<legend><?php __('Add BoardMember');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List BoardMembers', true), array('action'=>'index'));?></li>
	</ul>
</div>
