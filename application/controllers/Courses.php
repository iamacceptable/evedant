<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
	//index function returning the main view of the courses page
	public function index()
	{
		$dataLoad['navAncestor'] = 'Courses';
		$dataLoad['navChild'] = 'null';
		$dataLoad['header'] = 'Courses';
		$dataLoad['courses'] = $this->fetchCoursesDisplayDetails();
		$dataLoad['allClasses'] = $this->fetchAllClasses();
		$this->load->view('courses/index',$dataLoad);
	}

	private function fetchAllClasses(){
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchAllClasses();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchAllSubjects(){
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchAllSubjects();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchCoursesDisplayDetails(){
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchCoursesDisplayDetails();
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	public function course_details($courseID)
	{
		$dataLoad['navAncestor'] = 'Courses';
		$dataLoad['navChild'] = 'null';
		$dataLoad['header'] = 'Courses';
		$dataLoad['details'] = $this->fetchCourseDetails($courseID); 
		$dataLoad['fees'] = $this->fetchFeesStructure($courseID);
	 	$dataLoad['learningPlans'] = $this->fetchCourseLearningPlan($courseID);
 		$this->load->view('courses/details',$dataLoad);
	}
	private function fetchCourseDetails($courseID) {
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchCourseDetails($courseID);
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchCourseLearningPlan($courseID){
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchCourseLearningPlan($courseID);
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	private function fetchFeesStructure($courseID) {
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchFeesStructure($courseID);
		// echo '<pre>';
		// print_r($response);
		return $response;
	}
	public function download_course_content(){
		$this->load->helper('download');
    	// $fileName = $courseName;
    	if(isset($_POST['courseName'])){
    		$courseName = $this->input->post('courseName');
    		$file = './assets/uploads/'.$courseName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		    $data = file_get_contents ( $file );
		     //force download
		    force_download ( $courseName, $data );
	    	}	
    	}
    	
	}
	public function download_study_material($id){
		$this->load->helper('download');
		$this->load->model('Evedant_Courses');
		$response = $this->Evedant_Courses->fetchStudyMaterial($id);
		$file = './assets/uploads/material/'.$response->doc;
		if(file_exists( $file )){
			$data = file_get_contents( $file );
			force_download( $response->doc, $data);
		}
		else{
			echo 'Problem Occurred Please Try Again!!';
		}
	}
	private function fetchPopularCourses()
	{
		$this->db
			->select('tbl_subject.subjectName as Subject, tbl_class.className as Class, tbl_courses.courseBasicFees as Fees, tbl_courses_details.courseBatchStart as Batch_Date, tbl_team.teamMemberName as  teacher, tbl_team.teamMemberDesignation as designation, tbl_popular_courses.popularCourseDisplayPicture')
			->from('tbl_courses')
			->join('tbl_popular_courses', 'tbl_popular_courses.courseID = tbl_courses.courseID')
			->join('tbl_class','tbl_class.classID = tbl_courses.courseClass')
			->join('tbl_subject', 'tbl_subject.subjectID = tbl_courses.courseSubject')
			->join('tbl_courses_details', 'tbl_courses_details.courseID = tbl_courses.courseID')
			->join('tbl_team', 'tbl_team.teamMemberID = tbl_courses_details.author')
			->where('tbl_courses.deleteStatus' ,'0')
			->where('tbl_class.deleteStatus', '0')
			->where('tbl_subject.deleteStatus' , '0')
			->where('tbl_team.deleteStatus' , '0');
		$response = $this->db->get();
		$response = $response->result_object();
		echo '<pre>';
		print_r($response);
	}
}
