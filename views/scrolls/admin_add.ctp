<div class="scrolls form">
<?php echo $form->create('Scroll', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Add Scroll');?></legend>
	<?php 
		echo $form->input("Scroll.published");
		echo $form->input("Scroll.scroll", array('type'=>'file'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Scrolls', true), array('action'=>'index'));?></li>
	</ul>
</div>
