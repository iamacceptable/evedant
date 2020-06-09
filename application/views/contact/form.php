<div class="sc_section bg_tint_dark sc_contact_bg_img">
	<div class="sc_section_overlay sc_contact_bg_color" data-overlay="0.8" data-bg_color="#024b5e">
		<div class="sc_section_content">
			<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3_5em_imp">
				<div id="sc_contact_form" class="sc_contact_form sc_contact_form_standard aligncenter width_80per">
					<h2 class="sc_contact_form_title">Contact Us Today</h2>
					<?php
						if(isset($successMessage)){
							if($successMessage == 'TRUE'){
					?>
							<p class="text_center success-message">You Query is recorded Successfully.</p>
					<?php
							}
							else{
					?>
							<p class="text_center danger-message">Oops!! Something went wrong. Try again!!</p>
					<?php
							}
						}
					?>
					<form method="post" action="<?=base_url();?>Contact_Us/sendMessage">
						<div class="sc_contact_form_info">
							<div class="sc_contact_form_item sc_contact_form_field label_over">
								<label  for="username">Name</label>
								<input id="username" type="text" name="userName" placeholder="Name *" value="<?= set_value('userName');?>">
								<small class="form-error"><?= form_error('userName');?></small>
							</div>
							<div class="sc_contact_form_item sc_contact_form_field label_over">
								<label  for="phone">Phone</label>
								<input id="phone" type="number" name="phoneNumber" placeholder="Mobile Number *" value="<?= set_value('phoneNumber');?>">
								<small class="form-error"><?= form_error('phoneNumber');?></small>
							</div>
							<div class="sc_contact_form_item sc_contact_form_field label_over">
								<label  for="email">Email</label>
								<input id="email" type="email" name="userEmail" placeholder="Email Address *" value="<?= set_value('userEmail');?>">
								<small class="form-error"><?= form_error('userEmail');?></small>
							</div>
						</div>
						
						<div class="sc_contact_form_item sc_contact_form_message label_over">
							<label for="message">Message</label>
							<textarea id="message" name="userMessage" placeholder="Your Query!!"></textarea>
						</div>
						<div class="sc_contact_form_item sc_contact_form_button">
							<button type="submit">SEND MESSAGE</button>
						</div>
						<div class="result sc_infobox"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>