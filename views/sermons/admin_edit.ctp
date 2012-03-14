<div class="sermons form">
<?php echo $form->create('Sermon',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit Sermon');?></legend>	
	<?php 
		echo $form->input('id');
		echo $form->input('title'); 
		echo $form->input('published'); 
		$after = ($this->Form->value('audio_file_name')) ? 'Current File: ' . $this->Html->link($this->Form->value('audio_file_name'), '/file/sermons/audio/' . $this->Form->value('audio_file_name')) . '<br>': '';
		echo $form->input('audio',array('label' => 'Audio File', 'type'=>'file', 'between' => 'Max File Size: ' . ini_get('upload_max_filesize'), 'after' => $after));
		$after = ($this->Form->value('text_file_name')) ? 'Current File: ' . $this->Html->link($this->Form->value('text_file_name'), '/file/sermons/text/' . $this->Form->value('text_file_name')): '';
		echo $form->input('text',array('label' => 'Text File', 'type'=>'file', 'between' => 'Max File Size: ' . ini_get('upload_max_filesize'), 'after' => $after));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Sermon.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Sermon.id'))); ?></li>
		<li><?php echo $html->link(__('List Sermons', true), array('action'=>'index'));?></li>
	</ul>
</div>
