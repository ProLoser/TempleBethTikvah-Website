<?php
class IggyPostsController extends AppController {

	var $name = 'IggyPosts';
	var $helpers = array('Html', 'Form', 'Time');

	function index() {
		$this->IggyPost->recursive = 0;
		$this->set('iggyPosts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IggyPost', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('iggyPost', $this->IggyPost->read(null, $id));
	}
	
	
	function admin_index() {
		$this->IggyPost->recursive = 0;
		$this->set('iggyPosts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IggyPost', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('iggyPost', $this->IggyPost->read(null, $id));
	}

	function admin_add($copies = 1) {
		if (!empty($this->data)) {
			$this->IggyPost->create();
			if ($this->IggyPost->saveAll($this->data['IggyPost'])) {
				$this->Session->setFlash(__('The IggyPost has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The IggyPost could not be saved. Please, try again.', true));
			}
		}
		$this->set(compact('copies'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IggyPost', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IggyPost->save($this->data)) {
				$this->Session->setFlash(__('The IggyPost has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The IggyPost could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IggyPost->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IggyPost', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IggyPost->delete($id)) {
			$this->Session->setFlash(__('IggyPost deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('IggyPost was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>