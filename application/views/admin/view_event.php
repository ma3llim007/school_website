<?php 
    foreach ($event_details as $event_details) {}
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
                    <h1 class="m-0">Manage Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/event/event_listing/">Event</a></li>
                        <li class="breadcrumb-item active">View Event</li>
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
                    <div class="card-header bg-info">
                        <h3 class="card-title">Edit Event's</h3>
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
                                    <input type="text" class="form-control" id="event_title" name="event_title" placeholder="Enter The Event Title" value="<?php echo $event_details['event_title'];?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Event Short Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="event_short_desc" name="event_short_desc" placeholder="Enter The Event Description" rows="2" readonly><?php echo $event_details['event_short_desc'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preview Event short Feature Image <span class="text-danger">*</span></label>
                                    <br>
                                    <img class="img-fluid" src="<?php echo base_url('').'uploads/events/short/'.$event_details['event_feature_image'];?>" alt="Short Feature Image" style="width: 60%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preview Event Date <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo $event_details['event_date'];?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Event Description <span class="text-danger">*</span></label>
                                    <textarea readonly class="form-control" id="event_description_edit" name="event_long_desc" placeholder="Enter The Event Description"><?php echo $event_details['event_long_desc'];?></textarea>
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
                                                <textarea type="text" class="form-control" name="event_seo_keyword" id="event_seo_keyword" placeholder="Enter The SEO Keyword"><?php echo $event_details['event_seo_keyword'];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SEO Description <span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control" name="event_seo_description" id="event_seo_description" placeholder="Enter The SEO Description"><?php echo $event_details['event_seo_description'];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="<?php echo base_url('').'admin/event/edit_event/'.$event_details['event_id'];?>" class="btn btn-success"> <i class="fa fa-edit"></i> Update Event</a>
                            </div>
                            <div class="col-md-2">
                                <a href="<?php echo base_url('').'admin/event/event_listing'?>" class="btn btn-secondary"> <i class="fa fa-arrow-left"></i> Back Event</a>
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
    CKEDITOR.replace('event_description_edit');
</script>