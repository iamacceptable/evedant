<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Courses extends CI_Model {
	public function fetchAllClasses(){
		$this->db
			->select('*')
			->from('tbl_class')
			->where('deleteStatus','0')
			->order_by('tbl_class.classID', 'ASC');
		$response = $this->db->get();
		return $response->result_object();
	}
	public function fetchAllSubjects(){
		$this->db
			->select('*')
			->from('tbl_subject')
			->where('deleteStatus','0')
			->order_by('subjectName','ASC');
		$response = $this->db->get();
		return $response->result_object();
	}
	public function fetchCoursesDisplayDetails(){
		$this->db
			->select('tbl_courses.courseID, tbl_courses.courseName, tbl_courses.courseShortDescription, tbl_courses.courseBasicFees, tbl_class.className, tbl_class.classID, tbl_subject.subjectName, tbl_subject.subjectDisplayPicture')
			->from('tbl_courses')
			->join('tbl_class','tbl_class.classID = tbl_courses.courseClass')
			->join('tbl_subject', 'tbl_subject.subjectID = tbl_courses.courseSubject')
			->where('tbl_courses.deleteStatus' ,'0')
			->where('tbl_class.deleteStatus', '0')
			->where('tbl_subject.deleteStatus' , '0');
		$response = $this->db->get();
		return $response->result_object();
	}
	public function fetchCourseDetails($courseID){
		$this->db
			->select('tbl_courses.courseName, tbl_courses.courseLongDescription, tbl_class.className, tbl_subject.subjectName, tbl_subject.subjectCoverPicture, tbl_courses_details.courseBatchStart, courseBatchTimings, tbl_courses_details.courseContent, tbl_team.teamMemberName')
			->from('tbl_courses')
			->join('tbl_class','tbl_class.classID = tbl_courses.courseClass')
			->join('tbl_subject', 'tbl_subject.subjectID = tbl_courses.courseSubject')
			->join('tbl_courses_details', 'tbl_courses_details.courseID = tbl_courses.courseID')
			->join('tbl_team', 'tbl_team.teamMemberID = tbl_courses_details.author')
			->where('tbl_courses.deleteStatus' ,'0')
			->where('tbl_class.deleteStatus', '0')
			->where('tbl_subject.deleteStatus' , '0')
			->where('tbl_team.deleteStatus' , '0')
			->where('tbl_courses.courseID', $courseID);
		$response = $this->db->get();
		return $response->row();
	}
	public function fetchCourseLearningPlan($courseID){
		$this->db
			->select('tbl_course_learning_plan.courseHeading as heading, tbl_course_learning_plan.coursePlan as plan, tbl_course_learning_plan.addedON as time, tbl_team.teamMemberName as master')
			->from('tbl_course_learning_plan')
			->join('tbl_courses', 'tbl_course_learning_plan.courseID = tbl_courses.courseID')
			->join('tbl_team', 'tbl_course_learning_plan.author = tbl_team.teamMemberID')
			->where('tbl_courses.deleteStatus' , '0')
			->where('tbl_course_learning_plan.deleteStatus', '0')
			->where('tbl_team.deleteStatus', '0')
			->where('tbl_course_learning_plan.courseID', $courseID);
		$response = $this->db->get();
		return $response->result_object();
	}
	public function fetchFeesStructure($courseID){
		$this->db
			->select('tbl_courses_fees_structure.courseRegistrationFees, tbl_courses_fees_structure.courseTuitionFees, tbl_courses_fees_structure.courseStudyMaterialFees')
			->from('tbl_courses_fees_structure')
			->join('tbl_courses', 'tbl_courses_fees_structure.courseID = tbl_courses.courseID')
			->where('tbl_courses.deleteStatus' , '0')
			->where('tbl_courses_fees_structure.deleteStatus', '0')
			->where('tbl_courses_fees_structure.courseID', $courseID);
		$response = $this->db->get();
		return $response->row();
	}
	public function fetchStudyMaterial($id){
		$this->db
			->select('tbl_study_material.studyMaterialDoc as doc')
			->from('tbl_study_material')
			->where('tbl_study_material.deleteStatus' ,'0')
			->where('tbl_study_material.studyMaterialID' ,$id);
		$response = $this->db->get();
		return $response->row();
	}
	//fetch all study material logic
	// public function fetchAllStudyMaterial() {
	// 	$this->db
	// 		->select('tbl_study_material.studyMaterialID as id,tbl_study_material.studyMaterialName as doc, tbl_study_material_category.studyMaterialCategory as category, tbl_class.className as division')
	// 		->from('tbl_study_material')
	// 		->join('tbl_class', 'tbl_study_material.studyMaterialClass = tbl_class.classID')
	// 		->join('tbl_study_material_category', 'tbl_study_material.studyMaterialCategory = tbl_study_material_category.studyMaterialCategoryID')
	// 		->where('tbl_study_material.deleteStatus' ,'0')
	// 		->where('tbl_study_material_category.deleteStatus' ,'0')
	// 		->order_by('tbl_class.classID', 'ASC');
	// 	$response = $this->db->get();
	// 	$response = $response->result_array();
	// 	$studyMaterial = array();
	// 	foreach ($response as $key):
	// 		$division = $key['division'];
	// 		// if(!isset($studyMaterial[$division]))
	// 		// 	$studyMaterial[$division] = array(
	// 		// 		'category' => array()
	// 		// 	);
	// 		$category = $key['category'];
	// 		if(!isset($studyMaterial[$division][$category]))
	// 			$studyMaterial[$division][$category] = array();
	// 		// array_push($studyMaterial[$division]['category'], $key['category']);
	// 		// array_push($studyMaterial[$division][$category]['docs'], $key['doc']);
	// 		// array_push($studyMaterial[$division][$category]['ids'], $key['id']);
	// 		$material = array(
	// 			'doc' => $key['doc'],
	// 			'id' => $key['id']
	// 		);
	// 		array_push($studyMaterial[$division][$category], $material);
	// 	endforeach;
	// 	return $studyMaterial;
	// }
}