<article class="post_item post_item_single_courses courses">
    <section class="post_featured bg_tint_dark">
        <div class="post_thumb" data-image="<?= base_url()."assets/images/uploads/courses/covers/".$subjectCoverPicture; ?>" data-title="Mathematics">
        <!-- <div class="post_thumb" data-image="http://education-html.themerex.net/images/masonry_04-1150x647.jpg" data-title="Mathematics"> -->
            <img alt="" src="<?= base_url()."assets/images/uploads/courses/covers/".$subjectCoverPicture; ?>"> 
		</div>
        <div class="post_thumb_hover">
            <div class="post_icon icon-book-2"></div>
            <div class="post_categories">
				<a class="courses_group_link"><?= $className; ?></a></div>
            <h1 class="post_title entry-title"><?= $subjectName; ?></h1>
        </div>
    </section>
    <div class="content_wrap">
        <div class="post_info">
            <span class="post_info_item post_info_posted">Batch started from 
				<a class="post_info_date date updated" content="<?= $courseBatchStart?>"><?= $courseBatchStart;?></a>
			</span>
            <span class="post_info_item post_info_time"><?= $courseBatchTimings; ?></span><br>
            <span class="post_info_item post_info_length">By 
				<span class="post_info_months"><?= $teamMemberName;?></span>
			</span>
        </div>
        <section class="post_content">
			<!-- Course info section -->								
			<h2 class="margin_top_1em">About the Course</h2>
			<p><?= $courseLongDescription; ?></p>
			<form action="<?= base_url();?>Courses/download_course_content" method="POST">	
				<input type="hidden" name="courseName" value="<?= $courseContent;?>">
				<button type="submit" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small margin_top_2em">Download Course Content</button>
			</form>
			<div class="sc_line sc_line_style_solid margin_top_4em margin_bottom_0"></div>
			<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
				<div class="column-3_3 sc_column_item sc_column_item_1 odd first span_2">
					<div class="sc_lessons">
						<div class="course_toc">
							<h2 class="course_toc_title">Learning Plan</h2>
							<?php 
								if(!empty($learningPlans)){
							?>
							<ul class="sc_list sc_list_style_iconed">
								<?php
									foreach($learningPlans as $plan):
										$this->view('courses/sub/learning_plan', $plan);
									endforeach;
								?>
							</ul>
							<?php } else{ ?>
								<p>Learning Plan will be uploaded soon by the associated faculty. Happy Learning!!</p>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="sc_line sc_line_style_solid margin_top_4em margin_bottom_0"></div>
			<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
				<div class="column-3_3 sc_column_item sc_column_item_1 odd first span_2">
					<div class="sc_lessons">
						<div class="course_toc">
							<h2 class="course_toc_title">Fee Structure</h2>
							<?php
								if(isset($fees)){
							?>
							<table class="text_center">
							  	<thead>
							    	<tr>
										<th class="header">Registration Fees</th>
										<th class="header">Tuition Fees</th>
										<th class="header">Study Material Fees</th>
										<th class="header">GST</th>
								    </tr>
							    </thead>
							 	<tbody>
								    <?php
								    	$this->view('courses/sub/fee_structure', $fees);
								    ?>
							  	</tbody>
							</table>
						 	<?php } else{ ?>
						 		<p>Fees Structure is Uploaded soon by the associated faculty.</p>
						 	<?php } ?>
						</div>
					</div>
				</div>
			</div>
        </section>
    </div>
</article>