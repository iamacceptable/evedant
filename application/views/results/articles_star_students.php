<article 
	class="post_item post_item_excerpt post_featured_right post_format_image even post">
	<div class="post_featured" style="width: 30%">
		<div 
			class="post_thumb" >
				<img 
					alt="<?= $starName;?>" 
					src="<?= base_url()."assets/images/uploads/toppers/".$starDisplayPicture;?>">
		</div>
	</div>
	<div 
		class="post_content clearfix">
		<h3 
			class="post_title">
			<a>
				<span 
					class="post_icon icon-picture-boxed-2">		
				</span>
					<?= $starName;?>
			</a>
		</h3>
		<div 
			class="post_info">
			<span 
				class="post_info_item post_info_posted">
				<a 
					class="post_info_date"><?= $starMarks;?></a>
			</span>
			<span 
				class="post_info_item post_info_posted_by"><?= $starClass;?>
				<!-- <a href="#" class="post_info_author">John Doe</a>	 -->
			</span>
			
		</div>
		<div 
			class="post_descr">
			<p><?= $starComment;?></p>
			
		</div>
	</div>
</article>