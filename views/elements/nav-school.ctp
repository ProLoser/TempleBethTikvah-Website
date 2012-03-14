<li class="sublist">Religious School<ul>
	<li><a href="http://sites.google.com/a/templebethtikvah.com/director-of-education/">Director's Message</a></li>
	<li><?php echo $this->Html->link('Philosophy', array('controller' => 'pages', 'action' => 'display', 'school/philosophy'));?></li>
	<li><?php echo $this->Html->link('Curriculum', array('controller' => 'pages', 'action' => 'display', 'school/curriculum'));?></li>
	<?php echo $this->element('nav-google_sites')?>
	<li><?php echo $this->Html->link('Calendar', array('controller' => 'pages', 'action' => 'display', 'school/calendar'));?></li>
	<li><?php echo $this->Html->link('Student Registration', array('controller' => 'families', 'action' => 'index'));?></li>
</ul></li>