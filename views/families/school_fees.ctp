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
<h1>Step 3 of 3: School Fees</h1>
<div class="totals">
<?php echo $this->Form->create('SchoolFee', array('url' => '/families/index/school_fees'));?>
	<?php echo $this->Form->input('SchoolFee.family_id', array('type' => 'hidden')); ?>
	<div class="clearfix">
		<?php echo $this->Form->input('SchoolFee.1_day_students', array('default' => 0, 'label' => '# Children Registered 1 days/week (Gr. 1,2,8)'));?>
		<div class="input right">= $<span id="1day">0</span></div>
		<div class="input right">x $525</div>
	</div>
	<div class="clearfix">
		<?php echo $this->Form->input('SchoolFee.2_day_students', array('default' => 0, 'label' => '# Children Registered 2 day/week (Gr. 3-7)'));?>
		<div class="input right">= $<span id="2day">0</span></div>
		<div class="input right">x $800</div>
	</div>
	<div class="clearfix">
		<div class="input right">= $<span id="conf">0</span></div>
		<div class="input right">x $725</div>
		<?php echo $this->Form->input('SchoolFee.confirmation_students', array('default' => 0, 'label' => '# Children Registered Confirmation (Gr. 10)'));?>
	</div>
	<div><?php echo $this->Form->input('SchoolFee.optional_contribution', array('default' => 0, 'label' => 'Optional Contribution to Religious School Scholarship fund $')); ?></div>
	<hr>
	<div class="clearfix"><p class="right"><strong>Grand Total:</strong> $<span id="total"></span></p></div>
	<hr>
	<div><?php echo $this->Form->input('SchoolFee.payment_frequency', array('label' => 'Payments will be made (in full, monthly, other...)')); ?></div>
	<div><?php echo $this->Form->input('SchoolFee.payment_method', array('type' => 'radio', 'options' => array('Check' => 'Check', 'Credit Card' => 'Credit Card')));	?></div>
<?php echo $this->Form->end(__('Complete', true));?>
</div>