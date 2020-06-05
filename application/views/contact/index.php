<?php
	$this->view('components/header');
?>
	<body class="page body_style_fullscreen body_filled article_style_stretch template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <?php
				$this->view('components/landing_navbar');
			?>
			<!-- Content -->
            <div class="page_content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">                       
                        <section class="post_content">
                           <?php
                           		$this->view('contact/details');
                                $this->view('contact/form');
                           ?>
                       </section>
                   </article>
                </div>
            </div>  
            <!-- /Content without sidebar -->
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