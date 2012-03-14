<h1>Men's Club</h1>
<br>

<?php echo $this->Html->image('mens_club/mens_club_2010.jpg', array('alt'=>'Mens Club: Joke Breakfast 2010')); ?>

<h2><?php echo $html->link('Purpose', array('controller' => 'pages', 'action' => 'mens_club', 'purpose'))?></h2>
<h2><?php echo $html->link('Membership', array('controller' => 'pages', 'action' => 'mens_club', 'membership'))?></h2>
<h3><?php echo $this->Html->link('Membership Application Flyer', '/Mens_Club_Flyer.pdf', array('class' => 'pdf', 'target' => '_blank'));?></h3>
<h2><?php echo $this->Html->link('Scroll Article', array('controller' => 'messages', 'action' => 'mens_club'))?></h2>
<h2><?php echo $html->link('Calendar', array('controller' => 'pages', 'action' => 'mens_club', 'calendar'))?></h2>
<h2><?php echo $html->link('Photos', array('controller' => 'pages', 'action' => 'mens_club', 'photos'))?></h2>
<h2><?php echo $html->link('Contact Us', array('controller' => 'pages', 'action' => 'mens_club', 'contact_us'))?></h2>
