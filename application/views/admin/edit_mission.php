<?php 
    foreach ($vission_mission_detail as $vission) {}
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
                    <h1 class="m-0">Our Mission & Vission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Our Mission & Vission</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/about/update_mission" method="POST"
                enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert Mission & Vission</h3>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Title" id="vission_mission_title" value="<?php echo $vission['vission_mission_title'];?>" required name="vission_mission_title">
                                    <input type="hidden" id="vission_mission_id" value="<?php echo $vission['vission_mission_id'];?>" required name="vission_mission_id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Image <span class="text-danger">*</span><br>
                                        <span class="text-blue">['For Best View of Image
                                            Height=620px,Width:720px']</span></label>
                                    <input type="file" class="form-control" id="vission_mission_image" name="vission_mission_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image Preview<span class="text-danger">*</span><br>
                                    <img src="<?php echo base_url('').'uploads/mission_vission/'.$vission['vission_mission_image'];?>" alt="image" class="img-fluid" width="50%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="edit_vission_mission_description" required name="vission_mission_description"><?php echo $vission['vission_mission_description'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button onclick="if (!confirm('Are You Sure Want To Update ?')) return false;"  class="btn btn-success"><i class="fa fa-edit"></i> Update </button>
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
    CKEDITOR.replace('edit_vission_mission_description');
</script>
