<div class="parentVolunteers form">
<?php echo $this->Form->create('ParentVolunteer');?>
	<fieldset>
 		<legend><?php __('Edit Parent Volunteer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('family_name');
		echo $this->Form->input('children');
		echo $this->Form->input('grades');
		echo $this->Form->input('religious_school');
		echo $this->Form->input('hebrew_school');
		echo $this->Form->input('rosh_hashanah');
		echo $this->Form->input('yom_kippur');
		echo $this->Form->input('passover');
		echo $this->Form->input('saturdays');
		echo $this->Form->input('wednesdays');
		echo $this->Form->input('field_trips');
		echo $this->Form->input('fundraising_activity');
		echo $this->Form->input('special_talent');
		echo $this->Form->input('education_committee');
		echo $this->Form->input('substitute_grades');
		echo $this->Form->input('teaching_grades');
		echo $this->Form->input('room_parent');
		echo $this->Form->input('other');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ParentVolunteer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ParentVolunteer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parent Volunteers', true), array('action' => 'index'));?></li>
	</ul>
</div>