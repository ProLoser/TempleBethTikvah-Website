<?php
class PrayersController extends AppController {

	var $name = 'Prayers';

	function index() {
		$this->Prayer->recursive = 0;
		$this->set('prayers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Prayer.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('prayer', $this->Prayer->read(null, $id));
	}

	function admin_index() {
		$this->Prayer->recursive = 0;
		$this->set('prayers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Prayer.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('prayer', $this->Prayer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Prayer->create();
			if ($this->Prayer->save($this->data)) {
				$this->Session->setFlash(__('The Prayer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Prayer could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Prayer', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Prayer->save($this->data)) {
				$this->Session->setFlash(__('The Prayer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Prayer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Prayer->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Prayer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Prayer->delete($id)) {
			$this->Session->setFlash(__('Prayer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>