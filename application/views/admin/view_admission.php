<?php 
    foreach($online_form_details as $online_form){}
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
                    <h1 class="m-0">View Admission Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?php echo base_url('');?>admin/admission/online_admission_form">Online Admission
                                Form Listing</a></li>
                        <li class="breadcrumb-item active">View Admission</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header bg-success">
                    <h3 class="card-title">Admission Student Details</h3>
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
                                <label>Student Name</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_student_name'];?>" class="form-control" placeholder="Student Name" id="online_form_student_name" name="online_form_student_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Father Name</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_father_name'];?>" class="form-control" placeholder="Father Student Name" id="online_form_father_name" name="online_form_father_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Mother Name</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_mother_name'];?>" class="form-control" placeholder="Mother Student Name Phone" id="online_form_mother_name" name="online_form_mother_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Of Birth Day</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_date_of_birth'];?>" class="form-control" placeholder="Date Of Birth Day" id="online_form_date_of_birth" name="online_form_date_of_birth">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Father Number </label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_father_number'];?>" class="form-control" placeholder="Student Father Number" id="online_form_father_number" name="online_form_father_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Mother Number</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_mother_number'];?>" class="form-control" placeholder="Student Mother Number" id="online_form_mother_number" name="online_form_mother_number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Gender</label>
                                <input required disabled value="<?php echo $online_form['online_form_gender'];?>" class="form-control" placeholder="Student Gender" id="online_form_gender" name="online_form_gender">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Religion</label>
                                <input required disabled value="<?php echo $online_form['religion_name'];?>" class="form-control" placeholder="Student Gender" id="religion_name" name="religion_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Caste</label>
                                <input type="text" required disabled value="<?php echo $online_form['caste_name'];?>" class="form-control" placeholder="Student Caste" id="caste_name" name="caste_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Admission Class</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_admission_class'];?>" class="form-control" placeholder="Student Admission Class" id="online_form_admission_class" name="online_form_admission_class">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student Medium</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_medium'];?>" class="form-control" placeholder="Student Medium" id="online_form_medium" name="online_form_medium">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student Preview School</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_previous_school_name'];?>" class="form-control" placeholder="Student Preview School" id="online_form_previous_school_name" name="online_form_previous_school_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student Preview Class</label>
                                <input type="text" required disabled value="<?php echo $online_form['online_form_preview_class'];?>"
                                    class="form-control" placeholder="Student Preview Class" id="online_form_preview_class"
                                    name="online_form_preview_class">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Student Address</label>
                                <textarea type="text" required disabled class="form-control" placeholder="Student Address" id="online_form_address" name="online_form_address"><?php echo $online_form['online_form_address'];?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a onclick="if (!confirm('Are You Sure Want To Complated Admission ?')) return false;" class="btn btn-primary" href="<?php echo base_url('').'admin/admission/complated_admission/'.$online_form['online_form_id']?>">Completed</a> | <a onclick="if (!confirm('Are You Sure Want To Delete Admission?')) return false;" class="btn btn-danger" href="<?php echo base_url('').'admin/admission/delete_admission/'.$online_form['online_form_id']?>">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->