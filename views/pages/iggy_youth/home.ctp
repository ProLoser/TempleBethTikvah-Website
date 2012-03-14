<?php 
	$this->pageTitle = 'IGGY Youth'; 
	echo $html->css('iggyyouth', null, array('inline' => false));
?>
<h1>ICETY Gesher Garin Galim Youth</h1>
<div id="iggynav">
	<?php echo $html->link('Advisors',array('controller'=>'iggy_advisors','action'=>'index'), array('id' => 'advisors')) ?>
	<?php echo $html->link('IGGGY Post',array('controller'=>'iggy_posts','action'=>'index'), array('id' => 'post')) ?>
	<?php echo $html->link('Membership Papers','/YouthGroup2009-2010forms.doc', array('class' => 'pdf', 'target' => '_blank', 'id' => 'membership')) ?>
	<?php echo $html->link('Picture Gallery','http://iggygallery.templebethtikvah.com', array('id' => 'gallery')) ?>
	<?php echo $html->link('Contact Us',array('controller'=>'contact_us_emails','action'=>'index', 1), array('id' => 'contact')) ?>
</div>
<div class="left"><?php echo $this->element('iggy_youth/google-agenda'); ?></div>
<p>ICETY is for High School students in grades 9-12. They are affiliated with NFTY (North American Federation of Temple Youth). Youth can participate in local, regional, and national events.</p>
<p>Gesher is for Middle School students in grades 6-8. youth can participate in local events frequently with youth from neighboring Temples.</p>
<p>Garin is for our Elementary School students in grades 3-5. They participate in events 4 times a year in addition to attending monthly family services in holiday celebrations.</p>
<p>IGGY has an anual ice skating event during the winter for all the participants.</p>