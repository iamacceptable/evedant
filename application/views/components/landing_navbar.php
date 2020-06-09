<header class="top_panel_wrap bg_tint_dark">
	<!-- User menu -->
    <div class="menu_user_wrap">
        <div class="content_wrap clearfix">
            <div class="menu_user_area menu_user_left menu_user_contact_area">
            	Contact us on +91 9811333406 &amp; +91 7678612504 or <a href="mailto: hr@evedant.in">hr@evedant.in</a>
            </div>
        </div>
    </div>
	<!-- /User menu -->
	<!-- Main menu -->
    <div class="menu_main_wrap logo_left">					
        <div class="content_wrap clearfix">
			<!-- Logo -->
            <div class="logo">
                <a href="<?= base_url();?>">
					<img src="<?= base_url();?>assets/images/logo.png" class="logo_main" alt="">
					<img src="<?= base_url();?>assets/images/logo.png" class="logo_fixed" alt="">
				</a>
            </div>
			<!-- Logo -->
			<!-- Navigation -->
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
			<nav class="menu_main_nav_area">
				<ul id="menu_main" class="menu_main_nav">
					<li class="menu-item <?php if($navAncestor == 'Home'){echo 'current-menu-item page_item current_page_item';}?>">
						<a href="<?= base_url();?>">Home</a>
					</li>
					<li class="menu-item <?php if($navAncestor == 'Courses'){echo 'current-menu-item page_item current_page_item';}?>"><a href="<?= base_url();?>Courses">Courses</a>
					</li>
					<li class="menu-item <?php if($navAncestor == 'Team'){echo 'current-menu-item page_item current_page_item';}?>">
						<a href="<?= base_url();?>Team">Team</a>
					</li>
					<li class="menu-item <?php if($navAncestor == 'Results'){echo 'current-menu-item page_item current_page_item';}?>">
						<a href="<?= base_url();?>Results" >Our Results</a>
					</li>
					<li class="menu-item menu-item-has-children"><a>Study Material</a>
						<ul class="sub-menu">
							<?php
								$this->db
									->select('tbl_study_material.studyMaterialID as id,tbl_study_material.studyMaterialName as doc, tbl_study_material_category.studyMaterialCategory as category, tbl_class.className as division')
									->from('tbl_study_material')
									->join('tbl_class', 'tbl_study_material.studyMaterialClass = tbl_class.classID')
									->join('tbl_study_material_category', 'tbl_study_material.studyMaterialCategory = tbl_study_material_category.studyMaterialCategoryID')
									->where('tbl_study_material.deleteStatus' ,'0')
									->where('tbl_study_material_category.deleteStatus' ,'0')
									->order_by('tbl_class.classID', 'ASC');
								$response = $this->db->get();
								$response = $response->result_array();
								$studyMaterial = array();
								foreach ($response as $key):
									$division = $key['division'];
									$category = $key['category'];
									if(!isset($studyMaterial[$division][$category]))
										$studyMaterial[$division][$category] = array();
									$material = array(
										'doc' => $key['doc'],
										'id' => $key['id']
									);
									array_push($studyMaterial[$division][$category], $material);
								endforeach;

								foreach ($studyMaterial as $division => $categories) {
							?>
								<li class="menu-item menu-item-has-children"><a><?= $division?></a>
									<ul class="sub-menu">
									<?php
										foreach ($categories as $category => $docs) {
									?>
										<li class="menu-item menu-item-has-children"><a><?= $category;?></a>
											<ul class="sub-menu">
												<?php
													foreach ($docs as $doc){
												?>
													<li class="menu-item"><a href="<?= base_url();?>Courses/download_study_material/<?= $doc['id'];?>"><?= $doc['doc']; ?></a></li>
												<?php
													}
												?>
											</ul>
										</li>
									<?php		
										}
									?>
									</ul>
								</li>
							<?php 
								}
							?>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children <?php if($navAncestor == 'More'){echo 'current-menu-ancestor current-menu-parent';}?>"><a>More</a>
						<ul class="sub-menu">
							<!-- <li class="menu-item <?php if($navChild == 'Testimonials'){ echo 'current-menu-item';}?>"><a href="#">Our Testimonials</a></li> -->
							<li class="menu-item <?php if($navChild == 'About'){ echo 'current-menu-item';}?>"><a href="<?= base_url();?>About_Us">About Evedant</a></li>
							<li class="menu-item <?php if($navChild == 'Contact'){ echo 'current-menu-item';}?>"><a href="<?= base_url();?>Contact_Us">Contact Us</a></li>
							
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /Navigation -->
        </div>
    </div>
	<!-- /Main menu -->
</header>