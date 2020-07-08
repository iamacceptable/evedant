<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Students extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login']) || $_SESSION['login'] == false){
        	redirect('Authentication','refresh');
        }
		$this->load->model('Evedant_Team');
    }

    public function all_students(){
		$dataLoad['header'] = 'Dashboard';
		$dataLoad['breadcrumbParent'] = '';
		$dataLoad['profile'] = $this->fetchTeamUserProfile();
		print_r('All Students');
	}
}