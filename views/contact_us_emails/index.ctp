<h1>Contact Us</h1><?php $html->image('legacybldg.jpg',array('alt'=>'Temple Beth Tikvah','class'=>'right')); ?>
<h2>Temple Information</h2>
<div class="contactUsEmails index">
	<p class="left" style="width:50%;padding:0">Temple Beth Tikvah<br />
	1600 N. Acacia Ave.<br />
	Fullerton, CA 92831</p>
	<p>Temple Office: (714) 871-3535<br />
	Religious School: (714) 871-3570<br />
	ECLC/Preschool: (714) 871-9555</p>
</div>
<style type="text/css">
.input {
	margin: 10px 0;
}
label {
	margin-bottom: 2px;
}
.captcha label {
	width: auto;
}
.captcha input {
	width: 170px;
	margin-right: 5px;
}
</style>
<div class="contactUsEmails form">
<?php echo $form->create('ContactUsEmail',array('action'=>'index'));?>
	<fieldset>
 		<legend><h2>Email Us</h2></legend>
	<?php
		echo $form->input('category');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('subject');
		echo $form->input('message');
		echo $form->input('captcha', array('label' => 'Are You Human?', 'after' => '(Yes or No)', 'div' => array('class' => 'input text captcha')));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
