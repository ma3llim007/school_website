<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($parents_teacher as $parents_teacher) {}
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

<!-- Start FAQ Area -->
<section class="faq-area ptb-50">
    <div class="container">
        <div class="section-title">
            <h2><?php echo ucwords($urlTitle)?></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-accordion"><?php echo $parents_teacher['parents_teacher'];?></div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->