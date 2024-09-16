<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($school_policies as $school_policies) {}
?>
<!-- Start Page Banner -->
<div class="page-banner-area" style="background-image:url(<?php if (!empty($banner)) { echo base_url(); ?>uploads/banner/<?php echo $banner['banner_image'];} else { echo base_url('')."front_assets/img/page-banner/page-banner-2.jpg";}?>)">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2><?php $urlTitle = str_replace("-"," ", $url); echo ucwords($urlTitle); ?></h2>
                    <ul>
                        <li>
                            <a href="<?php echo base_url('');?>">Home</a>
                        </li>
                        <li><?php echo ucwords($urlTitle);?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->


<!-- Start Who We Are Area -->
<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <?php echo $school_policies['school_policies']; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are Area -->