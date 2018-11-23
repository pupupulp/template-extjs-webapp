<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class APP_Controller extends CI_Controller {

	public function __contruct() {
		parent::__contruct();
	}

	public function loadView($pageDetails = [], $scriptView = 'base_default', $template = null){		

		$details['_js_view'] = $pageDetails['js_view'];
		$setupData['_init'] = $this->load->view('scripts/init', $details, true);
		$pageDetails['_page_content'] = $this->load->view("scripts/{$scriptView}", $setupData, true);

		$this->load->view($template ?? 'home', $pageDetails);

	}
}
