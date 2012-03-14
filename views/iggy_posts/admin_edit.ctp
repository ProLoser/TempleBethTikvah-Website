<div class="iggyPosts form">
<?php echo $form->create('IggyPost', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit IggyPost');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('published');
		echo $form->input('filename', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('IggyPost.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IggyPost.id'))); ?></li>
		<li><?php echo $html->link(__('List IggyPosts', true), array('action' => 'index'));?></li>
	</ul>
</div>