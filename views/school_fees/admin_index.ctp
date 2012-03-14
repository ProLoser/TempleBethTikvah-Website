<div class="schoolFees index">
	<h2><?php __('School Fees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('confirmation_students');?></th>
			<th><?php echo $this->Paginator->sort('2_day_students');?></th>
			<th><?php echo $this->Paginator->sort('1_day_students');?></th>
			<th><?php echo $this->Paginator->sort('optional_contribution');?></th>
			<th><?php echo $this->Paginator->sort('family_name');?></th>
			<th><?php echo $this->Paginator->sort('payment_method');?></th>
			<th><?php echo $this->Paginator->sort('payment_frequency');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schoolFees as $schoolFee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $schoolFee['SchoolFee']['id']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['confirmation_students']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['2_day_students']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['1_day_students']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['optional_contribution']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['family_name']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['payment_method']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['payment_frequency']; ?>&nbsp;</td>
		<td><?php echo $schoolFee['SchoolFee']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $schoolFee['SchoolFee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $schoolFee['SchoolFee']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $schoolFee['SchoolFee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolFee['SchoolFee']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Records %start% to %end% of %count%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New School Fee', true), array('action' => 'add')); ?></li>
	</ul>
</div>