<?php
class ContactUsEmailsController extends AppController {

	var $name = 'ContactUsEmails';
	var $components = array('Email');
	var $paginate = array('order' => array('created' => 'desc'));

    
	function _sendEmail($email) {
	    //Configure::write ('debug', 2);
	    //debug($email);
	    $emails = array_flip($this->ContactUsEmail->categories);
		$this->Email->to = $emails[$email['ContactUsEmail']['category']];
		$this->Email->subject = 'Temple Beth Tikvah (Contact Us): '.$email['ContactUsEmail']['subject'];
		$this->Email->replyTo = $email['ContactUsEmail']['email'];
		$this->Email->from = $email['ContactUsEmail']['name'].' <'.$email['ContactUsEmail']['email'].'>';
		$this->Email->sendAs = 'text'; // 'html', 'text' or 'both'
		//Set view variables as normal
	    $this->Email->template = 'default';
		$this->set('emailMessage', $email['ContactUsEmail']['message']);
	    $this->Email->send();
	}
 
	
	function index($category = false) {
		if (
			!empty($this->params['form']['name']) || !empty($this->params['form']['email']) 
			|| !empty($this->params['form']['subject']) || !empty($this->params['form']['message'])
		) {
			die('Please dont spam me');
		}
		if (!empty($this->data)) {
			$this->ContactUsEmail->create();
			if ($this->ContactUsEmail->save($this->data)) {
				$this->_sendEmail($this->data);
				$this->Session->setFlash(__('The email has been sent', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.', true));
			}
		}
		$categories = array_combine($this->ContactUsEmail->categories, $this->ContactUsEmail->categories);
		$this->set(compact('categories'));
		if ($category) {
			$this->data['ContactUsEmail']['category'] = $category;
		}
	}


	function admin_index() {
		$this->ContactUsEmail->recursive = 0;
		$this->set('contactUsEmails', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ContactUsEmail.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contactUsEmail', $this->ContactUsEmail->read(null, $id));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ContactUsEmail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContactUsEmail->delete($id)) {
			$this->Session->setFlash(__('ContactUsEmail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>