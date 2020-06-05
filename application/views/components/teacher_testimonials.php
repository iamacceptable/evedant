<footer class="testimonials_wrap sc_section bg_tint_dark post_ts_bg3">
    <div class="sc_section_overlay" data-bg_color="#1eaace" data-overlay="0">
        <div class="content_wrap">
			<!-- Testimonials section -->
			<div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_height_fixed aligncenter height_12em width_100per" data-old-height="12em" data-interval="7000">
				<div class="slides swiper-wrapper">
					<?php
						$this->db
							->select('testimonialName, testimonialDesignation, testimonialDisplayPicture, testimonialMessage')
							->from('tbl_testimonials')
							->where('deleteStatus', '0');
							$response = $this->db->get();
							$response = $response->result_object();

							foreach ($response as $testimonial):
								$this->view('common_views/testimonial', $testimonial);
							endforeach;
					?>
				</div>
				<div class="sc_slider_controls_wrap">
					<a class="sc_slider_prev" href="#"></a>
					<a class="sc_slider_next" href="#"></a>
				</div>
			</div>
			<!-- /Testimonials section -->
        </div>
    </div>
</footer>