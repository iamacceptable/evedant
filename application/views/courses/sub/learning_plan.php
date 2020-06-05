<li class="sc_list_item">
	<span class="sc_list_icon icon-dot"></span>
	<a class="course_lesson_title"><?= $heading; ?></a> | <span class="course_lesson_date"><?= date('M d, Y',strtotime($time)); ?></span> 
	<span class="course_lesson_by">by</span> 
	<a class="course_lesson_teacher"> <?= $master;?></a>
	<div class="course_lesson_excerpt"><?= $plan;?></div>
</li>