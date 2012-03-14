<div class="prayers form">
<?php echo $form->create('Prayer',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit Prayer');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('prayer_audio',array('type'=>'file'));
		echo $form->input('prayer_text');
		echo $form->input('prayer_text_file',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Prayer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Prayer.id'))); ?></li>
		<li><?php echo $html->link(__('List Prayers', true), array('action'=>'index'));?></li>
	</ul>
</div>
