<?php
class SermonsController extends AppController {

	var $name = 'Sermons';

	function index() {
		$this->Sermon->recursive = 0;
		$this->set('sermons', $this->paginate());
	}


	function admin_index() {
		$this->Sermon->recursive = 0;
		$this->set('sermons', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Sermon.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('sermon', $this->Sermon->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Sermon->create();
			if ($this->Sermon->save($this->data)) {
				$this->Session->setFlash(__('The Sermon has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Sermon could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Sermon', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sermon->save($this->data)) {
				$this->Session->setFlash(__('The Sermon has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Sermon could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sermon->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Sermon', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sermon->delete($id)) {
			$this->Session->setFlash(__('Sermon deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>