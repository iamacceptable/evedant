<div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
	<div class="sc_section_overlay">
		<div class="sc_section_content">
			<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
				<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Subjects Offered </h2>
				<div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description">
					<div class="isotope_wrap" data-columns="3">
						<?php
							foreach ($subjects as $subject):
								$this->view('common_views/course_isotope',$subject);
							endforeach;
						?>
						<!-- Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">
							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/iit.jpg">
										</a>
										<h4 class="post_title">
											<a>IIT JEE / NEET</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a>IIT JEE (Mains and Advance)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a>About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Classes for IIT JEE (Mains and Advance)</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
						<!-- Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">
							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/mathmatics.jpg">
										</a>
										<h4 class="post_title">
											<a>Mathematics</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a >For Classes (6th to 12th)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a>About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Full Syllabus Coverage from NCERT and R.D. Sharma/R.S. Aggarwal</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/physics.jpg">
										</a>
										<h4 class="post_title">
											<a>Physics</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a>For Classes (XI &amp; XII)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a>About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Full Syllabus Coverage of Physics XI &amp; XII</a><br>
													<a>Full Syllabus Coverage of Physics IX &amp; X in Science</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">
							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/chemistry.jpg">
										</a>
										<h4 class="post_title">
											<a>Chemistry</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a href="product-category.html">For Classes (XI &amp; XII)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a>About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Full Syllabus Coverage of Chemistry XI &amp; XII</a><br>
													<a>Full Syllabus Coverage of Chemistry IX &amp; X in Science</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">
							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/biology.jpg">
										</a>
										<h4 class="post_title">
											<a>Biology</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a>For Classes (XI &amp; XII)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a>About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Full Syllabus Coverage of Biology XI &amp; XII</a><br>
													<a>Full Syllabus Coverage of Biology IX &amp; X in Science</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
						<!-- <div class="isotope_item isotope_item_courses isotope_column_3">
							<div class="post_item post_item_courses odd">
								<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
									<div class="post_featured img">
										<a>
											<img alt="" src="<?= base_url();?>assets/images/uploads/courses/ssst.jpg">
										</a>
										<h4 class="post_title">
											<a>Science & S.St.</a>
										</h4>
										<div class="post_descr">
											<div class="post_price">
												<span class="post_price_value"></span>
											</div>
											<div class="post_category">
												<a>For Classes (6th to 8th)</a>
											</div>
										</div>
									</div>
									<div class="post_info_wrap info">
										<div class="info-back">
											<h4 class="post_title">
												<a href="free-course.html">About the Course</a>
											</h4>
											<div class="post_descr">
												<p>
													<a>Full Syllabus Coverage of Science and S.St. (6th to 8th)</a>
												</p>
												<div class="post_buttons">
													<div class="post_button">
														<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">View Courses</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 --><!-- /Courses item -->
					</div>
				</div>
				<a href="<?= base_url();?>Courses" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em">VIEW ALL COURSES</a>
			</div>
		</div>
	</div>
</div>