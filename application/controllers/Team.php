<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function index()
	{
		$dataLoad['navAncestor'] = 'Team';
		$dataLoad['navChild'] = 'null';
		$dataLoad['header'] = 'Team';
		$dataLoad['banner'] = $this->fetchTeamBanner();
		$dataLoad['team'] = $this->fetchAllTeachers();
		$dataLoad['supports'] =$this->fetchAllTeamSupport();
 		// echo '<pre>';
		// print_r($dataLoad);
		$this->load->view('team/index',$dataLoad);
	}
	private function fetchAllTeachers(){
		$this->load->model('Evedant_Team');
		$response = $this->Evedant_Team->fetchAllTeachers();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchAllTeamSupport(){
		$this->load->model('Evedant_Team');
		$response = $this->Evedant_Team->fetchAllTeamSupport();
		// echo '<pre>';
		// print_r($response);
		return $response;	
	}
	private function fetchTeamBanner(){
		$this->load->model('Evedant_Team');
		$response = $this->Evedant_Team->fetchTeamBanner();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
}
