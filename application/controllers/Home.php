<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends APP_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->loadView();
	}

	public function welcome() {
		$this->loadView();
	}

}