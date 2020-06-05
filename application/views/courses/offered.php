<div class="content">
	<?php
        $this->view('courses/all_class');
    ?>
    <div class="isotope_wrap" data-columns="3">
		<!-- @golu -->
        <?php
            foreach($courses as $course):
                $this->view('common_views/course_isotope', $course);
            endforeach;
        ?>  
    </div>
</div>