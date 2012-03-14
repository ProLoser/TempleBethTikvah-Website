<h1>Live Online Services</h1>
<p>We apologize if you experience a disconnect in service. Please refresh the page if this happens.</p>
<?php if (!isset($cookie)): ?>
<style>embed{margin:20px 0}#GuestbookIndexForm {margin-top:150px;width:30%;float:right;}#GuestbookIndexForm *{margin:0;padding:0;}#GuestbookIndexForm label{text-align:left;}</style>
<?php echo $form->create('Guestbook');?>
	<fieldset style="margin:10px 0;padding:5px;">
 		<legend>Viewer Guestbook</legend>
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
<?php else: ?>
<style>embed{position:relative;left:50%;top:20px;margin-left:-240px;}</style>
<?php endif; ?>
<?php echo $this->Element('stickam'); ?>

<p style="text-align:center">Comments or Questions? Contact us <?php echo $html->link('here', '/contact_us_emails'); ?>.</p>
<iframe src="//www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=250&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=805t7gcmnsq7mttk8bgmpnugoo%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="250" frameborder="0" scrolling="no"></iframe>