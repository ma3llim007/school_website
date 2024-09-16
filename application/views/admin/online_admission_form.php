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
                    <h1 class="m-0">Manage Online Admission Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Online Admission Form</li>
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
                        <h3 class="card-title">Online Admission Form's Listing</h3>
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
                                        <table class="table table-hover text-nowrap" id="Online_Admission_Form">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Student Name</th>
                                                    <th>Father Student Name</th>
                                                    <th>Mother Student Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($online_form as $online_form) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $i;?></td>
                                                                <td><?php echo $online_form['online_form_student_name'];?></td>
                                                                <td><?php echo $online_form['online_form_father_name'];?></td>
                                                                <td><?php echo $online_form['online_form_mother_name'];?></td>
                                                                <td><a class="btn btn-primary" href="<?php echo base_url('').'admin/admission/view_admission/'.$online_form['online_form_id']?>"><i class="fa fa-eye"></i> More Detail's</a></td>
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