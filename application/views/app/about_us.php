<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
    foreach ($about_us as $about_us) {}
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
            <div class="col-lg-6">
                <div class="single-choose-item">
                    <h3><?php echo $about_us['about_us_title'];?></h3>
                    <p><?php echo $about_us['about_us'];?></p>
                    <div class="choose-btn">
                        <a href="<?php echo base_url('').'contact-us'?>" class="default-btn">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="choose-image">
                    <img src="<?php echo base_url('').'uploads/about/'.$about_us['about_us_image'];?>" alt="image">

                    <div class="choose-image-shape">
                        <div class="shape-1">
                            <img src="<?php echo base_url('');?>front_assets/img/choose/choose-shape-1.png" alt="image">
                        </div>
                        <div class="shape-2">
                            <img src="<?php echo base_url('');?>front_assets/img/choose/choose-shape-2.png" alt="image">
                        </div>
                        <div class="shape-3">
                            <img src="<?php echo base_url('');?>front_assets/img/choose/choose-shape-3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose Area -->


<!-- Start Fun Facts Area -->
<section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="<?php echo $about_us['about_us_box_1_num'];?>">00</span>
                    </h3>
                    <p><?php echo $about_us['about_us_box_1_title'];?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-1">
                    <h3>
                        <span class="odometer" data-count="<?php echo $about_us['about_us_box_2_num'];?>">00</span>
                    </h3>
                    <p><?php echo $about_us['about_us_box_2_ttile'];?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-2">
                    <h3>
                        <span class="odometer" data-count="<?php echo $about_us['about_us_box_3_num'];?>">00</span>
                    </h3>
                    <p><?php echo $about_us['about_us_box_3_title'];?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-3">
                    <h3>
                        <span class="odometer" data-count="<?php echo $about_us['about_us_box_4_num'];?>">00</span>
                    </h3>
                    <p><?php echo $about_us['about_us_box_4_title'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->
<!-- Start Testimonials Area -->
<section class="testimonials-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $about_us['testimonial_title'];?></span>
            <h2><?php echo $about_us['testimonials_short_description'];?></h2>
        </div>
        <div class="testimonials-slides owl-carousel owl-theme">
            <?php 
                foreach ($testimonial as $testimonial) {
                    ?>
                        <div class="testimonials-item">
                            <div class="testimonials-item-box">
                                <div class="icon">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p><?php echo $testimonial['testimonial_description'];?></p>
                                <div class="info-box">
                                    <h3><?php echo ucwords($testimonial['testimonial_name']);?></h3>
                                    <span><?php echo $testimonial['testimonial_short_description'];?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->