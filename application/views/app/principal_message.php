<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($principal_message as $principal) {}
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

<!-- Start Teacher Details Area -->
<section class="teacher-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="teacher-details-desc">
                    <div class="teacher-desc-image">
                        <img src="<?php echo base_url('').'uploads/principal/'.$principal['principle_message_image'];?>" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="teacher-details-information"><?php echo $principal['principle_message'];?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Teacher Details Area -->