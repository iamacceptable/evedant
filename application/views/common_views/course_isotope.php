<div class="isotope_item isotope_item_courses isotope_column_3 <?= $header == 'Courses' ? 'class_'.$classID : ''?>">
    <article class="post_item post_item_courses even">
        <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
            <div class="post_featured img">
                <a>
					<img alt="" src="<?= base_url()."assets/images/uploads/courses/".$subjectDisplayPicture?>">
				</a>
                <h4 class="post_title"><?= $subjectName;?></a>
				</h4>
                <div class="post_descr">
                    <?php
                        if($header == 'Courses'){
                    ?>
                    <div class="post_price">
						<span class="post_price_value"><?= "₹ ".$courseBasicFees;?></span>
						<span class="post_price_period">yearly</span>
					</div>
                    <div class="post_category">
						<a><?= $className;?></a>
					</div>
                    <?php
                        } else {
                    ?>
                    <div class="post_category">
                        <a><?= $homepageSubjectTag;?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="post_info_wrap info">
                <div class="info-back">
                    <h4 class="post_title">
						<a ><?= $header == 'Courses' ? $courseName : 'About the Subject'?></a>
					</h4>
                    <div class="post_descr">
                        <p>
							<a><?= $header == 'Courses' ? str_replace("\n", "<br>", $courseShortDescription) : str_replace("\n", "<br>", $homepageSubjectAbout)?></a>
						</p>
                        <div class="post_buttons">
                            <div class="post_button">
                                <?php
                                    if($header == 'Courses'){
                                ?>
								<a href="<?= base_url();?>Courses/course_details/<?= $courseID;?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">More Details</a>

                                <?php
                                    }
                                ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>