<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($privacy_policy as $about_us) {}
?>
<!-- Start Page Banner -->
<div class="page-banner-area" style="background-image:url(<?php if (!empty($banner)) { echo base_url(); ?>uploads/banner/<?php echo $banner['banner_image'];} else { echo base_url('')."front_assets/img/page-banner/page-banner-2.jpg";}?>)">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2><?php $urlTitle = str_replace("-"," ", $url);
                        echo ucwords($urlTitle);
                    ?></h2>
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

<!-- Start Choose Area -->
<section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single-choose-item">
                    <h3>Privacy Policy</h3>
                    <p><?php echo $about_us['privacy_policy'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose Area -->