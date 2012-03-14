<?php
class GoogleAppSitesController extends AppController {

	var $name = 'GoogleAppSites';

	function index() {
		$this->GoogleAppSite->recursive = 0;
		$this->set('googleAppSites', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid GoogleAppSite.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('googleAppSite', $this->GoogleAppSite->read(null, $id));
	}


	function admin_index() {
		$this->GoogleAppSite->recursive = 0;
		$this->set('googleAppSites', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid GoogleAppSite.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('googleAppSite', $this->GoogleAppSite->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->GoogleAppSite->create();
			if ($this->GoogleAppSite->save($this->data)) {
				$this->Session->setFlash(__('The GoogleAppSite has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The GoogleAppSite could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid GoogleAppSite', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->GoogleAppSite->save($this->data)) {
				$this->Session->setFlash(__('The GoogleAppSite has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The GoogleAppSite could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->GoogleAppSite->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for GoogleAppSite', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->GoogleAppSite->delete($id)) {
			$this->Session->setFlash(__('GoogleAppSite deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>