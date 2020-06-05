<div class="sc_section" data-animation="animated fadeInUp normal">
	<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
		<div class="sc_section aligncenter width_70per">
			<h2 class="sc_title sc_title_regular margin_top_0">Shooting Stars of Evedant</h2>
		</div>
		<div id="sc_section_4" class="sc_section margin_top_1_5em_imp margin_bottom_0_imp height_1300">
			<div id="sc_section_4_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container height_1300">
				<div class="sc_scroll_wrapper swiper-wrapper">
					<div class="sc_scroll_slide swiper-slide">
						<?php
							foreach ($shootingStars as $star):
								$this->view('common_views/star',$star);
							endforeach;
						?>
					</div>
				</div>
				<div id="sc_section_4_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_471175375_scroll_bar"></div>
			</div>
		</div>
	</div>
</div>