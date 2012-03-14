<?php
/**
 * FamiliesController
 * 
 * [Short Description]
 *
 * @package default
 * @author Dean Sofer
 * @version $Id$
 * @copyright Art Engineered
 **/

class FamiliesController extends AppController {
	var $name = 'Families';

	var $components = array('Email', 'RequestHandler', 'Wizard.Wizard');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Wizard->steps = array('student', 'parent_volunteer', 'school_fees');
		$this->Wizard->completeUrl = array('action' => 'complete');
		$this->Wizard->action = 'index';
	}

	function index($step = null) {
		$this->Wizard->process($step);
	}
	
	public function _processStudent() {
		$data = $this->data;
		unset($data['Student'][1]);
		unset($data['Student'][2]);
		unset($data['Student'][3]);
		return $this->Family->saveAll($data, array('validates' => 'only'));
	}
		
	public function _processParentVolunteer() {
		$this->Family->ParentVolunteer->set($this->data);
		return $this->Family->ParentVolunteer->validates();
	}
	
	public function _processSchoolFees() {
		$this->Family->SchoolFee->set($this->data);
		return $this->Family->SchoolFee->validates();
	}
	
	public function _afterComplete() {
		$data = $this->Wizard->read();
		$data = array_merge($data['student'], $data['parent_volunteer'], $data['school_fees']);
		$this->Family->saveAll($data);
		$this->set(compact('data'));
		$this->Email->to = 'tbtoc@templebethtikvah.com';  
		$this->Email->subject = 'Student Registration';
		$this->Email->replyTo = 'no-reply@templebethtikvah.com';
		$this->Email->from = 'no-reply@templebethtikvah.com';
		$this->Email->template = 'student_registration';
		$this->Email->sendAs = 'both';
		$this->Email->send();
	}
	
	public function complete() {
	}

}