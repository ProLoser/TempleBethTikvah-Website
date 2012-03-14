<?php
class IggyAdvisorsController extends AppController {

	var $name = 'IggyAdvisors';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IggyAdvisor->recursive = 0;
		$this->set('iggyAdvisors', $this->IggyAdvisor->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IggyAdvisor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('iggyAdvisor', $this->IggyAdvisor->read(null, $id));
	}
	
	
	function admin_index() {
		$this->IggyAdvisor->recursive = 0;
		$this->set('iggyAdvisors', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IggyAdvisor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('iggyAdvisor', $this->IggyAdvisor->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->IggyAdvisor->create();
			if ($this->IggyAdvisor->save($this->data)) {
				$this->Session->setFlash(__('The IggyAdvisor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The IggyAdvisor could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IggyAdvisor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IggyAdvisor->save($this->data)) {
				$this->Session->setFlash(__('The IggyAdvisor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The IggyAdvisor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IggyAdvisor->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IggyAdvisor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IggyAdvisor->delete($id)) {
			$this->Session->setFlash(__('IggyAdvisor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('IggyAdvisor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>