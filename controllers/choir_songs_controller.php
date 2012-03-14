<?php
class ChoirSongsController extends AppController {

	var $name = 'ChoirSongs';
  	var $paginate = array(
		'fields' => array('ChoirSong.*','CAST(ChoirSong.number AS UNSIGNED) AS numbering'),
        'order' => array(
            'numbering' => 'asc',
			'number' => 'asc',
        )
    );


	function index($category = null) {
		if (!empty($category)) {
			$this->paginate['conditions'] = array('ChoirSong.category' => $category);
			$this->set('category', $category);
		} else {
			$this->paginate['conditions'] = array('ChoirSong.category' => 'Choir Music');
		}
		
		$this->set('choirSongs', $this->paginate());
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ChoirSong.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('choirSong', $this->ChoirSong->read(null, $id));
	}


	function admin_index() {
		$this->ChoirSong->recursive = 0;
		$this->set('choirSongs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ChoirSong.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('choirSong', $this->ChoirSong->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ChoirSong->create();
			if ($this->ChoirSong->save($this->data)) {
				$this->Session->setFlash(__('The ChoirSong has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ChoirSong could not be saved. Please, try again.', true));
			}
		}
		$this->set('categories', $this->ChoirSong->categories);
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ChoirSong', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			//debug($this->data);die;
			if ($this->ChoirSong->save($this->data)) {
				$this->Session->setFlash(__('The ChoirSong has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ChoirSong could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ChoirSong->read(null, $id);
		}
		$this->set('categories', $this->ChoirSong->categories);
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ChoirSong', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ChoirSong->delete($id)) {
			$this->Session->setFlash(__('ChoirSong deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>