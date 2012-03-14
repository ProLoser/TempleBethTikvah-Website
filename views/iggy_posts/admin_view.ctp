<div class="iggyPosts view">
<h2><?php  __('IggyPost');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyPost['IggyPost']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyPost['IggyPost']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyPost['IggyPost']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyPost['IggyPost']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Filename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyPost['IggyPost']['filename_file_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IggyPost', true), array('action' => 'edit', $iggyPost['IggyPost']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IggyPost', true), array('action' => 'delete', $iggyPost['IggyPost']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iggyPost['IggyPost']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IggyPosts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New IggyPost', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
