<?php
class SmachotController extends AppController {

	var $name = 'Smachot';
	var $paginate = array(
        'order' => array(
            'Simcha.date' => 'asc'
        )
    );

	function index() {
		$this->Simcha->recursive = 0;
		$this->set('smachot', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Simcha.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('simcha', $this->Simcha->read(null, $id));
	}
	

	function admin_index() {
		$this->Simcha->recursive = 0;
		$this->set('smachot', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Simcha.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('simcha', $this->Simcha->read(null, $id));
	}

	function admin_add() {
		$this->set('categories', $this->Simcha->categories);
		
		if (!empty($this->data)) {
			$this->Simcha->create();
			if ($this->Simcha->save($this->data)) {
				$this->Session->setFlash(__('The Simcha has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Simcha could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->set('categories', $this->Simcha->categories);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Simcha', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Simcha->save($this->data)) {
				$this->Session->setFlash(__('The Simcha has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Simcha could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Simcha->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Simcha', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Simcha->delete($id)) {
			$this->Session->setFlash(__('Simcha deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>