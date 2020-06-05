<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends CI_Controller {
	public function index()
	{
		$dataLoad['navAncestor'] = 'More';
		$dataLoad['navChild'] = 'About';
		$dataLoad['header'] = 'About Us';
		$this->load->view('about/index',$dataLoad);
	}
}
