<?php 
    foreach($home as $home){}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Session Message Start -->
    <div class="row">
        <div class="col-md-12"></div>
    </div>
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
    <div class="row">
        <div class="col-md-12"></div>
    </div>
    <!-- Session Message End -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Home Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/home/update_home" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Home Page</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Section 01  <strong>Who We Are</strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Section Image <span class="text-danger">*</span>
                                                    <br>
                                                    <span class="text-info">['For Best View of Image Height=850px,Width:850px'] </span></label>
                                                    <input type="hidden" value="<?php echo $home['home_id'];?>" name="home_id">
                                                    <input type="file" class="form-control" name="home_section1_image" id="home_section1_image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Preview Section Image <span class="text-danger">*</span></label>
                                                    <img class="img-fluid" src="<?php echo base_url('').'uploads/home/'.$home['home_section1_image'];?>" alt="image" width="70%"> 
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Short Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section1_short_time" id="home_section1_short_time" value="<?php echo $home['home_section1_short_time'];?>" placeholder="Enter The Short Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section1_title" id="home_section1_title" value="<?php echo $home['home_section1_title'];?>" placeholder="Enter The Title">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Description <span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control" name="home_section1_description" id="home_section1_description" placeholder="Enter The Description"><?php echo $home['home_section1_description'];?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Button Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section1_button_title" id="home_section1_button_title" value="<?php echo $home['home_section1_button_title'];?>" placeholder="Enter The Button Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Select Page <span class="text-danger">*</span></label>
                                                <select name="home_section1_button_url" id="home_section1_button_url" class="form-control">
                                                    <option>Select The Page</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'about-us'){ echo "selected"; } ?> value="about-us">About Us</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'our-mission-vission'){ echo "selected" ;}?> value="our-mission-vission">Our Mission & Vission</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'our-value'){ echo "selected" ;}?> value="our-value">Our Value</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'director-message'){ echo "selected" ;}?> value="director-message">Director Message</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'principal-message'){ echo "selected" ;}?> value="principal-message">Principal Message</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'academic-course'){ echo "selected" ;}?> value="academic-course">Acedemic Course</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'parents-teacher-meeting'){ echo "selected" ;}?> value="parents-teacher-meeting">Parents Teacher Meeting</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'suggestion-to-parents'){ echo "selected" ;}?> value="suggestion-to-parents">Suggestion To Parents</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'curriculum'){ echo "selected" ;}?> value="curriculum">Curriculum</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'celebration'){ echo "selected" ;}?> value="celebration">Celebration</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'school-rules-and-regulations'){ echo "selected" ;}?> value="school-rules-and-regulations">School Rules And Regulation</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'registration-process'){ echo "selected" ;}?> value="registration-process">Registration Process</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'document-required'){ echo "selected" ;}?> value="document-required">Document Required</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'online-admission-form'){ echo "selected" ;}?> value="online-admission-form">Online Admission Form</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'admission-procedure'){ echo "selected" ;}?> value="admission-procedure">Admission Procedure</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'fee-policies'){ echo "selected" ;}?> value="fee-policies">Fee Policies</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'school-policies'){ echo "selected" ;}?> value="school-policies">School Policies</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'event'){ echo "selected" ;}?> value="event">Event</option>
                                                    <option <?php  if($home['home_section1_button_url'] == 'contact-us'){ echo "selected" ;}?> value="contact-us">Contact Us</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Section 02 <strong> Our Core Values </strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Section Image <span class="text-danger">*</span>
                                                    <br>
                                                    <span class="text-info">['For Best View of Image Height=550px,Width:670px'] </span></label>
                                                    <input type="file" class="form-control" name="home_section2_image" id="home_section2_image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Preview Section Image <span class="text-danger">*</span></label>
                                                    <img class="img-fluid" src="<?php echo base_url('').'uploads/home/'.$home['home_section2_image'];?>" alt="image" width="70%"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Short Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_short_title" id="home_section2_short_title" value="<?php echo $home['home_section2_short_title'];?>" placeholder="Enter The Short Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_title" id="home_section2_title" value="<?php echo $home['home_section2_title'];?>" placeholder="Enter The Title">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>01 Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_1_title" id="home_section2_1_title" value="<?php echo $home['home_section2_1_title'];?>" placeholder="Enter The 01 Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>01 Description <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_1_description" id="home_section2_1_description" value="<?php echo $home['home_section2_1_description'];?>" placeholder="Enter The 01 Description">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>02 Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_2_title" id="home_section2_2_title" value="<?php echo $home['home_section2_2_title'];?>" placeholder="Enter The 02 Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>02 Description <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_2_description" id="home_section2_2_description" value="<?php echo $home['home_section2_2_description'];?>" placeholder="Enter The 02 Description">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>03 Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_3_title" id="home_section2_3_title" value="<?php echo $home['home_section2_3_title'];?>" placeholder="Enter The 03 Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>03 Description <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section2_3_description" id="home_section2_3_description" value="<?php echo $home['home_section2_3_description'];?>" placeholder="Enter The 03 Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Section 03 <strong>Testimonials</strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Testimonials Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section3_title" id="home_section3_title" value="<?php echo $home['home_section3_title'];?>" placeholder="Enter The Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Testimonials Description <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section3_description" id="home_section3_description" value="<?php echo $home['home_section3_description'];?>" placeholder="Enter The Description">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Section 04 <strong>Events</strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Events Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="home_section4_title" id="home_section4_title" value="<?php echo $home['home_section4_title'];?>" placeholder="Enter The Title">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button onclick="if (!confirm('Are You Sure Want To Update Home Page Content ?')) return false;" type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->