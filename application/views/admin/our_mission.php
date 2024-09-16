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
            <form action="<?php echo base_url(); ?>admin/about/insert_mission" method="POST"
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br><label>Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Title"
                                        id="vission_mission_title" required name="vission_mission_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Image <span class="text-danger">*</span><br>
                                        <span class="text-blue">['For Best View of Image
                                            Height=620px,Width:720px']</span></label>
                                    <input type="file" class="form-control" id="vission_mission_image" required
                                        name="vission_mission_image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content <span class="text-danger">*</span></label>
                                        <!-- <textarea class="form-control" id="vission_mission_description" required name="vission_mission_description"></textarea> -->
                                    <textarea name="vission_mission_description" id="vission_mission_description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Mission & Vission Listing</h3>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i=1;
                                                foreach ($vission_mission as $vission_mission) {
                                                    ?>
                                            <tr>
                                                <td><?php echo $i?></td>
                                                <td><?php echo ucwords($vission_mission['vission_mission_title']);?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>admin/about/edit_mission/<?php echo $vission_mission['vission_mission_id']; ?>"
                                                        class="btn btn-success"><i class="fa fa-edit"></i> Edit</a> |
                                                    <a onclick="if (!confirm('Are You Sure Want To Delete?')) return false;"
                                                        href="<?php echo base_url(); ?>admin/about/delete_mission/<?php echo $vission_mission['vission_mission_id']; ?>"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://ckeditor.com/latest/ckeditor.js"></script>

<script>
    CKEDITOR.replace('vission_mission_description');
</script>