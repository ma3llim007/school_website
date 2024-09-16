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
            <div class="card card-default">
                <div class="card-header bg-info">
                        <h3 class="card-title">Event's Listing</h3>
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
                                                    <th>Title</th>
                                                    <th>Short Desc</th>
                                                    <th>Feature Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($event as $event) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $i;?></td>
                                                                <td><?php echo ucwords($event['event_title']);?></td>
                                                                <td class="text-wrap" style="width:100%">
                                                                    <?php 
                                                                        echo $event['event_short_desc'];
                                                                    ?>
                                                                </td>
                                                                <td width="40%"><img class="img-fluid" src="<?php echo base_url('').'uploads/events/short/'.$event['event_feature_image'];?>" alt="image" style="width: 50%;"></td>
                                                                <td>
                                                                    <a onclick="if (!confirm('Are You Sure Want To Delete Event?')) return false;" href="<?php echo base_url('').'admin/event/delete_event/'.$event['event_id'];?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                                                                    <a href="<?php echo base_url('').'admin/event/view_event/'.$event['event_id'];?>" class="btn btn-secondary"> <i class="fa fa-eye"></i> View</a>
                                                                    <a href="<?php echo base_url('').'admin/event/edit_event/'.$event['event_id'];?>" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                                                    <a href="<?php echo base_url('').'admin/event/event_pics/'.$event['event_id'];?>" class="btn btn-success"> <i class="fa fa-images"></i> Insert Pics</a>
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