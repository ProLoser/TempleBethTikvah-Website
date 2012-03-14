<div class="guestbooks view">
<h2><?php  __('Guestbook');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guestbook['Guestbook']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guestbook['Guestbook']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guestbook['Guestbook']['ip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guestbook['Guestbook']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guestbook['Guestbook']['email']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Guestbook', true), array('action'=>'edit', $guestbook['Guestbook']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Guestbook', true), array('action'=>'delete', $guestbook['Guestbook']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $guestbook['Guestbook']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Guestbooks', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Guestbook', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
