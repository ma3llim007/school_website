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
                    <h1 class="m-0">Manage Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Event</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/event/insert_event/" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert Event's</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Event Title <span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" id="event_title" name="event_title" placeholder="Enter The Event Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Event Short Description <span class="text-danger">*</span></label>
                                    <input maxlength="120" class="form-control" id="event_short_desc" name="event_short_desc" placeholder="Enter The Event Description">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event short Feature Image <span class="text-danger">*</span> <br> <span class="text-blue">['For Best View of Image Width:650px,Height=500px']</span></label>
                                    <input type="file" required class="form-control" id="event_feature_image" name="event_feature_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <label>Event Date <span class="text-danger">*</span></label>
                                    <input type="date" required class="form-control" id="event_date" name="event_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Event Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="event_description_insert" name="event_long_desc" placeholder="Enter The Event Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-default col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title text-bold">SEO Section</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SEO Keyword <span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control" name="event_seo_keyword" id="event_seo_keyword" placeholder="Enter The SEO Keyword"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SEO Description <span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control" name="event_seo_description" id="event_seo_description" placeholder="Enter The SEO Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add Event</button>
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
<script src="https://ckeditor.com/latest/ckeditor.js"></script>
<script>
    CKEDITOR.replace('event_description_insert');
</script>