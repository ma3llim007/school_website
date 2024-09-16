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
                    <h1 class="m-0">Manage Testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Testimonial</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/testimonial/insert_testimonial" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Insert Testimonial</h3>
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
                                    <label>Testimonial Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Testimonial Name"
                                        id="testimonial_name" required name="testimonial_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Testimonial Short Description <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter The Testimonial Short Description"
                                        id="testimonial_short_description" required name="testimonial_short_description">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <label>Select Page <span class="text-danger">*</span></label>
                                    <select name="testimonial_page" id="testimonial_page" class="form-control">
                                        <option>Select The Page</option>
                                        <option value="1">Both</option>
                                        <option value="2">Home</option>
                                        <option value="3">About Us</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Testimonial Description <span class="text-danger">*</span> <span class="text-info">Total Description Should Be Less Than 300 Characters</span></label>
                                    <textarea class="form-control" placeholder="Enter The Testimonial Description" id="testimonial_description" name="testimonial_description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success"><i class="fa fa-plus"></i> Add Testimonial</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Testimonial's Listing</h3>
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
                                                <th>Name</th>
                                                <th>Short Description</th>
                                                <th>Located Page</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i=1;
                                                foreach ($testimonial as $testimonial) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i?></td>
                                                            <td><?php echo $testimonial['testimonial_name'];?></td>
                                                            <td><?php echo $testimonial['testimonial_short_description'];?></td>
                                                            <td><?php
                                                                    if($testimonial['testimonial_page'] == '1'){
                                                                        echo "Both";
                                                                    }
                                                                    elseif ($testimonial['testimonial_page'] == '2'){
                                                                        echo "Home";
                                                                    }
                                                                    elseif ($testimonial['testimonial_page'] == '3'){
                                                                        echo "About Us";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a onclick="if (!confirm('Are You Sure Want To Delete Testimonial ?')) return false;" href="<?php echo base_url(); ?>admin/testimonial/delete_testimonial/<?php echo $testimonial['testimonial_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> |
                                                                <a data-toggle="modal" data-target="#myModaledit_<?php echo $testimonial['testimonial_id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                                <form method="post" action="<?php echo base_url(); ?>admin/testimonial/testimonial_update" enctype="multipart/form-data">
                                                                    <div id="myModaledit_<?php echo $testimonial['testimonial_id'] ?>" class="modal fade" role="dialog">
                                                                        <div class="modal-dialog"style="max-width: 1000px;">
                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Testimonial</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" value="<?php echo $testimonial['testimonial_id']?>" name="testimonial_id" id="testimonial_id">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Testimonial Name <span class="text-danger">*</span></label>
                                                                                                <input type="text" class="form-control"
                                                                                                    placeholder="Enter The Testimonial Name" id="testimonial_name" name="testimonial_name" value="<?php echo $testimonial['testimonial_name']?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Testimonial Short Description <span class="text-danger">*</span></label>
                                                                                                <input type="text" class="form-control" placeholder="Enter The Sub-Title" id="testimonial_short_description" name="testimonial_short_description" value="<?php echo $testimonial['testimonial_short_description'];?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label>Select Page <span class="text-danger">*</span></label>
                                                                                                <select name="testimonial_page" id="testimonial_page" class="form-control">
                                                                                                    <option>Select The Page</option>
                                                                                                    <option <?php if ($testimonial['testimonial_page'] == '1') { echo "selected"; }?> value="1">Both</option>
                                                                                                    <option <?php if ($testimonial['testimonial_page'] == '2') { echo "selected"; }?> value="2">Home</option>
                                                                                                    <option <?php if ($testimonial['testimonial_page'] == '3') { echo "selected"; }?> value="3">About Us</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Testimonial Description <span class="text-danger">*</span> <span class="text-info">Total Description Should Be Less Than 300 Characters</span></label>
                                                                                                <textarea class="form-control" placeholder="Enter The Testimonial Description" id="testimonial_description" name="testimonial_description"><?php echo $testimonial['testimonial_description'];?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer justify-content-between">
                                                                                    <button type="button" class="btn btn-danger"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
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