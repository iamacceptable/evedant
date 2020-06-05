<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_ContactUs extends CI_Model {
	public function postContact($data){
		$response = $this->db->insert('tbl_contacts', $data);
		return $this->db->insert_id();
	}
}
