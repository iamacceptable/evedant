<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function index(){
		$this->login();
	}
	public function login(){
		$dataLoad['header'] = 'Login';
		$this->load->view('Admin/auth/login',$dataLoad);
	}
	public function auth_login(){
		$this->form_validation->set_rules('panelUsername', 'Username','required|valid_email');
		$this->form_validation->set_rules('panelPassword', 'Password','required|min_length[8]|max_length[12]');
		if($this->form_validation->run() == FALSE){
			$this->login();
		} else{
			//TODO post the array to db and begin the session
			$postArray = array(
				'username' => $this->input->post('panelUsername'),
				'password' => md5($this->input->post('panelPassword'))
			);
			echo '<pre>';
			print_r($postArray);
		}
	}
}