<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Team extends CI_Model {
	public function fetchAllTeachers(){
		$this->db
			->select('teamMemberName, teamMemberDesignation, teamMemberQualification, teamMemberDisplayPicture, teamMemberEmail, teamMemberFacebook, teamMemberLinkedIn, teamMemberTwitter')
			->from('tbl_team')
			->where('teamMemberType','Teacher')
			->where('active','1')
			->where('deleteStatus','0');
		$response = $this->db->get();
		return $response->result_object();
	}
	public function fetchAllTeamSupport(){
		$this->db
			->select('teamMemberName, teamMemberDesignation, teamMemberQualification, teamMemberDisplayPicture, teamMemberEmail, teamMemberFacebook, teamMemberLinkedIn, teamMemberTwitter')
			->from('tbl_team')
			->where('teamMemberType','Other')
			->where('deleteStatus','0');
		$response = $this->db->get();
		return $response->result_object();	
	}
	public function fetchTeamBanner(){
		$this->db
			->select('teamBannerQuote, teamBannerAuthor, teamBannerPicture')
			->from('tbl_team_banner')
			->where('teamBannerType', 'team')
			->where('deleteStatus', '0');
		$response = $this->db->get();
		return $response->row();
	}
}