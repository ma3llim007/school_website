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
                    <h1 class="m-0">Manage Caste</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/admission/religion">Manage Religion</a></li>
                        <li class="breadcrumb-item active">Manage Caste</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/admission/insert_caste" method="POST"
                enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert Caste's</h3>
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
                                    <label>Caste Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Caste Name" id="castle_name" required name="castle_name">
                                    <input type="hidden" name="caste_religion_id" value="<?php echo $this->uri->segment(4);?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add Caste</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="card card-default">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Caste's Listing</h3>
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
                                                    <th>Caste</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($castle as $castle) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><?php echo ucwords($castle['caste_name']);?></td>
                                                                <td>
                                                                    <a onclick="if (!confirm('Are You Sure Want To Delete Caste?')) return false;" href="<?php echo base_url(); ?>admin/admission/delete_castle/<?php echo $this->uri->segment(4);?>/<?php echo $castle['caste_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> | 
                                                                    <a data-toggle="modal" data-target="#myModaledit_<?php echo $castle['caste_id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                                    <form method="post" action="<?php echo base_url(); ?>admin/admission/update_castle" enctype="multipart/form-data">
                                                                        <div id="myModaledit_<?php echo $castle['caste_id']; ?>" class="modal fade" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Edit Caste</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="religion_id" id="religion_id">
                                                                                                    <input type="hidden" value="<?php echo $castle['caste_id'];?>" name="caste_id" id="caste_id">
                                                                                                    <label>Caste Name <span class="text-danger">*</span></label>
                                                                                                    <input type="text" class="form-control" placeholder="Enter The Castle Title" id="caste_name" name="caste_name" value="<?php echo $castle['caste_name']?>">
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
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->