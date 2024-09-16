<?php 
    foreach($selectadmin as $admindata){}
    foreach($getconfiguraion as $config){}
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
                    <h1 class="m-0">General Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('');?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">General Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>admin/school/update_general_settings/<?php echo $config['general_id'];?>" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Basic Details</h3>
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
                    <div class="card-body " style="display: block;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Name <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_companyname'];?>" class="form-control" placeholder="School Name" id="general_companyname" name="general_companyname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Contact Person Name <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_contactpersonname'];?>" class="form-control" placeholder="School Contact Person Name" id="general_contactpersonname" name="general_contactpersonname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>School Phone <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_phoneno'];?>" class="form-control" placeholder="School Phone" id="general_phoneno" name="general_phoneno">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>School Mobile <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_mobilno'];?>" class="form-control" placeholder="School Mobile" id="general_mobilno" name="general_mobilno">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fax No. <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_fax'];?>" class="form-control" placeholder="Fax No. " id="general_fax" name="general_fax">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School E-mail <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_emailid'];?>" class="form-control" placeholder="School E-mail" id="general_emailid" name="general_emailid">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Website Link <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_website'];?>" class="form-control" placeholder="School Website Link" id="general_website" name="general_website">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address <span class="text-danger">*</span></label>
                                    <textarea required disabled class="form-control" placeholder="School Company Address" id="general_address" name="general_address"><?php echo $config['general_address'];?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Iframe Address <span class="text-danger">*</span></label>
                                    <textarea required disabled class="form-control" placeholder="School Iframe Address" id="general_iframe_address" name="general_iframe_address"><?php echo $config['general_iframe_address'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Company City <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_city'];?>" class="form-control" placeholder="School Company City" id="general_city" name="general_city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School State <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['genaral_statename'];?>" class="form-control" placeholder="School State" id="genaral_statename" name="genaral_statename">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Country <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_county'];?>" class="form-control" placeholder="School Country" id="general_county" name="general_county">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Pin-Code <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_pincode'];?>" class="form-control" placeholder="School Pin-Code" id="general_pincode" name="general_pincode">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Facebook <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_facebook'];?>" class="form-control" placeholder="School Facebook Link" id="general_facebook" name="general_facebook">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Twitter <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_twitter'];?>" class="form-control" placeholder="School Twitter Link" id="general_twitter" name="general_twitter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Linkedin <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_linkedin'];?>" class="form-control" placeholder="School Linkedin Link" id="general_linkedin" name="general_linkedin">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pinterest <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_pinterest'];?>" class="form-control" placeholder="School Pinterest Link" id="general_pinterest" name="general_pinterest">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Whatsapp No. <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_whatsapp'];?>" class="form-control"
                                        placeholder="School Whatsapp No. Link" id="general_whatsapp" name="general_whatsapp">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Instagram <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_instagram'];?>" class="form-control" placeholder="School Instagram Link" id="general_instagram" name="general_instagram">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Google-plus <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_googleplus'];?>" class="form-control" placeholder="School Google-plus Link" id="general_googleplus" name="general_googleplus">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Skype <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_skype'];?>" class="form-control" placeholder="School Skype Link" id="general_skype" name="general_skype">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Advance Setting</h3>
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
                                    <label>Financial Year Start <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_financial_start_date'];?>" class="form-control" placeholder="School Financial Year Start" id="general_financial_start_date" name="general_financial_start_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Financial Year End <span class="text-danger">*</span></label>
                                    <input type="text" required disabled value="<?php echo $config['general_financial_end_date'];?>" class="form-control" placeholder="School Financial Year End" id="general_financial_end_date" name="general_financial_end_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Holiday Year Start <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" required disabled value="<?php echo $config['general_holiday_start_date'];?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" placeholder="dd/mm/yyyy" id="general_holiday_start_date" name="general_holiday_start_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Holiday Year End <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" required disabled value="<?php echo $config['general_holiday_end_date'];?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" placeholder="dd/mm/yyyy" id="general_holiday_end_date" name="general_holiday_end_date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full day Start Time <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="input-group" id="full_day_start_time_show">
                                            <input type="text" disabled value="<?php echo date('h:i A', strtotime($config['general_full_dat_starttime']));?>" class="form-control" placeholder="H:MM">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        <div class="input-group" id="full_day_start_time_hide" style="display: none;">
                                            <input type="time" class="form-control" placeholder="H:MM" id="general_full_dat_starttime" name="general_full_dat_starttime">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full day End Time <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="input-group" id="full_day_end_time_show">
                                            <input type="text" disabled value="<?php echo date('h:i A', strtotime($config['general_full_dat_endtime']));?>" class="form-control" placeholder="H:MM">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        <div class="input-group" id="full_day_end_time_hide" style="display: none;">
                                            <input type="time" class="form-control" placeholder="H:MM" id="general_full_dat_endtime" name="general_full_dat_endtime">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Half day Start Time <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="input-group" id="general_half_day_starttime_show">
                                            <input type="text" disabled value="<?php echo date('h:i A', strtotime($config['general_half_day_starttime']));?>" class="form-control" placeholder="H:MM">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        <div class="input-group" id="general_half_day_starttime_hide" style="display: none;">
                                            <input type="time" class="form-control" placeholder="H:MM" id="general_half_day_starttime" name="general_half_day_starttime">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Half day End Time <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <div class="input-group" id="general_half_day_endtime_show">
                                                <input type="text" disabled value="<?php echo date('h:i A', strtotime($config['general_half_day_endtime']));?>" class="form-control" placeholder="H:MM" id="general_half_day_endtime" nPe="general_half_day_endtime">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            <div class="input-group" id="general_half_day_endtime_hide" style="display: none;">
                                                <input type="time" class="form-control" placeholder="H:MM" id="general_half_day_endtime" name="general_half_day_endtime">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Logo <span class="text-danger">*</span> <span class="text-info">['For Best View of logo Height=65px,Width:150px']</span></label>
                                    <input type="file" class="form-control" disabled id="uploaded_passport" name="uploaded_passport">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preview School Logo <span class="text-danger">*</span></label>
                                    <br>
                                    <img class="img-fluid" src="<?php echo base_url('').'uploads/'.$config['general_imgicon'];?>"
                                        style="width: 100px;" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">SEO Setting's</h3>
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
                                    <label>About Us <span class="text-danger">*</span><span class="text-primary"> ['Keep
                                            100-150 words for small description. for footer part only.']</span></label>
                                    <textarea class="form-control" placeholder="About US" name="general_about_us" id="general_about_us" required disabled><?php echo $config['general_about_us'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" id="edit_button" class="btn btn-warning" onclick="return confirm('Are You Want To EDIT General Setting?');">Edit</button>
                                <button type="submit" id="update_button" class="btn btn-success" onclick="return confirm('Are You Want To Update Record?');" style="display:none">Update</button>
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