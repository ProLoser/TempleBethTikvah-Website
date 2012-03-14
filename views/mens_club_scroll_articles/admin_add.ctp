<div class="mensClubScrollArticles form">
<?php echo $this->Form->create('MensClubScrollArticle');?>
	<fieldset>
 		<legend><?php __('Admin Add Mens Club Scroll Article'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('article');
		echo $this->Form->input('publish_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mens Club Scroll Articles', true), array('action' => 'index'));?></li>
	</ul>
</div>