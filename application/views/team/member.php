<div class="column-1_3 text_left">
					<div class="sc_team_item sc_team_item_1 odd first">
						<div class="sc_team_item_avatar">
							<img alt="<?= $teamMemberName;?>" src="<?= base_url();?>assets/images/uploads/teachers/<?= $teamMemberDisplayPicture?>"></div>
						<div class="sc_team_item_info">
							<h6 class="sc_team_item_title">
								<a><?= $teamMemberName;?></a>
							</h6>
							<div class="sc_team_item_position"><?= $teamMemberDesignation;?></div>
							<div class="sc_team_item_description">
								<p><?= $teamMemberQualification;?></p>
							</div>
							<div class="sc_socials sc_socials_size_small">
							<?php
								if(isset($teamMemberFacebook)){
							?>
								<div class="sc_socials_item">
									<a href="<?= $teamMemberFacebook;?>" target="_blank" class="social_icons social_facebook">
										<span class="sc_socials_hover social_facebook"></span>
									</a>
								</div>
							<?php
								}
								if(isset($teamMemberLinkedIn)){
							?>
								<div class="sc_socials_item">
									<a href="<?= $teamMemberLinkedIn;?>" target="_blank" class="social_icons social_linkedin">
										<span class="sc_socials_hover social_linkedin"></span>
									</a>
								</div>
							<?php
								}
								if(isset($teamMemberTwitter)){
							?>
								<div class="sc_socials_item">
									<a href="<?= $teamMemberTwitter;?>" target="_blank" class="social_icons social_twitter">
										<span class="sc_socials_hover social_twitter"></span>
									</a>
								</div>
							<?php } ?>
								<div class="sc_socials_item">
									<a href="<?= "mailto: ".$teamMemberEmail;?>" target="_blank" class="social_icons social_gplus">
										<span class="sc_socials_hover social_gplus"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>