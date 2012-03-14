<?php
class MensClubScrollArticlesController extends AppController {

	var $name = 'MensClubScrollArticles';
	
	public function index() {
		$this->set('mensClubScrollArticle', $this->MensClubScrollArticle->find('first'));
	}
	

	function admin_index() {
		$this->MensClubScrollArticle->recursive = 0;
		$this->set('mensClubScrollArticles', $this->paginate());
	}
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mens club scroll article', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mensClubScrollArticle', $this->MensClubScrollArticle->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MensClubScrollArticle->create();
			if ($this->MensClubScrollArticle->save($this->data)) {
				$this->Session->setFlash(__('The mens club scroll article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mens club scroll article could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mens club scroll article', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MensClubScrollArticle->save($this->data)) {
				$this->Session->setFlash(__('The mens club scroll article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mens club scroll article could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MensClubScrollArticle->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mens club scroll article', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MensClubScrollArticle->delete($id)) {
			$this->Session->setFlash(__('Mens club scroll article deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mens club scroll article was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>