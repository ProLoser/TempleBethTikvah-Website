<div class="iggyAdvisors view">
<h2><?php  __('IggyAdvisor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['bio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Picture'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['picture_file_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iggyAdvisor['IggyAdvisor']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IggyAdvisor', true), array('action' => 'edit', $iggyAdvisor['IggyAdvisor']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IggyAdvisor', true), array('action' => 'delete', $iggyAdvisor['IggyAdvisor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iggyAdvisor['IggyAdvisor']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IggyAdvisors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New IggyAdvisor', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
