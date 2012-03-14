<div class="schoolFees form">
<?php echo $this->Form->create('SchoolFee');?>
	<fieldset>
 		<legend><?php __('Edit School Fee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('confirmation_students');
		echo $this->Form->input('2_day_students');
		echo $this->Form->input('1_day_students');
		echo $this->Form->input('optional_contribution');
		echo $this->Form->input('family_name');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('payment_frequency');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SchoolFee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SchoolFee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List School Fees', true), array('action' => 'index'));?></li>
	</ul>
</div>