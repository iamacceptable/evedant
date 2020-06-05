<?php
	$this->view('components/header');
?>
	<body class="archive category body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <?php
				$this->view('components/landing_navbar');
			?>
            <!-- Page title -->
            <div class="page_top_wrap page_top_title page_top_breadcrumbs">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="<?= base_url();?>">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">Our Results</span> 
                    </div>
                    <h1 class="page_title">Our Star Performers</h1>
                </div>
            </div>
            <!-- Page title -->
			<!-- Content -->
            <div class="page_content_wrap" >
                <div class="content_wrap">
                    <div class="content">
                        <?php 
                            foreach($shootingStars as $star):
                                if(isset($star->starComment))
                                $this->view('results/articles_star_students',$star);
                            endforeach;
                        ?>
                    </div>
                </div>
                <div class="content">
                    <article class="post_item post_item_single page type-page">
                        <section class="post_content">
                           <?php
                                $this->view('results/students_slider');
                                $this->view('results/star_leading');
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