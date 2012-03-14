<?php $this->Html->css('register', null, array('inline' => false))?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.register .add').live('click', function(){
			$(this).parent('h3').load($(this).attr('href'));
			return false;
		});
	});
</script>
<h1>Step 1 of 3: <?php __('Student Registration'); ?></h1>
<p style="color:red">All 3 steps must be completed in order to register</p>
<div class="register">
<?php echo $this->Form->create('Student', array('url' => '/families/index/student')); ?>
<h2>Family Information</h2>
<div class="clearfix">
<?php		
	echo $this->Form->input('Family.family_name', array('label' => 'Family Last Name'));
	echo $this->Form->input('Family.phone');
	echo $this->Form->input('Family.address');
	echo $this->Form->input('Family.city');
	echo $this->Form->input('Family.zip');
?>
</div>
<h2>Student Information</h2>
<fieldset class="clearfix">
	<legend>Student #1</legend>
<?php
	echo $this->Form->input('Student.0.last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.0.first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.0.hebrew_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.0.birth_date', array('minYear' => date('Y')-20, 'maxYear' => date('Y')));
	echo $this->Form->input('Student.0.school_name', array('label' => 'Secular School Name'));
	echo $this->Form->input('Student.0.grade');
	echo $this->Form->input('Student.0.choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('Student.0.hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('Student.0.glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No' => 'No', 'To Read' => 'To Read', 'For Distance' => 'For Distance', 'Both' => 'Both')));
	echo $this->Form->input('Student.0.reading_level', array('options' => array('At grade level' => 'At grade level', 'Above grade leve' => 'Above grade level', 'Below grade level' => 'Below grade level')));
	echo $this->Form->input('Student.0.diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('Student.0.medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('Student.0.special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('Student.0.musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('Student.0.scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('Student.0.religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('Student.0.additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
</fieldset>
<fieldset class="clearfix">
	<legend><a class="toggle" href="#student2">Student #2 [Click to expand]</a></legend>
	<div id="student2" class="js-hide">
<?php
	echo $this->Form->input('Student.1.last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.1.first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.1.hebrew_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.1.birth_date', array('minYear' => date('Y')-20, 'maxYear' => date('Y')));
	echo $this->Form->input('Student.1.school_name', array('label' => 'Secular School Name'));
	echo $this->Form->input('Student.1.grade');
	echo $this->Form->input('Student.1.choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('Student.1.hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('Student.1.glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No' => 'No', 'To Read' => 'To Read', 'For Distance' => 'For Distance', 'Both' => 'Both')));
	echo $this->Form->input('Student.1.reading_level', array('options' => array('At grade level' => 'At grade level', 'Above grade leve' => 'Above grade level', 'Below grade level' => 'Below grade level')));
	echo $this->Form->input('Student.1.diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('Student.1.medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('Student.1.special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('Student.1.musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('Student.1.scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('Student.1.religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('Student.1.additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
	</div>
</fieldset>
<fieldset class="clearfix">
	<legend><a class="toggle" href="#student3">Student #3 [Click to expand]</a></legend>
	<div id="student3" class="js-hide">
<?php
	echo $this->Form->input('Student.2.last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.2.first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.2.hebrew_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.2.birth_date', array('minYear' => date('Y')-20, 'maxYear' => date('Y')));
	echo $this->Form->input('Student.2.school_name', array('label' => 'Secular School Name'));
	echo $this->Form->input('Student.2.grade');
	echo $this->Form->input('Student.2.choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('Student.2.hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('Student.2.glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No' => 'No', 'To Read' => 'To Read', 'For Distance' => 'For Distance', 'Both' => 'Both')));
	echo $this->Form->input('Student.2.reading_level', array('options' => array('At grade level' => 'At grade level', 'Above grade leve' => 'Above grade level', 'Below grade level' => 'Below grade level')));
	echo $this->Form->input('Student.2.diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('Student.2.medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('Student.2.special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('Student.2.musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('Student.2.scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('Student.2.religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('Student.2.additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
	</div>
</fieldset>
<fieldset class="clearfix">
	<legend><a class="toggle" href="#student4">Student #4 [Click to expand]</a></legend>
	<div id="student4" class="js-hide">
<?php
	echo $this->Form->input('Student.3.last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.3.first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.3.hebrew_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.3.birth_date', array('minYear' => date('Y')-20, 'maxYear' => date('Y')));
	echo $this->Form->input('Student.3.school_name', array('label' => 'Secular School Name'));
	echo $this->Form->input('Student.3.grade');
	echo $this->Form->input('Student.3.choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('Student.3.hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('Student.3.glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No' => 'No', 'To Read' => 'To Read', 'For Distance' => 'For Distance', 'Both' => 'Both')));
	echo $this->Form->input('Student.3.reading_level', array('options' => array('At grade level' => 'At grade level', 'Above grade leve' => 'Above grade level', 'Below grade level' => 'Below grade level')));
	echo $this->Form->input('Student.3.diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('Student.3.medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('Student.3.special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('Student.3.musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('Student.3.scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('Student.3.religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('Student.3.additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
	</div>
</fieldset>
<h2>Parent / Gaurdian Information</h2>
<fieldset class="clearfix">
	<legend>Parent #1</legend>
<?php
	echo $this->Form->input('Family.parent1_name', array('label' => 'Name'));
	echo $this->Form->input('Family.parent1_cell', array('label' => 'Cellphone'));
	echo $this->Form->input('Family.parent1_email', array('label' => 'Email'));
	echo $this->Form->input('Family.parent1_address', array('label' => 'Address (if different)'));
	echo $this->Form->input('Family.parent1_city', array('label' => 'City'));
	echo $this->Form->input('Family.parent1_zip', array('label' => 'Zipcode'));
	echo $this->Form->input('Family.parent1_occupation', array('label' => 'Occupation'));
	echo $this->Form->input('Family.parent1_work_phone', array('label' => 'Phone'));
	echo $this->Form->input('Family.parent1_communications', array('label' => 'Send Communications to both Addresses?'));
	echo $this->Form->input('Family.parent1_contact', array('label' => 'May we call you at work?'));
?>
</fieldset>
<fieldset class="clearfix">
	<legend>Parent #2</legend>
<?php
	echo $this->Form->input('Family.parent2_name', array('label' => 'Name'));
	echo $this->Form->input('Family.parent2_cell', array('label' => 'Cellphone'));
	echo $this->Form->input('Family.parent2_email', array('label' => 'Email'));
	echo $this->Form->input('Family.parent2_address', array('label' => 'Address (if different)'));
	echo $this->Form->input('Family.parent2_city', array('label' => 'City'));
	echo $this->Form->input('Family.parent2_zip', array('label' => 'Zipcode'));
	echo $this->Form->input('Family.parent2_occupation', array('label' => 'Occupation'));
	echo $this->Form->input('Family.parent2_work_phone', array('label' => 'Phone'));
	echo $this->Form->input('Family.parent2_communications', array('label' => 'Send Communications to both Addresses?'));
	echo $this->Form->input('Family.parent2_contact', array('label' => 'May we call you at work?'));
?>
</fieldset>
<h2>Photograph Release</h2>
<div class="clearfix">
<?php
	echo $this->Form->input('Family.photograph_release', array('label' => 'TBT has permission to take photos of my child for publicity purposes in various media. I understand no commercial use will be made of these photos.'));
	echo $this->Form->input('Family.photograph_release_signature', array('label' => 'Please enter your full name to sign this agreement'));
?>
</div>
<h2>Emergency</h2>
<fieldset class="clearfix">
	<legend>Someone to Contact when you cannot be reached</legend>
<?php
	echo $this->Form->input('Family.emergency_name', array('label' => 'Name'));
	echo $this->Form->input('Family.emergency_address', array('label' => 'Address'));
	echo $this->Form->input('Family.emergency_phone', array('label' => 'Phone'));
	echo $this->Form->input('Family.emergency_relationship', array('label' => 'Relationship to Student'));
?>
</fieldset>
<fieldset class="clearfix">
	<legend>Out of State contact in case of emergency</legend>
<?php
	echo $this->Form->input('Family.emergency_state_name', array('label' => 'Name'));
	echo $this->Form->input('Family.emergency_state_address', array('label' => 'Address'));
	echo $this->Form->input('Family.emergency_state_phone', array('label' => 'Phone'));
	echo $this->Form->input('Family.emergency_state_relationship', array('label' => 'Relationship to Student'));
?>
</fieldset>
<fieldset>
	<legend>TBT or its representative has my permission to secure emergency aid for my child, named above, in case i cannot be reached.</legend>
<?php
	echo $this->Form->input('Family.preferred_doctor');
	echo $this->Form->input('Family.doctor_phone', array('label' => 'Doctor\'s Phone'));
	echo $this->Form->input('Family.preferred_hospital');
?>
</fieldset>
<div class="clearfix">
	<?php 
	echo $this->Form->input('Family.parent_signature', array('label' => 'Please enter your full name as signature to the above agreement.')); ?>
</div>
<?php
echo $this->Form->end(__('Next Step', true));?>
</div>