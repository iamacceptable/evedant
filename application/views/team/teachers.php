<div class="sc_section" data-animation="animated fadeInUp normal">
	<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp">
		<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Our Teachers</h2>
		<div class="sc_team sc_team_style_1" data-animation="animated fadeInUp normal">
			<div class="sc_columns columns_wrap text_center">
				<?php
					foreach($team as $teacher):
						$this->view('team/member',$teacher);
					endforeach;
				?>
			</div>
		</div>
		<?php
			if(!empty($supports)){ 
		?>
			<div class="sc_line sc_line_style_solid margin_top_1em"></div>
			<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center" data-animation="animated fadeInUp normal">Our Supports</h2>
			<div class="sc_team sc_team_style_2" data-animation="animated fadeInUp normal">
				<div class="sc_columns columns_wrap text_center">
					<?php
					foreach($supports as $member):
						$this->view('team/member',$member);
					endforeach;
					?>
				</div>
			</div>
		<?php }?>
	</div>
</div>
<div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>