<style type="text/css">
.projectlegacy h3 {	text-align:center;}	.projectlegacy h3 a {text-decoration: underline;}.projectlegacy h3 a:hover {text-decoration:none;}
</style>
<div class="messages projectlegacy">
	<h1>Project Legacy Update</h1>	

	<?php echo $html->image('East_Elevation.jpg',array('alt'=>'Project Legacy')); ?>
	<h4><?php echo $time->format('F Y',$message['Message']['published']); ?></h4>
	<?php echo $message['Message']['message']; ?>
	<p>by Henry Cohen, Lila Pesner, & Joe Bloomfield</p>
	
	<h3><?php echo $html->link('Project Legacy Live Construction', array('controller'=>'pages','action'=>'display','construction')); ?></h3>
	<h3><?php echo $html->link('Project Legacy Article Archive', array('action'=>'index','projectLegacy')); ?></h3>
	<h3><?php echo $html->link('Project Legacy Photo Album', 'http://gallery.templebethtikvah.com/main.php?cmd=album&var1=2009%2FProject+Legacy/'); ?></h3>

</div>