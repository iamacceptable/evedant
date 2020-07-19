<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_ContactUs extends CI_Model {
	public function postContact($data){
		$response = $this->db->insert('tbl_contacts', $data);
		return $this->db->insert_id();
	}
	public function registerStudent($data){
		$response = $this->db->insert('tbl_registration', $data);
		return $this->db->insert_id();
	}
	public function checkRegistrationEmail($email) {
		$this->db
			->select('regEmail')
			->from('tbl_registration')
			->where('regEmail', $email);
		$response = $this->db->get();
		if($response->num_rows() == 0)
			return TRUE;
		else
			return FALSE;
	}
	public function checkRegistrationPhone($phone) {
		$this->db
			->select('regPhone')
			->from('tbl_registration')
			->where('regPhone', $phone);
		$response = $this->db->get();
		if($response->num_rows() == 0)
			return TRUE;
		else
			return FALSE;
	}
}
