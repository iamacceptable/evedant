<footer class="footer_wrap bg_tint_light footer_style_white widget_area">
    <div class="content_wrap">
        <div class="columns_wrap">
        	<?php
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
				if(!empty($response)){
        	?>
				<aside class="column-1_2 widget">
	                <h5 class="widget_title">Popular Courses</h5>
	                <?php
	                	foreach ($response as $popularCourse):
	                		$this->view('common_views/popular_course', $popularCourse);
	                	endforeach;
	                ?>
	            </aside>
            <?php
            	}
            	$this->db
            		->select('comboCourseSubjects as Subject, comboCourseClass as Class, comboCourseBatchStart as Batch_Date, comboCourseTeachers as teacher, comboCourseFees as Fees, comboCourseDisplayPicture')
            		->from('tbl_combo_courses')
            		->where('deleteStatus', '0');
            	$comboResponse = $this->db->get();
            	$comboResponse = $comboResponse->result_object();
            	if(!empty($comboResponse)){
            ?>
			<!-- /Popular courses widget -->
			<!-- Recent courses widget -->
	            <aside class="column-1_2 widget">
	                <h5 class="widget_title">Combo Courses</h5>
	                <?php
	                	foreach ($comboResponse as $comboCourse):
	                		$this->view('common_views/combo_courses', $comboCourse);
	                	endforeach;
	                ?>
	            </aside>
        	<?php }?>
			<!-- /Recent courses widget -->
        </div>
    </div>
</footer>