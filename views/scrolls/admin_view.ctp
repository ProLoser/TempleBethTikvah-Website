<div class="scrolls view">
<h2><?php  __('Scroll');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scroll['Scroll']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scroll['Scroll']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scroll['Scroll']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Scroll File Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scroll['Scroll']['scroll_file_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scroll['Scroll']['published']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Scroll', true), array('action'=>'edit', $scroll['Scroll']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Scroll', true), array('action'=>'delete', $scroll['Scroll']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $scroll['Scroll']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Scrolls', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Scroll', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
