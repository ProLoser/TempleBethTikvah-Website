<?php
class MessagesController extends AppController {

	var $name = 'Messages';
	var $helpers = array('Time');

	function projectlegacy() {
		$message = $this->Message->find('first',array('order'=>'Message.published DESC','conditions'=>array('Message.category'=>'projectLegacy')));
		$this->set(compact('message'));
	}

	function weekly() {
		$message = $this->Message->find('first',array('order'=>'Message.published DESC','conditions'=>array('Message.category'=>'weeklyRabbi')));
		$this->set(compact('message'));
	}
	
	function monthly() {
		foreach ($this->Message->categories as $catKey => $catVal) {
			$messages[$catKey] = $this->Message->find('first',array('order'=>'Message.published DESC','conditions'=>array('Message.category'=>$catKey)));
		}
		$this->set(compact('messages'));
	}
	
	function mens_club() {
		$this->set('message', $this->Message->find('first', array(
			'conditions' => array(
				'category' => 'monthlyMensClub',
			),
		)));
	}
	
	function index($category = null) {
		$this->Message->recursive = 0;
		if ($category) {
			$this->paginate = array(    
				'Message' => array(
					'limit' => 20,
					'order' => array('published' => 'desc'),
					'conditions' => array('category' => $category)
				)
			);
		}
		$messages = $this->paginate();
		$this->set(compact('messages'));
		$this->set('categories', $this->Message->categories);
		//debug($this);die;
	}
  
	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Message', true), array('action'=>'index'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}


	function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Message', true), array('action'=>'index'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}

	function admin_add() {
		$this->set('categories', $this->Message->categories);
		
		if (!empty($this->data)) {
			$this->Message->create();
			if ($this->Message->save($this->data)) {
				$this->flash(__('Message saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}

	function admin_edit($id = null) {
		$this->set('categories', $this->Message->categories);
		
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Message', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Message->save($this->data)) {
				$this->flash(__('The Message has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Message->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Message', true), array('action'=>'index'));
		}
		if ($this->Message->delete($id)) {
			$this->flash(__('Message deleted', true), array('action'=>'index'));
		}
	}

}
?>