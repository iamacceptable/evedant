<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){
        	redirect('Admin','refresh');
        }
    }

	public function index(){
		$this->login();
	}
	public function login(){
		$dataLoad['header'] = 'Login';
		$dataLoad['errorMessage'] = $this->session->flashdata('error');
		$this->load->view('Admin/auth/login',$dataLoad);
	}
	public function auth_login(){
		$this->form_validation->set_rules('panelUsername', 'Username','required|valid_email|callback_checkUsername');
		$this->form_validation->set_rules('panelPassword', 'Password','required|min_length[8]|max_length[12]');
		if($this->form_validation->run() == FALSE){
			$this->login();
		} else{
			$postArray = array(
				'username' => $this->input->post('panelUsername'),
				'password' => md5($this->input->post('panelPassword'))
			);
			// echo '<pre>';
			// print_r($postArray);
			$this->load->model('Evedant_Authentication');
			$response = $this->Evedant_Authentication->doLogin($postArray);
			if($response['error'] == TRUE){
				$this->session->set_flashdata('error', $response['errorMessage']);
				redirect('Authentication/login','refresh');
			}
			else{
				$sessionData = array(
					"login" => TRUE,
					"teamUserID" => $response['result']->teamMemberID,
					"typeOfLogin" => $response['result']->teamMemberType
				);
				$this->session->set_userdata($sessionData);
				redirect('Admin','refresh');
			}
		}
	}
	function checkUsername($teamUsername){
		$this->form_validation->set_message('checkUsername', 'Username doesn\'t exists!');
		$this->load->model('Evedant_Authentication');
		return $this->Evedant_Authentication->checkUsername($teamUsername);
	}
}