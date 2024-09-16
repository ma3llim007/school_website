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
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/event/event_listing">Event</a></li>
                        <li class="breadcrumb-item active">Insert Pic's</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/event/insert_event_pics/" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Upload Event Image</h3>
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
                                    <label>Event Image <span class="text-danger">*</span> <span class="text-blue">['For Best View of Image Width:650px,Height=500px']</span></label>
                                    <input type="file" required class="form-control" id="cover_image" name="cover_image">
                                    <input type="hidden" class="form-control" id="event_id" name="event_id" value="<?php echo $this->uri->segment(4)?>">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-success">Add Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- list content start -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header bg-dark">
                        <h3 class="card-title">Event's Pics Listing</h3>
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
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap" id="Banner_Table">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($event_pics as $event_pics) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $i;?></td>
                                                                <td width="40%"><img class="img-fluid" src="<?php echo base_url('').'uploads/events/gallery/'.$event_pics['cover_image'];?>" alt="image" style="width: 50%;"></td>
                                                                <td>
                                                                    <a onclick="if (!confirm('Are You Sure Want To Delete Event Pics?')) return false;" href="<?php echo base_url('').'admin/event/delete_event_pics/'.$event_pics['event_image_id'].'/'.$event_pics['event_id'];?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
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
    <!-- list content end-->
</div>
<!-- /.content-wrapper -->