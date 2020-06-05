<div class="isotope_filters ">
	<a href="#" data-filter="*" class="isotope_filters_button active">All</a>
	<?php
		foreach($allClasses as $class):
	?>
    <a href="#" data-filter="<?= ".class_".$class->classID;?>" class="isotope_filters_button"><?= $class->className;?></a>
    <?php
    	endforeach;
    ?>
</div>