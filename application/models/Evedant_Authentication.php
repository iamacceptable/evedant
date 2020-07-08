<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Authentication extends CI_Model {
	public function checkUsername($panelUserName){
		$this->db
			->select('teamMemberID')
			->from('tbl_team')
			->where('teamMemberEmail', $panelUserName);
		$response = $this->db->get();
		if($response->num_rows() >= 1)
			return TRUE;
		else
			return FALSE;
	}
	public function doLogin($ceredentials){
		$this->db
			->select('teamMemberID, teamMemberEmail, teamMemberType')
			->from('tbl_team')
			->where('teamMemberEmail', $ceredentials['username'])
			->where('teamMemberPassword', $ceredentials['password']);
		$response = $this->db->get();
		if($response->num_rows() == 1)
			$response = array(
				'result' => $response->row(),
				'error' => FALSE,
				'errorMessage' => 'Auth Successfull!!'
			);
		else{
			$response = array(
				'result' => '',
				'error' => TRUE,
				'errorMessage' => 'Wrong Credentials!!'
			);
		}
		return $response;		
	}
}
