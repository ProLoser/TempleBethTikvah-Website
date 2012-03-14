<div class="prayers form">
<?php echo $form->create('Prayer', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Prayer',array('type'=>'file'));?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Prayers', true), array('action'=>'index'));?></li>
	</ul>
</div>
