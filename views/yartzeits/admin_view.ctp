<div class="yartzeits view">
<h2><?php  __('Yartzeit');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Memorial Plaque'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yartzeit['Yartzeit']['memorial_plaque']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Yartzeit', true), array('action'=>'edit', $yartzeit['Yartzeit']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Yartzeit', true), array('action'=>'delete', $yartzeit['Yartzeit']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $yartzeit['Yartzeit']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Yartzeits', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Yartzeit', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
