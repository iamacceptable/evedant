<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$dataLoad['navAncestor'] = 'Home';
		$dataLoad['navChild'] = 'null';
		$dataLoad['header'] = 'Home';
		$dataLoad['stars'] = $this->fetchShootingStars();
		$dataLoad['carousels'] = $this->fetchCarousel();
		$dataLoad['tags'] = $this->fetchTags();
		$dataLoad['subjects'] = $this->fetchHomepageSubjects();
		$this->load->view('homepage/index',$dataLoad);
	}

	private function fetchShootingStars(){
		$this->load->model('Evedant_Homepage');
		$response = $this->Evedant_Homepage->fetchShootingStars();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchCarousel(){
		$this->load->model('Evedant_Homepage');
		$response = $this->Evedant_Homepage->fetchCarousel();
		// echo '<pre>';
		// print_r($response);
		return $response;	
	}
	private function fetchTags(){
		$this->load->model('Evedant_Homepage');
		$response = $this->Evedant_Homepage->fetchTags();
		$finalResponse = array(
			'firstTag' => $response[0]->tagLine,
			'secondTag' => $response[1]->tagLine,
			'thirdTag' => $response[2]->tagLine
		);
		// echo '<pre>';
		// print_r($finalResponse);
		return $finalResponse;
	}
	private function fetchHomepageSubjects(){
		$this->load->model('Evedant_Homepage');
		$response = $this->Evedant_Homepage->fetchHomepageSubjects();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	
	//to check the the study material logic

	// function fetchStudyMaterial() {
	// 	$this->load->model('Evedant_Courses');
	// 	$response = $this->Evedant_Courses->fetchAllStudyMaterial();
	// 	echo '<pre>';
	// 	// print_r($response);
	// 	foreach ($response as $key => $cat) {
	// 		foreach ($cat as $categories => $docs) {
	// 			foreach ($docs as $doc) {
	// 				echo $doc['doc'];
	// 			}
	// 		}
	// 	}
	// 	// echo '<pre>';
	// 	// print_r($response);
	// }
}