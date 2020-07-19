<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function index()
	{
		$dataLoad['navAncestor'] = 'More';
		$dataLoad['navChild'] = 'Registration';
		$dataLoad['header'] = 'Registration';
		$dataLoad['successMessage'] = $this->session->flashdata('success');
		$this->load->view('registration/index',$dataLoad);
	}
	public function register() {
		$this->form_validation->set_rules('regName', 'Student Name', 'required');
		$this->form_validation->set_rules('regPhone', 'Mobile Number', 'required|numeric|max_length[10]|min_length[10]|callback_chk_phone');
		$this->form_validation->set_rules('regClass', 'Class', 'required|numeric|max_length[2]|min_length[1]');
		$this->form_validation->set_rules('regCourses', 'Subjects', 'required');
		$this->form_validation->set_rules('regEmail', 'Email Address', 'valid_email|callback_chk_email');
		$this->form_validation->set_rules('regSchool', 'School Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$dataPost = array(
				'regName' => $this->input->post('regName'),
				'regPhone'=> $this->input->post('regPhone'),
				'regEmail' => $this->input->post('regEmail'),
				'regClass' => $this->input->post('regClass'),
				'regSubject' => $this->input->post('regCourses'),
				'regSchool' => $this->input->post('regSchool')
			);
			$this->load->model('Evedant_ContactUs');
			$response = $this->Evedant_ContactUs->registerStudent($dataPost);
			if($response){
				$this->session->set_flashdata('success','TRUE');
				$this->sendAuthMail($dataPost);
				redirect('Registration', 'refresh');
			}
			else{
				$this->session->set_flashdata('success','FALSE');
				redirect('Registration', 'refresh');
			}
		}
	}
	function chk_email($studentEmail) {
		$this->form_validation->set_message('chk_email', 'Email Address already registered!');
		$this->load->model('Evedant_ContactUs');
		return $this->Evedant_ContactUs->checkRegistrationEmail($studentEmail);
	}
	function chk_phone($studentPhone) {
		$this->form_validation->set_message('chk_phone', 'Mobile Number already registered!');
		$this->load->model('Evedant_ContactUs');
		return $this->Evedant_ContactUs->checkRegistrationPhone($studentPhone);
	}
	function sendAuthMail($data) {
		$this->load->config('email');
        $this->load->library('email');
        
        $subject = 'New Registration | Evedant | 2020';
        $message = 'Hey!\r\n\r\nThere is new registration recorded in Evedant 2020 batch through Onlinee Registration:\r\nName: '.$data['regName'].'\r\Class: '.$data['regClass'].'\r\nSchool: '.$data['regSchool'].'\r\nSubjects: '.$data['regSubject'].'\r\nPhone: '.$data['regPhone'].'\r\n\r\nThanks & Regards\r\n\r\nAdmin\r\n(evedant.in)';

        $this->email->set_newline("\r\n");
        $this->$email->setFrom('no-reply@evedant.in', 'Admin');
        $this->email->to('iamacceptable@yahoo.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
	}
}