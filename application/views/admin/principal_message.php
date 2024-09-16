<?php 
    foreach ($principal_message as $principal){}
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
                    <h1 class="m-0">Principal Message</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Principal Message</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/about/update_principal/<?php echo $principal['principle_message_id'];?>" method="POST"
                enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Principal Message</h3>
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
                                    <label>Principal Image <span class="text-danger">*</span>
                                        <input type="file" class="form-control" id="principle_message_image" name="principle_message_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preview Principal Image <span class="text-danger">*</span><br>
                                        <img src="<?php echo base_url('').'uploads/principal/'.$principal['principle_message_image'];?>"
                                            alt="image" class="img-fluid" width="50%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content <span class="text-danger">*</span></label>
                                    <textarea name="principle_message" id="principle_message"
                                        class="form-control"><?php echo $principal['principle_message'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button onclick="if (!confirm('Are You Sure Want To Update Principal Message ?')) return false;"  class="btn btn-success"><i class="fa fa-edit"></i> Update </button>
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
CKEDITOR.replace('principle_message');
</script>