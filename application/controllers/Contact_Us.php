<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {
	public function index()
	{
		$dataLoad['navAncestor'] = 'More';
		$dataLoad['navChild'] = 'Contact';
		$dataLoad['header'] = 'Contact Us';
		$dataLoad['successMessage'] = $this->session->flashdata('success');
		$this->load->view('contact/index',$dataLoad);
	}
	public function sendMessage(){
		$this->form_validation->set_rules('userName','Name','required');
		$this->form_validation->set_rules('phoneNumber','Mobile Number','required|numeric|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('userEmail','Email Address','required|valid_email');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$dataPost = array(
				'contactName' => $this->input->post('userName'),
				'contactPhone' => $this->input->post('phoneNumber'),
				'contactEmail' => $this->input->post('userEmail'),
				'contactMessage' => $this->input->post('userMessage')
			);
			// echo '<pre>';
			// print_r($dataPost);
			$this->load->model('Evedant_ContactUs');
			$response = $this->Evedant_ContactUs->postContact($dataPost);
			// echo '<pre>';
			// print_r($response);
			if($response){
				$this->session->set_flashdata('success','TRUE');
				redirect('Contact_Us', 'refresh');
			}
			else{
				$this->session->set_flashdata('success','FALSE');
				redirect('Contact_Us', 'refresh');
			}
		}
	}
}
