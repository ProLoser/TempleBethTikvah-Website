<h1><?php echo $this->pageTitle = $message['Message']['title']; ?></h1>
<div class="messages view">
	<h2><?php echo $time->niceShort($message['Message']['published']); ?></h2>
	<?php echo $message['Message']['message']; ?>
</div>