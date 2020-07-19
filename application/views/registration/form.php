<div class="content_wrap">
    <div class="content">
        <section class="comments_wrap">
            <div class="comments_form_wrap">
                <h2 class="section_title comments_form_title">Registration</h2>
                <div class="comments_form">
                    <div>
                        <form action="<?= base_url();?>Registration/register" method="post" >
                            <p class="comments_notes">Your email address and phone number are secured with us.</p>
                            <p class="comments_notes form-error">* fields are required.</p>
                            <?php
                                if(isset($successMessage)){
                                    if($successMessage == 'TRUE'){
                            ?>
                                    <div class="sc_infobox sc_infobox_style_success sc_infobox_closeable sc_infobox_iconed icon-check-2"><b>Success!</b> You are Registered successfully.</div>
                            <?php
                                    }
                                    else{
                            ?>
                                    <div class="sc_infobox sc_infobox_style_error sc_infobox_closeable sc_infobox_iconed icon-alert-2"><b>Failed!</b> Oops, something went wrong! Please Try Again.</div>
                            <?php
                                    }
                                }
                            ?>
                            <div class="columns_wrap">
                                <div class="comments_field column-1_2">
                                    <label for="regName">Name</label>
                                    <input name="regName" type="text" placeholder="Student Name*" value="<?= set_value('regName');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regName');?></small>
                                </div>
                                <div class="comments_field column-1_2">
                                    <label for="regPhone">Mobile Number</label>
                                    <input name="regPhone" type="number" placeholder="Phone Number*" value="<?= set_value('regPhone');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regPhone');?></small>
                                </div>
                                <div class="comments_field column-1_2">
                                    <label for="regClass">Class</label>
                                    <input name="regClass" type="number" placeholder="Class*" value="<?= set_value('regClass');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regClass');?></small>
                                </div>
                                <div class="comments_field column-1_2">
                                    <label for="regCourses">Phone Number</label>
                                    <input name="regCourses" type="text" placeholder="Subjects*" value="<?= set_value('regCourses');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regCourses');?></small>
                                </div>
                                <div class="comments_field column-1_1">
                                    <label for="regEmail">Email</label>
                                    <input name="regEmail" type="text" placeholder="Student Email Address" value="<?= set_value('regEmail');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regEmail');?></small>
                                </div>
                                <div class="comments_field column-1_1">
                                    <label for="regSchool">Website</label>
                                    <input name="regSchool" type="text" placeholder="School Name*" value="<?= set_value('regSchool');?>" size="30" aria-required="true" />
                                    <small class="form-error comments_notes"><?= form_error('regSchool');?></small>
                                </div>
                                <p class="comments_notes">By entering Email Addressand submitting this registration you  suscribed to our newsletter.</p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" class="submit" value="REGISTER" />
                            </p>
                        </form>
                    </div>
                 </div>
            </div>
        </section>
    </div>
</div>
