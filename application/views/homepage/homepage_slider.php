<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">                    
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">
            <ul>
                <?php
                    foreach($carousels as $slide):
                        $this->view('homepage/sub/slide',$slide);
                    endforeach;
                ?>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
	</div>
</section>