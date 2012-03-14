<div class="mensClubScrollArticles view">
<h2><?php  __('Mens Club Scroll Article');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mensClubScrollArticle['MensClubScrollArticle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mensClubScrollArticle['MensClubScrollArticle']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mensClubScrollArticle['MensClubScrollArticle']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Article'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mensClubScrollArticle['MensClubScrollArticle']['article']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publish Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mensClubScrollArticle['MensClubScrollArticle']['publish_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mens Club Scroll Article', true), array('action' => 'edit', $mensClubScrollArticle['MensClubScrollArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Mens Club Scroll Article', true), array('action' => 'delete', $mensClubScrollArticle['MensClubScrollArticle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mensClubScrollArticle['MensClubScrollArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mens Club Scroll Articles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mens Club Scroll Article', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
