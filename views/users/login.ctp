<div class="users view">
<h2>Login</h2>
	<?php
		if  ($session->check('Message.auth')) $session->flash('auth');
		echo $form->create('User', array('action' => 'login'));
		echo $form->input('username');
		echo $form->input('password');
		echo $form->end('Login');
	?>
</div>