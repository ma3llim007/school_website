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
                    <h1 class="m-0">Manage Seo</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Seo</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/seo/insert_seo" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert SEO's</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Page <span class="text-danger">*</span></label>
                                    <select name="seo_page_slug" id="seo_page_slug" class="form-control" required>
                                        <option>Select The Page</option>
                                        <option value="">Home</option>
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
                                        <option value="privacy-policy">Privacy Policy</option>
                                        <option value="terms-and-condition">Terms & Condition</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>SEO Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The SEO Title" required
                                        id="seo_title" name="seo_title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>SEO Keyword <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="Enter The SEO Keyword" id="seo_keyword" required name="seo_keyword"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>SEO Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="Enter The SEO Description" id="seo_description" required name="seo_description"></textarea>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add SEO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <h3 class="card-title">SEO's Listing</h3>
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
                                                <th>Page</th>
                                                <th>Title</th>
                                                <th>Added Date - Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i=1;
                                                foreach ($seo as $seo) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i?></td>
                                                        <td><?php if(empty($seo['seo_page_slug'])){ echo 'Home';} else{ echo $seo['seo_page_slug']; }?></td>
                                                        <td><?php echo $seo['seo_title'];?></td>
                                                        <td><?php echo $seo['seo_datetime'];?></td>
                                                        <td>
                                                            <a onclick="if (!confirm('Are You Sure Want To Delete SEO?')) return false;" href="<?php echo base_url(); ?>admin/seo/delete_seo/<?php echo $seo['seo_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> |
                                                            <a data-toggle="modal" data-target="#myModaledit_<?php echo $seo['seo_id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                                <form method="post" action="<?php echo base_url(); ?>admin/seo/seo_update" enctype="multipart/form-data">
                                                                    <div id="myModaledit_<?php echo $seo['seo_id']; ?>" class="modal fade" role="dialog">
                                                                        <div class="modal-dialog">
                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Slider</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" value="<?php echo $seo['seo_id'];?>" name="seo_id" id="seo_id">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Select Page <span class="text-danger">*</span></label>
                                                                                                <select name="seo_page_slug" id="seo_page_slug" class="form-control" required>
                                                                                                    <option>Select The Page</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == ''){ echo "selected"; } ?> value="">Home</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'about-us'){ echo "selected"; } ?> value="about-us">About Us</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'our-mission-vission'){ echo "selected"; } ?> value="our-mission-vission">Our Mission & Vission</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'our-value'){ echo "selected"; } ?> value="our-value">Our Value</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'director-message'){ echo "selected"; } ?> value="director-message">Director Message</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'principal-message'){ echo "selected"; } ?> value="principal-message">Principal Message</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'academic-course'){ echo "selected"; } ?> value="academic-course">Acedemic Course</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'parents-teacher-meeting'){ echo "selected"; } ?> value="parents-teacher-meeting">Parents Teacher Meeting</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'suggestion-to-parents'){ echo "selected"; } ?> value="suggestion-to-parents">Suggestion To Parents</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'curriculum'){ echo "selected"; } ?> value="curriculum">Curriculum</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'celebration'){ echo "selected"; } ?> value="celebration">Celebration</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'school-rules-and-regulations'){ echo "selected"; } ?> value="school-rules-and-regulations">School Rules And Regulation</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'registration-process'){ echo "selected"; } ?> value="registration-process">Registration Process</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'document-required'){ echo "selected"; } ?> value="document-required">Document Required</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'online-admission-form'){ echo "selected"; } ?> value="online-admission-form">Online Admission Form</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'admission-procedure'){ echo "selected"; } ?> value="admission-procedure">Admission Procedure</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'fee-policies'){ echo "selected"; } ?> value="fee-policies">Fee Policies</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'school-policies'){ echo "selected"; } ?> value="school-policies">School Policies</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'event'){ echo "selected"; } ?> value="event">Event</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'event-detail'){ echo "selected"; } ?> value="event-detail">Event Detail</option>
                                                                                                    <option <?php if($seo['seo_page_slug'] == 'contact-us'){ echo "selected"; } ?> value="contact-us">Contact Us</option>
                                                                                                    <option <?php if ($seo['seo_page_slug'] == 'privacy-policy') { echo "selected";} ?> value="privacy-policy">Privacy Policy</option>
                                                                                                    <option <?php if ($seo['seo_page_slug'] == 'terms-and-condition') { echo "selected";} ?> value="terms-and-condition">Terms & Condition</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>SEO Title <span class="text-danger">*</span></label>
                                                                                                <input type="text" class="form-control" placeholder="Enter The SEO Title" value="<?php echo $seo['seo_title'];?>" required id="seo_title" name="seo_title">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>SEO Keyword <span class="text-danger">*</span></label>
                                                                                                <textarea class="form-control" placeholder="Enter The SEO Keyword" id="seo_keyword" required name="seo_keyword"><?php echo $seo['seo_keyword'];?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>SEO Description <span class="text-danger">*</span></label>
                                                                                                <textarea class="form-control" placeholder="Enter The SEO Description" id="seo_description" required name="seo_description"><?php echo $seo['seo_description'];?></textarea>
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