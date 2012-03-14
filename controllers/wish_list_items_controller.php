<?php
class WishListItemsController extends AppController {

	var $name = 'WishListItems';

	function index() {
		$this->WishListItem->recursive = 0;
		$this->set('wishListItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WishListItem.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wishListItem', $this->WishListItem->read(null, $id));
	}


	function admin_index() {
		$this->WishListItem->recursive = 0;
		$this->set('wishListItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WishListItem.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wishListItem', $this->WishListItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->WishListItem->create();
			if ($this->WishListItem->save($this->data)) {
				$this->Session->setFlash(__('The WishListItem has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WishListItem could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WishListItem', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WishListItem->save($this->data)) {
				$this->Session->setFlash(__('The WishListItem has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WishListItem could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WishListItem->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WishListItem', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WishListItem->delete($id)) {
			$this->Session->setFlash(__('WishListItem deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>