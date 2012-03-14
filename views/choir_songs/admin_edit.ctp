<div class="choirSongs form">
<?php echo $form->create('ChoirSong',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit ChoirSong');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('category');
		echo $form->input('title');
		echo $form->input('number');
		echo $form->input('music_file',array('type'=>'file'));
		echo $form->input('word_file',array('type'=>'file'));
		echo $form->input('sheet_music',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ChoirSong.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ChoirSong.id'))); ?></li>
		<li><?php echo $html->link(__('List ChoirSongs', true), array('action'=>'index'));?></li>
	</ul>
</div>
