<fieldset class="clearfix">
	<legend>Student #<?php echo $id?></legend>
<?php
	echo $this->Form->input('Student.'.$id.'.last_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.'.$id.'.first_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.'.$id.'.hebrew_name', array('div' => array('class' => 'left')));
	echo $this->Form->input('Student.'.$id.'.birth_date');
	echo $this->Form->input('Student.'.$id.'.school_name', array('label' => 'Secular School Name'));
	echo $this->Form->input('Student.'.$id.'.grade');
	echo $this->Form->input('Student.'.$id.'.choir', array('label' => 'Will your child participate in choir?'));
	echo $this->Form->input('Student.'.$id.'.hearing_problems', array('label' => 'Does your student have any hearing problems?'));
	echo $this->Form->input('Student.'.$id.'.glasses', array('label' => 'Does the student wear glasses?', 'options' => array('No', 'To Read', 'For Distance', 'Both')));
	echo $this->Form->input('Student.'.$id.'.reading_level', array('options' => array('At grade level', 'Above grade level', 'Below grade level')));
	echo $this->Form->input('Student.'.$id.'.diet_and_allergies', array('label' => 'Does your child have any dietary restrictions or allergies?'));
	echo $this->Form->input('Student.'.$id.'.medication_frequency', array('label' => 'What medication does your child take and how frequently (times of the day)'));
	echo $this->Form->input('Student.'.$id.'.special_classes', array('label' => 'What special secular class programs is your child in? (ie: GATE, RSP)'));
	echo $this->Form->input('Student.'.$id.'.musical_instruments', array('label' => 'Does your child play any instruments?'));
	echo $this->Form->input('Student.'.$id.'.scouting_programs', array('label' => 'What scouting program is your child in?'));
	echo $this->Form->input('Student.'.$id.'.religious_award', array('label' => 'Do you want them to work towards a religious award?'));
	echo $this->Form->input('Student.'.$id.'.additional_information', array('label' => 'Please provide any additional information (ie talents, interests, home situation, etc)'));
?>
</fieldset>
<h3><?php echo $this->Html->link('Click here to add another student', array('action' => 'add', $id + 1), array('class' => 'add'))?></h3>