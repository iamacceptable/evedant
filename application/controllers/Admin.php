<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login']) || $_SESSION['login'] == false){
        	redirect('Authentication','refresh');
        }
		$this->load->model('Evedant_Team');
    }
    
    //Navigation Components
	public function index(){
		redirect('Admin/dashboard', 'refresh');
	}

    public function dashboard(){
		$dataLoad['header'] = 'Dashboard';
		$dataLoad['breadcrumbParent'] = '';
		$dataLoad['profile'] = $this->fetchTeamUserProfile();
		$this->load->view('Admin/dashboard/index', $dataLoad);
	}

	public function all_students(){
		// $dataLoad['header'] = 'Dashboard';
		// $dataLoad['breadcrumbParent'] = '';
		// $dataLoad['profile'] = $this->fetchTeamUserProfile();
		// print_r('All Students');
		redirect('Admin_Students/all_students', 'refresh');
	}

	public function admission_form(){
		print_r('Admission Form');
	}
	public function login(){
		redirect('Authentication','refresh');
	}
	

	//GET and POST APIS

	private function fetchTeamUserProfile(){
		$response = $this->Evedant_Team->fetchTeamUserProfile($_SESSION['teamUserID']);
		return $response;
	}
}
