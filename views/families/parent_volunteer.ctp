<?php $this->Html->css('register', null, array('inline' => false))?>
<h1>Step 2 of 3: Parent Volunteers</h1>
<p>We need your active involvement to implement special projects within our school. Please help us by volunteering for at least one activity per child enrolled in our school.</p>
<?php echo $this->Form->create('ParentVolunteer', array('url' => '/families/index/parent_volunteer'));?>
<div class="register clearfix">
	<?php
		echo $this->Form->input('ParentVolunteer.family_id', array('type' => 'hidden'));
		echo $this->Form->input('ParentVolunteer.religious_school', array('label' => 'I can help on the first day of Religiou School (Saturday, September 11)'));
		echo $this->Form->input('ParentVolunteer.hebrew_school', array('label' => 'I can help on the first day of Hebrew School (Wednesday, September 15)'));
		echo $this->Form->input('ParentVolunteer.rosh_hashanah', array('label' => 'I can help with the Children\'s Rosh hashanah services (Thursday, September 9)'));
		echo $this->Form->input('ParentVolunteer.yom_kippur', array('label' => 'I can help with the Children\'s Yom Kippur services (Saturday, September 18)'));
		echo $this->Form->input('ParentVolunteer.passover', array('label' => 'I can help with the student seder for Passover'));
		echo $this->Form->input('ParentVolunteer.saturdays', array('label' => 'I can observe/volunteer in a classroom on Saturdays (on an occasional basis)'));
		echo $this->Form->input('ParentVolunteer.wednesdays', array('label' => 'I can observe/volunteer in a classroom on Wednesdays (on an occasional basis)'));
		echo $this->Form->input('ParentVolunteer.field_trips', array('label' => 'I can chaperone/drive on a field trip (must have proof of auto insurnace and seat belts for all passengers)'));
		echo $this->Form->input('ParentVolunteer.fundraising_activity', array('label' => 'I can work on a fundraising activity for the school (Book Fair, Passover Candy Sale, Other...)'));
		echo $this->Form->input('ParentVolunteer.special_talent', array('label' => 'I have a special talent I want to share with children'));
		echo $this->Form->input('ParentVolunteer.education_committee', array('label' => 'I am interested in participating on the education committee'));
		echo $this->Form->input('ParentVolunteer.substitute_grades', array('label' => 'I am interested in substitute-teaching in Religious/Hebrew school grade(s)'));
		echo $this->Form->input('ParentVolunteer.teaching_grades', array('label' => 'I am interested in a teaching job in the Religious/Hebrew school grade(s)'));
		echo $this->Form->input('ParentVolunteer.room_parent', array('label' => 'I am interested in being a room parent for Grade'));
		echo $this->Form->input('ParentVolunteer.other', array('label' => 'Any other area we forgot to mention'));
	?>
</div>
<?php echo $this->Form->end(__('Next Step', true));?>