<?php
/* SVN FILE: $Id: app_controller.php 6311 2008-01-02 06:33:52Z phpnut $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2008, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 6311 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2008-01-01 22:33:52 -0800 (Tue, 01 Jan 2008) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		cake
 * @subpackage	cake.app
 */
class AppController extends Controller {
	
	var $helpers = array('Html', 'Form', 'Time', 'Session');
	var $components = array('Auth', 'Session');
	var $uses = array('Scroll');
	
	function beforeFilter() {
		
		if (!$this->_prefix())
		    $this->Auth->allow('*');
		
	}
	
	function beforeRender() {
		 if (isset($this->params['admin'])) {
			$this->layout = 'admin';
		} else {		
			$this->set('latestScroll',  ClassRegistry::init('Scroll')->find('first', array('recursive' => -1, 'order' => 'Scroll.published DESC')));
			$this->set('navGoogleSites', ClassRegistry::init('GoogleAppSite')->find('all',array('conditions'=>array('published'=>1),'recursive'=>'-1')));
		}
	}
	
	/**
	 * Checks to see what the current prefix in use is. Checks for 'admin' by
	 * default.
	 *
	 * @return boolean
	 * @access protected
	 **/
	function _prefix($prefix = 'admin') {
		if (isset($this->params['prefix']) && $this->params['prefix'] == $prefix) {
			return true;
		}
		return false;
	}
	
	public function __construct() {
		// This allows the enabling of debug mode even if debug is set to off. Simply pass ?shnizzle in the url
		if (!empty($_GET['shnizzle'])) {
			Configure::write('debug', 2);
		}
		if (Configure::read('debug')) {
			$this->components[] = 'DebugKit.Toolbar';
			App::import('Vendor', 'DebugKit.FireCake');
		}
		parent::__construct();
	}
	
}
?>