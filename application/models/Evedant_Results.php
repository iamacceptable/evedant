<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Results extends CI_Model {
	public function fetchStarBanner(){
		$this->db
			->select('teamBannerQuote, teamBannerAuthor, teamBannerPicture')
			->from('tbl_team_banner')
			->where('teamBannerType', 'star_batch')
			->where('deleteStatus', '0');
		$response = $this->db->get();
		return $response->row();
	}

	public function fetchShootingStars(){
		$this->db
			->select('starName, starClass, starMarks, starComment, starDisplayPicture')
			->from('tbl_stars')
			->where('deleteStatus', '0');
		$response = $this->db->get();
		return $response->result_object();
	}
}