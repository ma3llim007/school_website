<?php 
    foreach($about_us as $about){}
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
                    <h1 class="m-0">About Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/about/update_about/<?php echo $about['about_us_id'];?>" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">About Us</h3>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image <span class="text-danger">*</span> <span class="text-info">['For Best View of Image Height=620px,Width:720px']</span></label>
                                    <input type="file" class="form-control" name="about_us_image" id="about_us_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image Preview </label> <br>
                                    <img class="img-fluid" src="<?php echo base_url('').'uploads/about/'.$about['about_us_image'];?>" alt="image" width="50%">
                                </div></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Content <span class="text-danger">*</span></label>
                                    <input name="about_us_title" id="about_us_title" class="form-control" value="<?php echo $about['about_us_title'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Content <span class="text-danger">*</span></label>
                                    <textarea name="about_us" id="about_us" class="form-control" ><?php echo $about['about_us'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Box 01</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 01 Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_1_num" id="about_us_box_1_num" value="<?php echo $about['about_us_box_1_num'];?>" placeholder="Enter The Box 01 Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 01 Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_1_title" id="about_us_box_1_title" value="<?php echo $about['about_us_box_1_title'];?>" placeholder="Enter The Box 01 Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Box 02</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 02 Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_2_num" id="about_us_box_2_num" value="<?php echo $about['about_us_box_2_num'];?>" placeholder="Enter The Box 02 Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 02 Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_2_ttile" id="about_us_box_2_ttile" value="<?php echo $about['about_us_box_2_ttile'];?>" placeholder="Enter The Box 02 Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Box 03</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 03 Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_3_num" id="about_us_box_3_num" value="<?php echo $about['about_us_box_3_num'];?>" placeholder="Enter The Box 03 Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 03 Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_3_title" id="about_us_box_3_title" value="<?php echo $about['about_us_box_3_title'];?>" placeholder="Enter The Box 03 Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Box 04</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 04 Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_4_num" id="about_us_box_4_num" value="<?php echo $about['about_us_box_4_num'];?>" placeholder="Enter The Box 04 Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Box 04 Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="about_us_box_4_title" id="about_us_box_4_title" value="<?php echo $about['about_us_box_4_title'];?>" placeholder="Enter The Box 04 Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Testimonials Section</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Testimonials Title  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="testimonial_title" id="testimonial_title" value="<?php echo $about['testimonial_title'];?>" placeholder="Enter The Testimonial Title ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Testimonials Short Description <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="testimonials_short_description" id="testimonials_short_description" value="<?php echo $about['testimonials_short_description'];?>" placeholder="Enter The Testimonial Short Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button onclick="if (!confirm('Are You Sure Want To Update About Us?')) return false;" type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Update</button>
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