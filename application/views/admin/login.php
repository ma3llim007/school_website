<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bright View International School</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('');?>admin_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('');?>admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('');?>admin_assets/dist/css/adminlte.min.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('')?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('')?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('')?>favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="row">
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
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo base_url('');?>admin/login" class="h5"><b>Bright View International School</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php echo form_open('admin/login/admin_login');?>
                    <div class="input-group mb-3">
                        <?php echo 
                        form_input([
                            'type'=>'email',
                            'class'=>'form-control',
                            'placeholder'=>'Email',
                            'name'=>'email',
                            'id'=>'email',
                            'value'=>set_value('email')
                        ]);
                        ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger">
                        <p class="mb-1 "><?php echo form_error('email');?></p>
                    </div>
                    <div class="input-group mb-3">
                        <?php echo 
                        form_input([
                            'type'=>'password',
                            'class'=>'form-control',
                            'placeholder'=>'Password',
                            'name'=>'password',
                            'id'=>'password',
                            'value'=>set_value('password')
                        ]);
                        ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger">
                        <p class="mb-1 text-danger"><?php echo form_error('password');?></p>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                        <?php echo 
                            form_submit([
                            'type'=>'submit',
                            'class'=>'btn btn-primary btn-block',
                            'value'=>'Submit'
                        ]);
                        ?>
                        </div>
                        <!-- /.col -->
                    </div>
                <?php echo form_close();?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('');?>assets_admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('');?>assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('');?>assets_admin/dist/js/adminlte.min.js"></script>
</body>

</html>