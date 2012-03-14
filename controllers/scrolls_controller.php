<?php
class ScrollsController extends AppController {

	var $name = 'Scrolls';
	var $helpers = array('Html', 'Form', 'Time');
	var $paginate = array(
        'order' => array(
            'Scroll.published' => 'desc'
        )
    );

	function index() {
		$this->Scroll->recursive = 0;
		$this->set('scrolls', $this->paginate());
	}
	

	function admin_index() {
		$this->Scroll->recursive = 0;
		$this->set('scrolls', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Scroll.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('scroll', $this->Scroll->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Scroll->create();
			if ($this->Scroll->save($this->data)) {
				$this->Session->setFlash(__('The Scroll has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Scroll could not be saved. Please, try again.', true));
			}
		}
		$this->set(compact('copies'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Scroll', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Scroll->save($this->data)) {
				$this->Session->setFlash(__('The Scroll has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Scroll could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Scroll->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Scroll', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Scroll->delete($id)) {
			$this->Session->setFlash(__('Scroll deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>