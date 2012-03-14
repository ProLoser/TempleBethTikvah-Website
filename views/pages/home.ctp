<?php $this->pageTitle = ''; ?>
<h1>Welcome to Temple Beth Tikvah</h1>
<?php echo $html->image('Portraits/Avdee-VR-Milhander_reduced.jpg',array('alt'=>'Welcome to Temple Beth Tikvah!','style'=>'width:100%;margin:10px 10px 10px 0')) ?>
<center>
	<p>Cantor Michael Avdee, Miriam Van Raalte (Administrator), Rabbi Kenneth Milhander</p>
	<h3>Home of Project Legacy</h3>
	<h3>and</h3>
	<h3 style="font-style: italic">The Asa Center for Lifelong Jewish Education</h3>
	<h2 style="font-size:130%"><?php echo $this->Html->link('Live Sanctuary Camera', array('controller' => 'guestbooks', 'action' => 'add'), array('style' => 'text-decoration:underline'))?></h2>
</center>