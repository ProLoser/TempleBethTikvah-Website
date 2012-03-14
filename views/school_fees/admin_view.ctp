<div class="schoolFees view">
<h2><?php  __('School Fee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Confirmation Students'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['confirmation_students']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('2 Day Students'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['2_day_students']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('1 Day Students'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['1_day_students']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Optional Contribution'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['optional_contribution']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Family Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['family_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Method'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['payment_method']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Frequency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['payment_frequency']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolFee['SchoolFee']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School Fee', true), array('action' => 'edit', $schoolFee['SchoolFee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete School Fee', true), array('action' => 'delete', $schoolFee['SchoolFee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolFee['SchoolFee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List School Fees', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Fee', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
