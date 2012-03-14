<?php $this->Html->css('register', null, array('inline' => false))?>
<h1><?php __('Student Registration'); ?></h1>
<div class="register">
<h2>Student Information</h2>
<div class="clearfix">
<?php echo $this->Form->create('Student');
	echo $this->Form->input('last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('hebrew_name', array('div' => array('class' => 'left')));
?>
<?php echo $this->Form->input('birth_date'); ?>
<?php
	echo $this->Form->input('address');
	echo $this->Form->input('city');
	echo $this->Form->input('zip');
?>
<?php
	echo $this->Form->input('phone');
	echo $this->Form->input('grade');
	echo $this->Form->input('school_name');
?>
</div>
<h2>Parent / Gaurdian Information</h2>
<fieldset class="clearfix">
	<legend>Parent #1</legend>
<?php
	echo $this->Form->input('parent1_name', array('label' => 'Name'));
	echo $this->Form->input('parent1_cell', array('label' => 'Cellphone'));
	echo $this->Form->input('parent1_email', array('label' => 'Email'));
	echo $this->Form->input('parent1_address', array('label' => 'Address (if different)'));
	echo $this->Form->input('parent1_city', array('label' => 'City'));
	echo $this->Form->input('parent1_zip', array('label' => 'Zipcode'));
	echo $this->Form->input('parent1_occupation', array('label' => 'Occupation'));
	echo $this->Form->input('parent1_work_phone', array('label' => 'Phone'));
	echo $this->Form->input('parent1_communications', array('label' => 'Send Communications to both Addresses?'));
	echo $this->Form->input('parent1_contact', array('label' => 'May we call you at work?'));
?>
</fieldset>
<fieldset class="clearfix">
	<legend>Parent #2</legend>
<?php
	echo $this->Form->input('parent2_name', array('label' => 'Name'));
	echo $this->Form->input('parent2_cell', array('label' => 'Cellphone'));
	echo $this->Form->input('parent2_email', array('label' => 'Email'));
	echo $this->Form->input('parent2_address', array('label' => 'Address (if different)'));
	echo $this->Form->input('parent2_city', array('label' => 'City'));
	echo $this->Form->input('parent2_zip', array('label' => 'Zipcode'));
	echo $this->Form->input('parent2_occupation', array('label' => 'Occupation'));
	echo $this->Form->input('parent2_work_phone', array('label' => 'Phone'));
	echo $this->Form->input('parent2_communications', array('label' => 'Send Communications to both Addresses?'));
	echo $this->Form->input('parent2_contact', array('label' => 'May we call you at work?'));
?>
</fieldset>
<h2>Student Information</h2>
<div class="clearfix">
<?php
	echo $this->Form->input('choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No', 'To Read', 'For Distance', 'Both')));
	echo $this->Form->input('reading_level', array('options' => array('At grade level', 'Above grade level', 'Below grade level')));
	echo $this->Form->input('diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
</div>
<h2>Photograph Release</h2>
<div class="clearfix">
<?php
	echo $this->Form->input('photograph_release', array('label' => 'TBT has permission to take photos of my child for publicity purposes in various media. I understanad no commercial use will be made of these photos.'));
	echo $this->Form->input('photograph_release_signature', array('label' => 'Please enter your full name to sign this agreement'));
?>
</div>
<h2>Emergency</h2>
<fieldset class="clearfix">
	<legend>Someone to Contact when you cannot be reached</legend>
<?php
	echo $this->Form->input('emergency_name', array('label' => 'Name'));
	echo $this->Form->input('emergency_address', array('label' => 'Address'));
	echo $this->Form->input('emergency_phone', array('label' => 'Phone'));
	echo $this->Form->input('emergency_relationship', array('label' => 'Relationship to Student'));
?>
</fieldset>
<fieldset class="clearfix">
	<legend>Out of State contact in case of emergency</legend>
<?php
	echo $this->Form->input('emergency_state_name', array('label' => 'Name'));
	echo $this->Form->input('emergency_state_address', array('label' => 'Address'));
	echo $this->Form->input('emergency_state_phone', array('label' => 'Phone'));
	echo $this->Form->input('emergency_state_relationship', array('label' => 'Relationship to Student'));
?>
</fieldset>
<fieldset>
	<legend>TBT or its representative has my permission to secure emergency aid for my child, named above, in case i cannot be reached.</legend>
<?php
	echo $this->Form->input('preferred_doctor');
	echo $this->Form->input('doctor_phone', array('label' => 'Doctor\'s Phone'));
	echo $this->Form->input('preferred_hospital');
?>
</fieldset>
<div class="clearfix">
	<?php 
	echo $this->Form->input('parent_signature', array('label' => 'Please enter your full name as signature to the above agreement.')); ?>
</div>
<?php
echo $this->Form->end(__('Submit', true));?>
</div>