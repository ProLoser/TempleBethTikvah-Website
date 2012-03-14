<div class="sermons view">
<h2><?php  __('Sermon');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sermon['Sermon']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sermon['Sermon']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sermon['Sermon']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sermon['Sermon']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Audio File'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sermon['Sermon']['audio_file_name'], '/files/sermons/audio/'. $sermon['Sermon']['audio_file_name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text File'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sermon['Sermon']['text_file_name'], '/files/sermons/text/'. $sermon['Sermon']['text_file_name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sermon['Sermon']['title']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Sermon', true), array('action'=>'edit', $sermon['Sermon']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Sermon', true), array('action'=>'delete', $sermon['Sermon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sermon['Sermon']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Sermons', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sermon', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
