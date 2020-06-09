<?php
	$this->view('components/header');
?>
	<body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <?php
				$this->view('components/landing_navbar');
			?>
			<!-- Homepage slider -->
			<?php
				$this->view('homepage/homepage_slider');
			?>
			<!-- Homepage slider -->
			<!-- Content -->
            <div class="page_content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
						<section class="post_content">
							<!-- Stars section -->		
							<?php
								$this->view('homepage/show_stoppers')
							?>	
							<!-- Courses section -->
							<?php
								$this->view('homepage/homepage_subjects')
							?>
							<!-- /Courses section -->
							<!-- Tags section -->
							<?php
								$this->view('homepage/homepage_tags');
							?>
							<!-- Video Section -->
							<?php
								$this->view('homepage/homepage_story')	
							?>
							<!-- Video Section -->
							<!-- Compare section -->
							<?php
								$this->view('homepage/homepage_compare')
							?>
							
                        </section>
                    </article>
                </div>
            </div>
            <!-- /Content without sidebar -->
			<!--  Footer Courses-->
			<?php
				$this->view('components/footer_courses');
			?>
			<!-- / Footer Courses-->
			<!-- Testimonials footer -->
			<?php
				$this->view('components/teacher_testimonials')
			?>
			<!-- /Testimonials footer -->
			<!-- Footer -->
            <?php
            	$this->view('components/page_footer');
            ?>
            <!--  Footer -->
			<!-- Copyright -->
            <?php
            	$this->view('components/copyrights')
            ?>
			<!-- /Copyright -->
        </div>
    </div>
    <!-- /Body -->
<?php
	$this->view('components/footer');
?>