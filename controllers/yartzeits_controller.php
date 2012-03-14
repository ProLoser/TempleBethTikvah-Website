<?php
class YartzeitsController extends AppController {

	var $name = 'Yartzeits';
	var $paginate = array(
        'order' => array(
            'Yartzeit.date' => 'asc'
        )
    );

	function index() {
		$this->Yartzeit->recursive = 0;
		$this->set('yartzeits', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Yartzeit.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('yartzeit', $this->Yartzeit->read(null, $id));
	}


	function admin_index() {
		$this->Yartzeit->recursive = 0;
		$this->set('yartzeits', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Yartzeit.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('yartzeit', $this->Yartzeit->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Yartzeit->create();
			if ($this->Yartzeit->save($this->data)) {
				$this->Session->setFlash(__('The Yartzeit has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Yartzeit could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Yartzeit', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Yartzeit->save($this->data)) {
				$this->Session->setFlash(__('The Yartzeit has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Yartzeit could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Yartzeit->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Yartzeit', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Yartzeit->delete($id)) {
			$this->Session->setFlash(__('Yartzeit deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>