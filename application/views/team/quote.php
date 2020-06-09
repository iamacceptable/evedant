<div class="sc_section accent_top" data-animation="animated fadeInUp normal sc_bg1">
			<div class="sc_section_overlay">
				<div class="sc_section_content">
					<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_3em_imp">
						<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_08em text_center">About Our Team Spirit</h2>
						<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
							<div class="column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp">
								<blockquote cite="#" class="sc_quote width_80per">
									<p><?= $banner->teamBannerQuote;?></p>
									<p class="sc_quote_title">
										<a><?= $banner->teamBannerAuthor;?></a>
									</p>
								</blockquote>
							</div>
							<div class="column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp">
								<figure class="sc_image sc_image_shape_square">
									<img src="<?= base_url()."assets/images/uploads/banner/".$banner->teamBannerPicture;?>" alt="" />
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>