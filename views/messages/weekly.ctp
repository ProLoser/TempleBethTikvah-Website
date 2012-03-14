<div class="messages weekly">
<h1>Rabbi's Weekly Message</h1>	
			
<div>
	<?php echo $html->image('Portraits/Rabbi_Milhander.jpg',array('alt'=>'Rabbi Kenneth Milhander','class'=>'right')); ?>
	<h4>"<?php echo $message['Message']['title']; ?>" <?php echo $time->format('jS F Y',$message['Message']['published']); ?></h4>
	<?php echo $message['Message']['message']; ?>
	<p>Kenneth Milhander</p>
</div>
</div>