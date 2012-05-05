<?php

namespace li3_install\controllers;

use lithium\action\DispatchException;

class InstallController extends \lithium\action\Controller {

	/**
	* Define application view paths
	*/
	protected function _init() {
		$this->_render['paths']['template'] = '{:library}/views/{:controller}/{:template}.{:type}.php';
		$this->_render['paths']['layout'] = LITHIUM_APP_PATH . '/views/layouts/default.html.php';
		$this->_render['paths']['element'] = '{:library}/views/elements/{:template}.html.php';
		parent::_init();
		$this->response->cache(false);
	}

	public function index() {
		return '';
		//show dependencies that might be required that are not setup
	}

	public function installStepOne(){
		// do step 1

	}
	public function installStepTwo(){
		// do step 2
	}

	public function installComplete(){
		//turn flag for install off
		//delete anything that might allow the install process to happen again.
		//cleanup
	}
}

?>