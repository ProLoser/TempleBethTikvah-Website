<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
 		<legend><?php __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('hebrew_name');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('grade');
		echo $this->Form->input('school_name');
		echo $this->Form->input('parent1_name');
		echo $this->Form->input('parent1_cell');
		echo $this->Form->input('parent1_email');
		echo $this->Form->input('parent1_address');
		echo $this->Form->input('parent1_city');
		echo $this->Form->input('parent1_zip');
		echo $this->Form->input('parent1_communications');
		echo $this->Form->input('parent1_occupation');
		echo $this->Form->input('parent1_work_phone');
		echo $this->Form->input('parent1_contact');
		echo $this->Form->input('parent2_name');
		echo $this->Form->input('parent2_cell');
		echo $this->Form->input('parent2_email');
		echo $this->Form->input('parent2_address');
		echo $this->Form->input('parent2_city');
		echo $this->Form->input('parent2_zip');
		echo $this->Form->input('parent2_communications');
		echo $this->Form->input('parent2_work_phone');
		echo $this->Form->input('parent2_contact');
		echo $this->Form->input('choir');
		echo $this->Form->input('glasses');
		echo $this->Form->input('hearing_problems');
		echo $this->Form->input('reading_level');
		echo $this->Form->input('diet_and_allergies');
		echo $this->Form->input('medication_frequency');
		echo $this->Form->input('special_classes');
		echo $this->Form->input('scouting_programs');
		echo $this->Form->input('religious_award');
		echo $this->Form->input('musical_instruments');
		echo $this->Form->input('additional_information');
		echo $this->Form->input('photograph_release');
		echo $this->Form->input('photograph_release_signature');
		echo $this->Form->input('emergency_name');
		echo $this->Form->input('emergency_relationship');
		echo $this->Form->input('emergency_address');
		echo $this->Form->input('emergency_phone');
		echo $this->Form->input('emergency_state_name');
		echo $this->Form->input('emergency_state_relationship');
		echo $this->Form->input('emergency_state_address');
		echo $this->Form->input('emergency_state_phone');
		echo $this->Form->input('preferred_doctor');
		echo $this->Form->input('doctor_phone');
		echo $this->Form->input('preferred_hospital');
		echo $this->Form->input('parent_signature');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Student.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
	</ul>
</div>