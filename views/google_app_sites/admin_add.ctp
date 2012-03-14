<div class="googleAppSites form">
<?php echo $form->create('GoogleAppSite');?>
	<fieldset>
 		<legend><?php __('Add Google App Site');?></legend>
	<?php echo $form->input('name'); ?>
	<p>Use the following field you entered when creating a google site for the Url field:</p>
	<?php 
		echo $html->image('google_sites.png');
		echo $form->input('url');
	?>
	<p>If a site is not published, it won't show up in the navigation bar.</p>
	<?php
		echo $form->input('published');
		echo $form->input('description');
		echo $form->input('order');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List GoogleAppSites', true), array('action'=>'index'));?></li>
	</ul>
</div>
