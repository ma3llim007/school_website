<?php 
    $controllers = $this->uri->segment(2);
    $method = $this->uri->segment(3);
?>
<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('');?>admin/dashboard" class="brand-link">
        <img src="<?php echo base_url('');?>admin_assets/dist/logo.png" alt="Bright View International School Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Bright View</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>" class="nav-link" target="_blanks">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Main Site</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>admin/dashboard" class="nav-link <?php if ($controllers =='dashboard' AND $method=='' || $method=='index') { echo 'active'; } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>admin/home/" class="nav-link <?php if ($controllers =='home' AND $method=='' || $method=='index') { echo 'active'; } ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home Page</p>
                    </a>
                </li>
                <li class="nav-item <?php if ($controllers =='event') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>Manage Event <i class="right fas fa-angle-left"></i></p>
                        
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/event/';?>" class="nav-link <?php if ($controllers == 'event' AND $method =='' || $method=='index') { echo 'active'; } ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/event/event_listing';?>" class="nav-link <?php if ($method =='event_listing') { echo 'active'; } ?>">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Event List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='enquiry') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contact Enquiry <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/enquiry/';?>" class="nav-link <?php if ($controllers =='enquiry') { echo 'active'; } ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Enquiry</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='about') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Manage About Us<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/about/about_us';?>" class="nav-link <?php if ($method =='about_us') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>About Us</p></a>
                            <a href="<?php echo base_url('').'admin/about/our_mission';?>" class="nav-link <?php if ($method =='our_mission') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Our Mission And VIsion</p></a>
                            <a href="<?php echo base_url('').'admin/about/our_value';?>" class="nav-link <?php if ($method =='our_value') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Our Value</p></a>
                            <a href="<?php echo base_url('').'admin/about/director_message';?>" class="nav-link <?php if ($method =='director_message') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Director Message</p></a>
                            <a href="<?php echo base_url('').'admin/about/principal_message';?>" class="nav-link <?php if ($method =='principal_message') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Principal Message</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='academic') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>Manage Academic<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/academic/academic_course';?>" class="nav-link <?php if ($method =='academic_course') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Academic Course</p></a>
                            <a href="<?php echo base_url('').'admin/academic/parents_teacher_meeting';?>" class="nav-link <?php if ($method =='parents_teacher_meeting') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Parents Teacher Meeting</p></a>
                            <a href="<?php echo base_url('').'admin/academic/suggestion_parents';?>" class="nav-link <?php if ($method =='suggestion_parents') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Suggestion to Parents</p></a>
                            <a href="<?php echo base_url('').'admin/academic/curriculum';?>" class="nav-link <?php if ($method =='curriculum') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Curriculum</p></a>
                            <a href="<?php echo base_url('').'admin/academic/celebration';?>" class="nav-link <?php if ($method =='celebration') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Celebration</p></a>
                            <a href="<?php echo base_url('').'admin/academic/school_rules';?>" class="nav-link <?php if ($method =='school_rules') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>School Rules</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='admission') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Manage Admission<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/admission/registration_process';?>" class="nav-link <?php if ($method =='registration_process') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Registration Process</p></a>
                            <a href="<?php echo base_url('').'admin/admission/document_required';?>" class="nav-link <?php if ($method =='document_required') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Document Required</p></a>
                            <a href="<?php echo base_url('').'admin/admission/online_admission_form';?>" class="nav-link <?php if ($method =='online_admission_form') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Online Admission Form</p></a>
                            <a href="<?php echo base_url('').'admin/admission/admission_procedure';?>" class="nav-link <?php if ($method =='admission_procedure') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Admission Procedure</p></a>
                            <a href="<?php echo base_url('').'admin/admission/fee_policies';?>" class="nav-link <?php if ($method =='fee_policies') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Fee Policies</p></a>
                            <a href="<?php echo base_url('').'admin/admission/school_policies';?>" class="nav-link <?php if ($method =='school_policies') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>School Policies</p></a>
                            <a href="<?php echo base_url('').'admin/admission/religion';?>" class="nav-link <?php if ($method =='religion') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Religion & Caste</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='pages') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paint-roller"></i>
                        <p>Manage Pages<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/pages/privacy_policy';?>" class="nav-link <?php if ($method =='privacy_policy') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Privacy Policy</p></a>
                            <a href="<?php echo base_url('').'admin/pages/terms_condition';?>" class="nav-link <?php if ($method =='terms_condition') { echo 'active'; } ?>"><i class="nav-icon fas fa-plus"></i><p>Terms & Condition</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='slider') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Manage Slider <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/slider/';?>" class="nav-link <?php if ($controllers =='slider' AND $method =='' OR $method =='index') { echo 'active'; } ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($controllers =='banner') { echo 'menu-open'; } ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Manage Banner <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('').'admin/banner/';?>" class="nav-link <?php if ($controllers =='banner' AND $method =='' OR $method =='index') { echo 'active'; } ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>admin/testimonial/" class="nav-link <?php if ($controllers =='testimonial' AND $method=='' || $method=='index') { echo 'active'; } ?>">
                        <i class="nav-icon fas fa-star"></i>
                        <p>Testimonial</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>admin/seo/" class="nav-link <?php if ($controllers =='seo' AND $method=='' || $method=='index') { echo 'active'; } ?>">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>SEO Setting </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('');?>admin/school/general_settings" class="nav-link <?php if ($controllers =='school' AND $method=='general_settings') { echo 'active'; } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>General Setting</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>