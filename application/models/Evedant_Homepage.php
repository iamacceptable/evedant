<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Homepage extends CI_Model {

	public function fetchCarousel(){
		$this->db
			->select('carouselPicture, carouselHeadline, carouselTagline')
			->from('tbl_homepage_carousel')
			->order_by('addedON', 'DESC')
			->where('deleteStatus', '0');
		$response = $this->db->get();
		return $response->result_object();
	}

	public function fetchTags(){
		$this->db
			->select('tagLine')
			->from('tbl_homepage_tags');
		$response = $this->db->get();
		return $response->result_object();
	}

	public function fetchShootingStars(){
		$this->db
			->select('tbl_stars.starName, tbl_stars.starClass, tbl_stars.starMarks, tbl_stars.starDisplayPicture')
			->from('tbl_homepage_stars')
			->join('tbl_stars','tbl_homepage_stars.starID = tbl_stars.starID')
			->where('tbl_stars.deleteStatus', '0');
		$response = $this->db->get();
		return $response->result_object();
	}

	public function fetchHomepageSubjects(){
		$this->db
			->select('tbl_subject.subjectName, tbl_subject.subjectDisplayPicture, tbl_homepage_subjects.homepageSubjectTag, tbl_homepage_subjects.homepageSubjectAbout')
			->from('tbl_homepage_subjects')
			->join('tbl_subject', 'tbl_homepage_subjects.subjectID = tbl_subject.subjectID')
			->where('tbl_homepage_subjects.deleteStatus', '0')
			->where('tbl_subject.deleteStatus', '0');
		$response = $this->db->get();
		return $response->result_object();
	}
}