<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>Admin/dashboard">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!-- Students -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#students" aria-expanded="false" aria-controls="students">
                <i class="ti-user menu-icon"></i>
                    <span class="menu-title">Students</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="students">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_students">All Students</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/admission_form">Admission Form</a></li>
                </ul>
            </div>
        </li>
        <!-- Teachers -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="false" aria-controls="teachers">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Teachers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="teachers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_teachers">All Teachers</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_teacher">Add New Teacher</a></li>
                </ul>
            </div>
        </li>
        <!-- Classes -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>Admin/all_classes">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Classes</span>
            </a>
        </li>
        <!-- Subjects -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subjects" aria-expanded="false" aria-controls="subjects">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Subjects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subjects">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_subjects">All Subjects</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_subject">Add New Subject</a></li>
                </ul>
            </div>
        </li>
        <!-- Courses -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#courses" aria-expanded="false" aria-controls="courses">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Courses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="courses">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_teachers">All Courses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_course">Add New Course</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/assign_course">Assign Course</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/fee_structure">Fee Structure</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/learning_plan">Learning Plan</a></li>
                </ul>
            </div>
        </li>
        <!-- Study Material -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#study_material" aria-expanded="false" aria-controls="study_material">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Study Material</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="study_material">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_study_material">All Study Materials</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/study_material_category">Categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_study_material">Add New</a></li>
                </ul>
            </div>
        </li>
        <!-- Shooting Stars -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#shooting_star" aria-expanded="false" aria-controls="shooting_star">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Shooting Stars</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="shooting_star">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_stars">All Sars</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_star">Add New Star</a></li>
                </ul>
            </div>
        </li>
        <!-- Team -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>Admin/team">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Team</span>
            </a>
        </li>
        <!-- Testimonials -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#testimonials" aria-expanded="false" aria-controls="testimonials">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Testimonials</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="testimonials">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/all_testimonials">All Testimonials</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/add_new_testimonials">Add New</a></li>
                </ul>
            </div>
        </li>
        <!-- Homepage Settings -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#homepage_settings" aria-expanded="false" aria-controls="homepage_settings">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Homepage Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="homepage_settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/homepage_carousel">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/homepage_stars">Shooting Stars</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/homepage_courses">Courses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/homepage_tags">Tags</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/homepage_tags">Tags</a></li>
                </ul>
            </div>
        </li>
        <!-- Star Courses -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#star_courses" aria-expanded="false" aria-controls="star_courses">
                <i class="ti-blackboard menu-icon"></i>
                    <span class="menu-title">Star Courses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="star_courses">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/combo_courses">Combo Courses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/popuar_courses">Popular Courses</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>