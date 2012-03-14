<div class="guestbooks form">
<p>We appreciate you signing our Live Services guestbook each week to help us keep track of interest in our online services.</p>
<p>If you have any comments you'd like to submit you can contact us <?php echo $html->link('here', '/contact_us_emails'); ?>.</p>
<?php echo $form->create('Guestbook');?>
	<fieldset>
 		<legend>Live Services Viewer Guestbook</legend>
	<?php
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('location');
	?>
		<input name="name" type="hidden" />
		<input name="email" type="hidden" />
		<input name="subject" type="hidden" />
		<input name="message" type="hidden" />
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<h3><?php echo $html->link('Click here to skip guestbook and go to Live Online Services', array('action'=>'index'));?></h3>
