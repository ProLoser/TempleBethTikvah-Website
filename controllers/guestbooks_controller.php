<?php
class GuestbooksController extends AppController {

	var $name = 'Guestbooks';
	var $components = array('Cookie');
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Cookie->name = 'Guestbook';
		$this->Cookie->time =  '6 Days';
	}

	function index() {
		if ($this->Cookie->read('signed')) {
			$this->set('cookie',true);
		}
	}

	function add() {
		if ($this->Cookie->read('signed')) {
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($_POST['email']) || !empty($_POST['name']) || !empty($_POST['subject']) || !empty($_POST['message'])) {
			$this->redirect('/');
		}
		
		if (!empty($this->data)) {
			$this->Guestbook->create();
			$this->data['Guestbook']['ip'] = env('REMOTE_ADDR');
			if ($this->Guestbook->save($this->data)) {
				$this->Cookie->write('signed','thanks');
				$this->Session->setFlash(__('Thanks for signing the Guestbook', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Guestbook could not be saved. Please, try again.', true));
			}
		}
	}


	function admin_index() {
		$this->Guestbook->recursive = 0;
		$this->set('guestbooks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Guestbook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('guestbook', $this->Guestbook->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Guestbook->create();
			if ($this->Guestbook->save($this->data)) {
				$this->Session->setFlash(__('The Guestbook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Guestbook could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Guestbook', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Guestbook->save($this->data)) {
				$this->Session->setFlash(__('The Guestbook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Guestbook could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Guestbook->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Guestbook', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Guestbook->delete($id)) {
			$this->Session->setFlash(__('Guestbook deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>