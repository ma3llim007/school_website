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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active"><a
                                href="<?php echo base_url('');?>admin/login/change_password">Change Password</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default card-success">
                <div class="card-header">
                    <h3 class="card-title">Change Password</h3>
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
                <div class="card-body">
                    <?php echo form_open('admin/login/update_password');?>
                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- form-group start-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                <?php echo 
                                            form_input([
                                                'type'=>'password',
                                                'class'=>'form-control',
                                                'placeholder'=>'Enter The Password',
                                                'name'=>'password',
                                                'id'=>'password',
                                                'value'=>set_value('password')
                                            ]);
                                        ?>
                            </div>
                            <div class="text-danger">
                                <p class="mb-1 "><?php echo form_error('password');?></p>
                            </div>
                        </div>
                        <!-- form-group end-->
                        <!-- form-group start-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                <?php echo 
                                            form_input([
                                                'type'=>'password',
                                                'class'=>'form-control',
                                                'placeholder'=>'Enter The Confirm Password',
                                                'name'=>'confirmpassword',
                                                'id'=>'confirmpassword',
                                                'value'=>set_value('confirmpassword')
                                            ]);
                                        ?>
                            </div>
                            <div class="text-danger">
                                <p class="mb-1 "><?php echo form_error('confirmpassword');?></p>
                            </div>
                        </div>
                        <!-- form-group end-->
                        <!-- /.col -->
                    </div>
                    <!-- row end -->
                    <div class="col-md-6">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <?php echo 
                            form_submit([
                            'type'=>'submit',
                            'class'=>'btn btn-primary',
                            'value'=>'Submit'
                        ]);
                        ?>
                    </div>
                    <?php echo form_close();?>
                </div>

            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->