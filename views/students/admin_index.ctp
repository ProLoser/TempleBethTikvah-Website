<div class="students index">
	<h2><?php __('Students');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('hebrew_name');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('grade');?></th>
			<th><?php echo $this->Paginator->sort('school_name');?></th>
			<th><?php echo $this->Paginator->sort('parent1_name');?></th>
			<th><?php echo $this->Paginator->sort('parent1_cell');?></th>
			<th><?php echo $this->Paginator->sort('parent1_email');?></th>
			<th><?php echo $this->Paginator->sort('parent1_address');?></th>
			<th><?php echo $this->Paginator->sort('parent1_city');?></th>
			<th><?php echo $this->Paginator->sort('parent1_zip');?></th>
			<th><?php echo $this->Paginator->sort('parent1_communications');?></th>
			<th><?php echo $this->Paginator->sort('parent1_occupation');?></th>
			<th><?php echo $this->Paginator->sort('parent1_work_phone');?></th>
			<th><?php echo $this->Paginator->sort('parent1_contact');?></th>
			<th><?php echo $this->Paginator->sort('parent2_name');?></th>
			<th><?php echo $this->Paginator->sort('parent2_cell');?></th>
			<th><?php echo $this->Paginator->sort('parent2_email');?></th>
			<th><?php echo $this->Paginator->sort('parent2_address');?></th>
			<th><?php echo $this->Paginator->sort('parent2_city');?></th>
			<th><?php echo $this->Paginator->sort('parent2_zip');?></th>
			<th><?php echo $this->Paginator->sort('parent2_communications');?></th>
			<th><?php echo $this->Paginator->sort('parent2_work_phone');?></th>
			<th><?php echo $this->Paginator->sort('parent2_contact');?></th>
			<th><?php echo $this->Paginator->sort('choir');?></th>
			<th><?php echo $this->Paginator->sort('glasses');?></th>
			<th><?php echo $this->Paginator->sort('hearing_problems');?></th>
			<th><?php echo $this->Paginator->sort('reading_level');?></th>
			<th><?php echo $this->Paginator->sort('diet_and_allergies');?></th>
			<th><?php echo $this->Paginator->sort('medication_frequency');?></th>
			<th><?php echo $this->Paginator->sort('special_classes');?></th>
			<th><?php echo $this->Paginator->sort('scouting_programs');?></th>
			<th><?php echo $this->Paginator->sort('religious_award');?></th>
			<th><?php echo $this->Paginator->sort('musical_instruments');?></th>
			<th><?php echo $this->Paginator->sort('additional_information');?></th>
			<th><?php echo $this->Paginator->sort('photograph_release');?></th>
			<th><?php echo $this->Paginator->sort('photograph_release_signature');?></th>
			<th><?php echo $this->Paginator->sort('emergency_name');?></th>
			<th><?php echo $this->Paginator->sort('emergency_relationship');?></th>
			<th><?php echo $this->Paginator->sort('emergency_address');?></th>
			<th><?php echo $this->Paginator->sort('emergency_phone');?></th>
			<th><?php echo $this->Paginator->sort('emergency_state_name');?></th>
			<th><?php echo $this->Paginator->sort('emergency_state_relationship');?></th>
			<th><?php echo $this->Paginator->sort('emergency_state_address');?></th>
			<th><?php echo $this->Paginator->sort('emergency_state_phone');?></th>
			<th><?php echo $this->Paginator->sort('preferred_doctor');?></th>
			<th><?php echo $this->Paginator->sort('doctor_phone');?></th>
			<th><?php echo $this->Paginator->sort('preferred_hospital');?></th>
			<th><?php echo $this->Paginator->sort('parent_signature');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($students as $student):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $student['Student']['id']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['last_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['first_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['hebrew_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['birth_date']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['address']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['city']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['zip']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['grade']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['school_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_cell']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_email']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_address']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_city']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_zip']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_communications']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_occupation']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_work_phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent1_contact']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_cell']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_email']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_address']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_city']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_zip']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_communications']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_work_phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent2_contact']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['choir']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['glasses']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['hearing_problems']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['reading_level']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['diet_and_allergies']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['medication_frequency']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['special_classes']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['scouting_programs']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['religious_award']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['musical_instruments']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['additional_information']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['photograph_release']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['photograph_release_signature']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_relationship']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_address']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_state_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_state_relationship']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_state_address']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['emergency_state_phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['preferred_doctor']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['doctor_phone']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['preferred_hospital']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['parent_signature']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $student['Student']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['Student']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student', true), array('action' => 'add')); ?></li>
	</ul>
</div>