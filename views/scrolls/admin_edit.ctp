<div class="scrolls form">
<?php echo $form->create('Scroll', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Edit Scroll');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('scroll', array('type'=>'file'));
		echo $form->input('published');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Scroll.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Scroll.id'))); ?></li>
		<li><?php echo $html->link(__('List Scrolls', true), array('action'=>'index'));?></li>
	</ul>
</div>
