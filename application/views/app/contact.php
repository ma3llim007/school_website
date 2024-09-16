<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($general_tbl as $config) {}
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
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm" action="<?php echo base_url('').'save-message'?>" method="POST">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="contact_enquiry_name" id="contact_enquiry_name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="contact_enquiry_email" id="contact_enquiry_email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="contact_enquiry_phone_number" id="contact_enquiry_phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number" maxlength="10" minlength="10">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="contact_enquiry_subject" id="contact_enquiry_subject" class="form-control" required data-error="Please enter your subjects" placeholder="Subjects">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="contact_enquiry_message" id="contact_enquiry_message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
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
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Map -->
<div id="map">
    <iframe src="<?php echo $config['general_iframe_address']; ?>" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- End Map -->