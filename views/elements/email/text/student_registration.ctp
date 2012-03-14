<style type="text/css">td{border-top:1px solid #000}</style>
<table border="0" cellpadding="5" style="width:100%">
<tr><td colspan="2">
	<h1>Student Registration
	<div style="font-size:50%">Submitted: <?php echo $data['SchoolFee']['created']?></div></h1>

	<p><strong>Family Name:</strong> <?php echo $data['Family']['family_name']?></p>
	<p><strong>Phone:</strong> <?php echo $data['Family']['phone']?></p>
	<p><?php echo $data['Family']['address']?></p>
	<p><?php echo $data['Family']['city']?> <?php echo $data['Family']['zip']?></p>
</td></tr>
<?php 
	foreach ($data['Student'] as $student):
	if (!empty($student['first_name'])):
?>
<tr><td colspan="2">
	<h2><?php echo $student['last_name']?>, <?php echo $student['first_name']?>
	<div style="font-size:70%">Hebrew: <?php echo $student['hebrew_name']?></div></h2>
	<p><strong>Birthday:</strong> <?php echo $student['birth_date']['month']?>-<?php echo $student['birth_date']['day']?>-<?php echo $student['birth_date']['year']?></p>
	<p><strong>Secular school grade:</strong> <?php echo $student['grade']?></p>
	<p><strong>Secular school name:</strong> <?php echo $student['school_name']?></p>
	<p><strong>Participate in choir:</strong> <?php if ($student['choir']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Glasses:</strong> <?php echo $student['glasses']?></p>
	<p><strong>Hearing problems:</strong> <?php echo $student['hearing_problems']?></p>
	<p><strong>Reading level:</strong> <?php echo $student['reading_level']?></p>
	<p><strong>Dietary needs or allergies:</strong> <?php echo $student['diet_and_allergies']?></p>
	<p><strong>Medications and frequency:</strong> <?php echo $student['medication_frequency']?></p>
	<p><strong>Special classes:</strong> <?php echo $student['special_classes']?></p>
	<p><strong>Scouting programs:</strong> <?php echo $student['scouting_programs']?></p>
	<p><strong>Religious award:</strong> <?php if ($student['religious_award']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Musical instruments:</strong> <?php echo $student['musical_instruments']?></p>
	<p><strong>Additional information:</strong> <?php echo $student['additional_information']?></p>
</td></tr>
<?php 
	endif;
	endforeach;
?>
<tr><td width="50%">
	<h2>Parent #1: <?php echo $data['Family']['parent1_name']?></h2>
	<p><strong>Cell Phone:</strong> <?php echo $data['Family']['parent1_cell']?></p>
	<p><strong>Email:</strong> <?php echo $data['Family']['parent1_email']?></p>
	<p><strong>Address:</strong> <?php echo $data['Family']['parent1_address']?></p>
	<p><?php echo $data['Family']['parent1_city']?> <?php echo $data['Family']['parent1_zip']?></p>
	<p><strong>May we contact this parent:</strong> <?php if ($data['Family']['parent1_communications']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Occupation:</strong> <?php echo $data['Family']['parent1_occupation']?></p>
	<p><strong>Work Phone:</strong> <?php echo $data['Family']['parent1_work_phone']?></p>
	<p><strong>Contact at work:</strong> <?php if ($data['Family']['parent1_contact']) echo 'Yes'; else echo 'No';?></p>
</td>
<td width="50%">
	<h2>Parent #2: <?php echo $data['Family']['parent2_name']?></h2>
	<p><strong>Cell Phone:</strong> <?php echo $data['Family']['parent2_cell']?></p>
	<p><strong>Email:</strong> <?php echo $data['Family']['parent2_email']?></p>
	<p><strong>Address:</strong> <?php echo $data['Family']['parent2_address']?></p>
	<p><?php echo $data['Family']['parent2_city']?> <?php echo $data['Family']['parent2_zip']?></p>
	<p><strong>May we contact this parent:</strong> <?php if ($data['Family']['parent2_communications']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Occupation:</strong> <?php echo $data['Family']['parent2_occupation']?></p>
	<p><strong>Work Phone:</strong> <?php echo $data['Family']['parent2_work_phone']?></p>
	<p><strong>Contact at work:</strong> <?php if ($data['Family']['parent2_contact']) echo 'Yes'; else echo 'No';?></p>
</td></tr>
<tr><td>
	<h2>Child Photos</h2>
</td><td>
	<p><strong>Permision to use child's photo:</strong> <?php if ($data['Family']['photograph_release']) echo 'Yes'; else echo 'No';?></p>
</td></tr>
<tr><td>
	<h2>Emergency Contact</h2>
	<p><strong>Name:</strong> <?php echo $data['Family']['emergency_name']?></p>
	<p><strong>Relationship:</strong> <?php echo $data['Family']['emergency_relationship']?></p>
	<p><strong>Address:</strong> <?php echo $data['Family']['emergency_address']?></p>
	<p><strong>Phone:</strong> <?php echo $data['Family']['emergency_phone']?></p>
</td><td>
	<h2>Out of State Emergency</h2>
	<p><strong>Name:</strong> <?php echo $data['Family']['emergency_state_name']?></p>
	<p><strong>Relationship:</strong> <?php echo $data['Family']['emergency_state_relationship']?></p>
	<p><strong>Address:</strong> <?php echo $data['Family']['emergency_state_address']?></p>
	<p><strong>Phone:</strong> <?php echo $data['Family']['emergency_state_phone']?></p>
</td></tr>
<tr><td>
	<h2>Doctor</h2>
	<p><strong>Doctors Name:</strong> <?php echo $data['Family']['preferred_doctor']?></p>
	<p><strong>Doctors Phone:</strong> <?php echo $data['Family']['doctor_phone']?></p>
</td><td>
	<p><strong>Preferred Hospital:</strong> <?php echo $data['Family']['preferred_hospital']?></p>
	<p><strong>Sign here to verify:</strong> <?php echo $data['Family']['parent_signature']?></p>
</td></tr>
<tr><td>
	<h2>Parent Volunteer</h2>
	<p><strong>First day of Religious School:</strong> <?php if ($data['ParentVolunteer']['religious_school']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>First day of Hebrew School:</strong> <?php if ($data['ParentVolunteer']['hebrew_school']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Children's Rosh hashanah services:</strong> <?php if ($data['ParentVolunteer']['rosh_hashanah']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Children's Yom Kippur services:</strong> <?php if ($data['ParentVolunteer']['yom_kippur']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Student Seder for Passover:</strong> <?php if ($data['ParentVolunteer']['passover']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Observe/volunteer classroom on Saturdays:</strong> <?php if ($data['ParentVolunteer']['saturdays']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Observe/volunteer classroom on Wednesdays:</strong> <?php if ($data['ParentVolunteer']['wednesdays']) echo 'Yes'; else echo 'No';?></p>
</td><td>
	<p><strong>Chaperone/drive on field trip:</strong> <?php if ($data['ParentVolunteer']['field_trips']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Fundraisers:</strong> <?php echo $data['ParentVolunteer']['fundraising_activity']?></p>
	<p><strong>Skills:</strong> <?php echo $data['ParentVolunteer']['special_talent']?></p>
	<p><strong>Education committee:</strong> <?php if ($data['ParentVolunteer']['education_committee']) echo 'Yes'; else echo 'No';?></p>
	<p><strong>Substitute for grade(s):</strong> <?php echo $data['ParentVolunteer']['substitute_grades']?></p>
	<p><strong>Teaching grade(s):</strong> <?php echo $data['ParentVolunteer']['teaching_grades']?></p>
	<p><strong>Room parent for grade(s):</strong> <?php echo $data['ParentVolunteer']['room_parent']?></p>
	<p><strong>Other:</strong> <?php echo $data['ParentVolunteer']['other']?></p>
</td></tr>
<tr><td>
	<h2>School Fees</h2>
	<p><strong>Payment Method:</strong> <?php echo $data['SchoolFee']['payment_method']?></p>
	<p><strong>Payment Frequency:</strong> <?php echo $data['SchoolFee']['payment_frequency']?></p>
</td><td>	
	<p><strong>1 day a week:</strong> <?php echo $data['SchoolFee']['1_day_students']?> x $525 = $<?php echo 525 * $data['SchoolFee']['1_day_students'];?></p>
	<p><strong>2 days a week:</strong> <?php echo $data['SchoolFee']['2_day_students']?> x $800 = $<?php echo 525 * $data['SchoolFee']['2_day_students'];?></p>
	<p><strong>Confirmation:</strong> <?php echo $data['SchoolFee']['confirmation_students']?> x $725 = $<?php echo 525 * $data['SchoolFee']['confirmation_students'];?></p>
	<p><strong>Donation:</strong> $<?php echo $data['SchoolFee']['optional_contribution']?></p>
	<hr>
	<p><strong>Total:</strong> $<?php echo $data['SchoolFee']['optional_contribution'] + $data['SchoolFee']['1_day_students'] * 525 + $data['SchoolFee']['2_day_students'] * 800 + $data['SchoolFee']['confirmation_students'] * 725?></p>
</tr>
</table>
<?php //die;?>