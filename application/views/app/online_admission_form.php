<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
?>
<!-- Start Page Banner -->
<div class="page-banner-area" style="background-image:url(<?php if (!empty($banner)) { echo base_url(); ?>uploads/banner/<?php echo $banner['banner_image'];} else { echo base_url('')."front_assets/img/page-banner/page-banner-2.jpg";}?>)">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2><?php $urlTitle = str_replace("-"," ", $url); echo ucwords($urlTitle); ?></h2>
                    <ul>
                        <li>
                            <a href="<?php echo base_url('');?>">Home</a>
                        </li>
                        <li><?php echo ucwords($urlTitle);?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <!-- Session Message Start -->
            <div class="row"><div class="col-md-12"></div></div>
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        if ($this->session->flashdata('errorMessage')) {
                            ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <strong>Action Denied!</strong> <?php echo $this->session->flashdata('errorMessage'); ?>
                                    </div>
                                </div>
                            <?php
                        }
                        if ($this->session->flashdata('successMessage')){
                            ?>
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        <strong>Action Accepted!</strong> <?php echo $this->session->flashdata('successMessage'); ?>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row"><div class="col-md-12"></div></div>
            <!-- Session Message End -->
            <div class="col-lg-12 col-md-12">
                <div class="contact-form">
                    <h3>Online Admission Form</h3>
                    <form id="contactForm" action="<?php echo base_url('').'save-online-form'?>" method="POST">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Student Name <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_student_name" id="online_form_student_name" class="form-control" required placeholder="Enter The Student Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Student Father Name <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_father_name" id="online_form_father_name" class="form-control" required placeholder="Enter The Student Father Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Student Mother Name</label>
                                    <input type="text" name="online_form_mother_name" id="online_form_mother_name" class="form-control" required placeholder="Enter The Student Mother Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Student Dob <span class="text-danger">*</span></label>
                                    <input type="date" name="online_form_date_of_birth" id="online_form_date_of_birth" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Father Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_father_number" id="online_form_father_number" class="form-control" required placeholder="Enter The Father Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Mother Contact Number </label>
                                    <input type="text" name="online_form_mother_number" id="online_form_mother_number" class="form-control" required placeholder="Enter The Mother Contact Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Gender <span class="text-danger">*</span></label>
                                    <select name="online_form_gender" id="online_form_gender" class="form-control" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Religion <span class="text-danger">*</span></label>
                                    <select name="online_form_religion" onchange="Fetch_Castle()" id="online_form_religion" class="form-control" required>
                                        <option>Select The Religion</option>
                                        <?php 
                                            foreach ($religion as $religion) {
                                                ?>
                                                    <option value="<?php echo $religion['religion_id'];?>"><?php echo ucwords($religion['religion_name'])?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Caste <span class="text-danger">*</span></label>
                                    <select name="online_form_category" id="online_form_category" class="form-control" required>
                                        <option>Select The Caste</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Admission Class <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_admission_class" id="online_form_admission_class" class="form-control" required placeholder="Enter The Admission Class">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Medium <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_medium" id="online_form_medium" class="form-control" required placeholder="Enter The Medium">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Previous School <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_previous_school_name" id="online_form_previous_school_name" class="form-control" required placeholder="Enter The Previous School">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Previous Class <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_preview_class" id="online_form_preview_class" class="form-control" required placeholder="Enter The Preview Class">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-4">
                                <div class="form-group">
                                    <label>Address <span class="text-danger">*</span></label>
                                    <input type="text" name="online_form_address" id="online_form_address" class="form-control" required placeholder="Enter The Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- <div class="col-lg-5 col-md-12">
                <div class="contact-information">
                    <h3>Here to Help</h3>

                    <ul class="contact-list">
                        <li><i class='bx bx-map'></i> Location: <span><?php echo $config['general_address'];?></span></li>
                        <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:<?php echo $config['general_phoneno'];?>"><?php echo $config['general_phoneno'];?></a></li>
                        <li><i class='bx bx-phone-call'></i> Mobile Number: <a href="tel:<?php echo $config['general_mobilno'];?>"><?php echo $config['general_mobilno'];?></a></li>
                        <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:<?php echo $config['general_emailid']?>"><span class="__cf_email__"><?php echo $config['general_emailid']?></span></a></li>
                        <li><i class='bx bx-microphone'></i> Fax: <a><?php echo $config['general_fax'];?></a></li>
                    </ul>

                    <h3>Opening Hours:</h3>
                    <ul class="opening-hours">  
                        <li><span>Monday: </span><?php echo date('h:i A', strtotime($config['general_full_dat_starttime'])).' - '.date('h:i A', strtotime($config['general_full_dat_endtime']));?></li>
                        <li><span>Tuesday: </span><?php echo date('h:i A', strtotime($config['general_full_dat_starttime'])).' - '.date('h:i A', strtotime($config['general_full_dat_endtime']));?></li>
                        <li><span>Wednesday: </span><?php echo date('h:i A', strtotime($config['general_full_dat_starttime'])).' - '.date('h:i A', strtotime($config['general_full_dat_endtime']));?></li>
                        <li><span>Thursday: </span><?php echo date('h:i A', strtotime($config['general_full_dat_starttime'])).' - '.date('h:i A', strtotime($config['general_full_dat_endtime']));?></li>
                        <li><span>Friday: </span><?php echo date('h:i A', strtotime($config['general_half_day_starttime'])).' - '.date('h:i A', strtotime($config['general_half_day_endtime']));?></li>
                        <li><span>Saturday: </span><?php echo date('h:i A', strtotime($config['general_full_dat_starttime'])).' - '.date('h:i A', strtotime($config['general_full_dat_endtime']));?></li>
                        <li><span>Sunday: </span>Closed</li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Contact Area -->