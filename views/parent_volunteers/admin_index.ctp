<div class="parentVolunteers index">
	<h2><?php __('Parent Volunteers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('family_name');?></th>
			<th><?php echo $this->Paginator->sort('children');?></th>
			<th><?php echo $this->Paginator->sort('grades');?></th>
			<th><?php echo $this->Paginator->sort('religious_school');?></th>
			<th><?php echo $this->Paginator->sort('hebrew_school');?></th>
			<th><?php echo $this->Paginator->sort('rosh_hashanah');?></th>
			<th><?php echo $this->Paginator->sort('yom_kippur');?></th>
			<th><?php echo $this->Paginator->sort('passover');?></th>
			<th><?php echo $this->Paginator->sort('saturdays');?></th>
			<th><?php echo $this->Paginator->sort('wednesdays');?></th>
			<th><?php echo $this->Paginator->sort('field_trips');?></th>
			<th><?php echo $this->Paginator->sort('fundraising_activity');?></th>
			<th><?php echo $this->Paginator->sort('special_talent');?></th>
			<th><?php echo $this->Paginator->sort('education_committee');?></th>
			<th><?php echo $this->Paginator->sort('substitute_grades');?></th>
			<th><?php echo $this->Paginator->sort('teaching_grades');?></th>
			<th><?php echo $this->Paginator->sort('room_parent');?></th>
			<th><?php echo $this->Paginator->sort('other');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($parentVolunteers as $parentVolunteer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $parentVolunteer['ParentVolunteer']['id']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['family_name']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['children']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['grades']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['religious_school']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['hebrew_school']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['rosh_hashanah']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['yom_kippur']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['passover']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['saturdays']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['wednesdays']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['field_trips']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['fundraising_activity']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['special_talent']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['education_committee']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['substitute_grades']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['teaching_grades']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['room_parent']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['other']; ?>&nbsp;</td>
		<td><?php echo $parentVolunteer['ParentVolunteer']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $parentVolunteer['ParentVolunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $parentVolunteer['ParentVolunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $parentVolunteer['ParentVolunteer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parentVolunteer['ParentVolunteer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Parent Volunteer', true), array('action' => 'add')); ?></li>
	</ul>
</div>