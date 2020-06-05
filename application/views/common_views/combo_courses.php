<article class="post_item with_thumb first">
    <div class="post_thumb">
		<img alt="" src="<?= base_url();?>assets/images/uploads/combo_courses/<?= $comboCourseDisplayPicture;?>"> 	
	</div>
    <div class="post_content">
        <h6 class="post_title">
			<a><?= $Subject." ".$Class; ?></a>
		</h6>
        <div class="post_info"><span class="post_info_item post_info_posted">
			<a class="post_info_date"><?= "Starting From: ".$Batch_Date; ?></a></span>
			<span class="post_info_item post_info_posted_by">by 
				<a class="post_info_author"><?= $teacher." (".$designation.")"; ?></a>
			</span>
			<br>
			<span class="post_info_item post_info_counters">
				<a class="post_counters_item post_counters_rating icon-star-1">
					<span class="post_counters_number">Fee: <?= "₹ ".$Fees; ?>/-</span>
				</a>
            </span>
        </div>
    </div>
</article>