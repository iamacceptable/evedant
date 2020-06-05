<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
	public function index(){
		$dataLoad['navAncestor'] = 'Results';
		$dataLoad['navChild'] = 'null';
		$dataLoad['header'] = 'Our Results';
		$dataLoad['star'] = $this->fetchStarBanner();
		$dataLoad['shootingStars'] = $this->fetchShootingStars();
		$this->load->view('results/index',$dataLoad);
	}

	private function fetchStarBanner(){
		$this->load->model('Evedant_Results');
		$response = $this->Evedant_Results->fetchStarBanner();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}

	private function fetchShootingStars(){
		$this->load->model('Evedant_Results');
		$response = $this->Evedant_Results->fetchShootingStars();
		// echo '<pre>';
		// print_r($response);
		return $response;	
	}
}
