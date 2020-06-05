<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// function __construct() {
 //        parent::__construct();
 //        if($_SESSION['login'] == false){
 //        	redirect('Authentication',refresh);
 //        }
 //    }
	public function index(){
		$this->login();
	}
	public function login(){
		redirect('Authentication','refresh');
	}
	public function dashboard(){
		$dataLoad['header'] = 'Dashboard';
		$this->load->view('Admin/dashboard/index', $dataLoad);
	}
}
