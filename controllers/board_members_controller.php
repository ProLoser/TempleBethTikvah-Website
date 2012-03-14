<?php
class BoardMembersController extends AppController {

	var $name = 'BoardMembers';
	var $paginate = array(
		'limit' => 40,
        'order' => array(
            'BoardMember.order' => 'asc'
        )
    );

	function index() {
		$this->BoardMember->recursive = 0;
		$this->set('boardMembers', $this->paginate());
	}


	function admin_index() {
		$this->BoardMember->recursive = 0;
		$this->set('boardMembers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BoardMember.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('boardMember', $this->BoardMember->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BoardMember->create();
			if ($this->BoardMember->save($this->data)) {
				$this->Session->setFlash(__('The BoardMember has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BoardMember could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BoardMember', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BoardMember->save($this->data)) {
				$this->Session->setFlash(__('The BoardMember has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BoardMember could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BoardMember->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BoardMember', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BoardMember->delete($id)) {
			$this->Session->setFlash(__('BoardMember deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>