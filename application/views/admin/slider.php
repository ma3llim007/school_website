<?php foreach($selectadmin as $admindata){} ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Slider</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/slider/insert_slider" method="POST"
                enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert Slider's</h3>
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
                    <div class="card-body " style="display: block;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Title"
                                        id="slider_title" required name="slider_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sub Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Sub-Title"
                                        id="slider_sub_title" required name="slider_sub_title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Upload Slider <span class="text-danger">*</span>
                                    <br> <span class="text-blue">['For Best View of Slider Width:1900px,Height=1000px']</span></label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" id="slider_banner_image"
                                            required name="slider_banner_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Page Url <span class="text-danger">*</span></label>
                                    <select name="slider_page_url" id="slider_page_url" class="form-control">
                                        <option>Select The Page</option>
                                        <option value="about-us">About Us</option>
                                        <option value="our-mission-vission">Our Mission & Vission</option>
                                        <option value="our-value">Our Value</option>
                                        <option value="director-message">Director Message</option>
                                        <option value="principal-message">Principal Message</option>
                                        <option value="academic-course">Acedemic Course</option>
                                        <option value="parents-teacher-meeting">Parents Teacher Meeting</option>
                                        <option value="suggestion-to-parents">Suggestion To Parents</option>
                                        <option value="curriculum">Curriculum</option>
                                        <option value="celebration">Celebration</option>
                                        <option value="school-rules-and-regulations">School Rules And Regulation</option>
                                        <option value="registration-process">Registration Process</option>
                                        <option value="document-required">Document Required</option>
                                        <option value="online-admission-form">Online Admission Form</option>
                                        <option value="admission-procedure">Admission Procedure</option>
                                        <option value="fee-policies">Fee Policies</option>
                                        <option value="school-policies">School Policies</option>
                                        <option value="event">Event</option>
                                        <option value="contact-us">Contact Us</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Button Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Button Title"
                                        id="slider_button_title" name="slider_button_title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add Banner</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="card card-default">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Slider's Listing</h3>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0 table-striped">
                                        <table class="table table-hover text-nowrap" id="Slider_Table">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Title</th>
                                                    <th>Sub Titlt</th>
                                                    <th>Slider Image</th>
                                                    <th>Button Page Url</th>
                                                    <th>Button Title</th>
                                                    <th>Added Date - Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($slider as $slider) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><?php echo $slider['slider_title'];?></td>
                                                                <td><?php echo $slider['slider_sub_title'];?></td>
                                                                <td><img src="<?php echo base_url('').'uploads/slider/'.$slider['slider_banner_image'];?>" alt="image" style="width: 100%;"></td>
                                                                <td><?php echo $slider['slider_page_url'];?></td>
                                                                <td><?php echo $slider['slider_button_title'];?></td>
                                                                <td><?php echo $slider['slider_datetime'];?></td>
                                                                <td>
                                                                    <a onclick="if (!confirm('Are You Sure Want To Delete Slider?')) return false;" href="<?php echo base_url(); ?>admin/slider/delete_slider/<?php echo $slider['slider_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> | 
                                                                    <a data-toggle="modal" data-target="#myModaledit_<?php echo $slider['slider_id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                                    <form method="post" action="<?php echo base_url(); ?>admin/slider/slider_update" enctype="multipart/form-data">
                                                                        <div id="myModaledit_<?php echo $slider['slider_id']; ?>" class="modal fade" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Edit Slider</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                    </div>
                                                                                    
                                                                                    <div class="modal-body">
                                                                                        <input type="hidden" value="<?php echo $slider['slider_id'];?>" name="slider_id" id="slider_id">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                        <label>Title <span class="text-danger">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Enter The Title" id="slider_title" name="slider_title" value="<?php echo $slider['slider_title']?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Sub Title <span class="text-danger">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Enter The Sub-Title" id="slider_sub_title" name="slider_sub_title" value="<?php echo $slider['slider_sub_title'];?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Banner Image Preview <span class="text-danger">*</span></label><br>
                                                                                                        <img src="<?php echo base_url('').'uploads/slider/'.$slider['slider_banner_image'];?>" alt="image" style="width: 50%;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Upload Banner <span class="text-danger">*</span><br><span class="text-blue">['For Best View of Banner Width:1900px,Height=1000px']</span></label>
                                                                                                        <input type="file" class="form-control" id="slider_banner_image" name="slider_banner_image">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Select Page Url <span class="text-danger">*</span></label>
                                                                                                        <select name="slider_page_url" id="slider_page_url" class="form-control">
                                                                                                            <option>Select The Page</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'about-us') { echo "selected";}?> value="about-us">About Us</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'our-mission-vission') { echo "selected";}?> value="our-mission-vission">Our Mission & Vission</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'our-value') { echo "selected";}?> value="our-value">Our Value</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'director-message') { echo "selected";}?> value="director-message">Director Message</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'principal-message') { echo "selected";}?> value="principal-message">Principal Message</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'academic-course') { echo "selected";}?> value="academic-course">Acedemic Course</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'parents-teacher-meeting') { echo "selected";}?> value="parents-teacher-meeting">Parents Teacher Meeting</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'suggestion-to-parents') { echo "selected";}?> value="suggestion-to-parents">Suggestion To Parents</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'curriculum"') { echo "selected";}?> value="curriculum">Curriculum</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'celebration"') { echo "selected";}?> value="celebration">Celebration</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'school-rules-and-regulations') { echo "selected";}?> value="school-rules-and-regulations">School Rules And Regulation</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'registration-process') { echo "selected";}?> value="registration-process">Registration Process</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'document-required') { echo "selected";}?> value="document-required">Document Required</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'online-admission-form') { echo "selected";}?> value="online-admission-form">Online Admission Form</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'admission-procedure') { echo "selected";}?> value="admission-procedure">Admission Procedure</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'fee-policies') { echo "selected";}?> value="fee-policies">Fee Policies</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'school-policies') { echo "selected";}?> value="school-policies">School Policies</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'event') { echo "selected";}?> value="event">Event</option>
                                                                                                            <option <?php if ($slider['slider_page_url'] == 'contact-us') { echo "selected";}?> value="contact-us">Contact Us</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Button Title <span class="text-danger">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Button Title" id="slider_button_title" name="slider_button_title" value="<?php echo $slider['slider_button_title'];?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer justify-content-between">
                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                               
                                                            </tr>
                                                        <?php
                                                    $i++;
                                                    }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->