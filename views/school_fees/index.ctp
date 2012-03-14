<?php $this->Html->css('register', null, array('inline' => false))?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#SchoolFee1DayStudents').change(function(){
			$('#1day').html($(this).val() * 525);
			total();
		});
		$('#SchoolFee2DayStudents').change(function(){
			$('#2day').html($(this).val() * 800);
			total();
		});
		$('#SchoolFeeConfirmationStudents').change(function(){
			$('#conf').html($(this).val() * 725);
			total();
		});
		$('#SchoolFeeOptionalContribution').change(function(){
			total();
		});
	});
	function total() {
		$('#total').html(
			Number($('#1day').html()) + Number($('#2day').html()) + Number($('#conf').html()) + Number($('#SchoolFeeOptionalContribution').val())
		);
	}
</script>
<h1>School Fees</h1>
<div class="totals">
<?php echo $this->Form->create('SchoolFee');?>
	<div><?php echo $this->Form->input('family_name', array('Family\'s Last Name')); ?></div>
	<div>
		<?php echo $this->Form->input('1_day_students', array('default' => 0, 'label' => '# Children Registered 2 days/week (Gr. 3-7)'));?>
		<div class="input">x $525</div>
		<div class="input">= $<span id="1day">0</span></div>
	</div>
	<div>
		<?php echo $this->Form->input('2_day_students', array('default' => 0, 'label' => '# Children Registered 1 day/week (Gr. 1,2,8)'));?>
		<div class="input">x $800</div>
		<div class="input">= $<span id="2day">0</span></div>
	</div>
	<div>
		<?php echo $this->Form->input('confirmation_students', array('default' => 0, 'label' => '# Children Registered Confirmation (Gr. 10)'));?>
		<div class="input">x $725</div>
		<div class="input">= $<span id="conf">0</span></div>
	</div>
	<div><?php echo $this->Form->input('optional_contribution', array('default' => 0, 'label' => 'Optional Contribution to Religious School Scholarship fund')); ?></div>
	<hr>
	<strong>Grand Total:</strong> $<span id="total"></span>
	<hr>
	<div><?php echo $this->Form->input('payment_frequency', array('label' => 'Payments will be made (in full, monthly, other...)')); ?></div>
	<div><?php echo $this->Form->input('payment_method', array('options' => array('-- Select --', 'Check', 'Credit Card')));	?></div>
<?php echo $this->Form->end(__('Submit', true));?>
</div>