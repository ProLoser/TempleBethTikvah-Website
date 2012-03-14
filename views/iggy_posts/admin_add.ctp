<div class="iggyPosts form">
	<p>If you add a number to the end of this url, you will see that many submission forms</p>
<?php echo $form->create('IggyPost', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add IggyPost');?></legend>
	<?php for ($i = 0; $i < $copies; $i++) {
		if ($copies > 1) { ?>
		<fieldset><legend>Record <?php echo $i+1?></legend>
		<?php }
		echo $form->input('IggyPost.'.$i.'.published');
		echo $form->input('IggyPost.'.$i.'.filename', array('type'=>'file'));
		if ($copies > 1) { ?>
		</fieldset>
		<?php }
	} ?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List IggyPosts', true), array('action' => 'index'));?></li>
	</ul>
</div>