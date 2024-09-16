<?php 
    foreach ($home as $home) {
    }
?>
<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="home-slides owl-carousel owl-theme">
        <?php
            foreach ($slider as $slider) {
                ?>
                <div class="main-banner-item banner-item-four" style="background-image: url('<?php echo base_url('')."uploads/slider/".$slider['slider_banner_image']; ?>');">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-banner-content">
                                            <h1><?php echo ucwords($slider['slider_title']);?></h1>
                                            <p><?php echo $slider['slider_sub_title'];?></p>
                                            <div class="banner-btn">
                                                <a href="<?php echo base_url('').$slider['slider_page_url'];?>" class="default-btn"><?php echo ucwords($slider['slider_button_title'])?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php        
            }
        ?>
    </div>
    <div class="main-banner-shape">
        <div class="banner-bg-shape">
            <img src="<?php echo base_url('');?>front_assets/img/main-banner/banner-bg-shape-1.png" class="white-image"
                alt="image">
            <img src="<?php echo base_url('');?>front_assets/img/main-banner/banner-bg-shape-1-dark.png"
                class="black-image" alt="image">
        </div>

        <div class="banner-bg-shape-2">
            <img src="<?php echo base_url('');?>front_assets/img/main-banner/banner-bg-shape-2.png" class="white-image"
                alt="image">
            <img src="<?php echo base_url('');?>front_assets/img/main-banner/banner-bg-shape-2-dark.png"
                class="black-image" alt="image">
        </div>
    </div>
</div>
<!-- End Main Banner Area -->
<!-- Start Who We Are Area -->
<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-image">
                    <img src="<?php echo base_url('').'uploads/home/'.$home['home_section1_image'];?>" alt="<?php echo $home['home_section1_title'];?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span><?php echo $home['home_section1_short_time'];?></span>
                    <h3><?php echo $home['home_section1_title'];?></h3>
                    <p><?php echo $home['home_section1_description'];?></p>
                    <div class="who-we-are-btn">
                        <a href="<?php echo base_url('').''.$home['home_section1_button_url'];?>" class="default-btn"><?php echo $home['home_section1_button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="who-we-are-shape">
        <img src="<?php echo base_url('');?>front_assets/img/who-we-are/who-we-are-shape.png" alt="image">
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Class Area -->
<!-- <section class="class-area bg-fdf6ed pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Classes</span>
                    <h2>Popular Classes</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="<?php echo base_url('');?>front_assets/img/class/class-1.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$880</div>
                                <h3>
                                    <a href="#">Color Matching</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="<?php echo base_url('');?>front_assets/img/class/class-2.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$790</div>
                                <h3>
                                    <a href="#">Learning Disciplines</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="<?php echo base_url('');?>front_assets/img/class/class-3.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$590</div>
                                <h3>
                                    <a href="#">Drawing</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-shape">
                <div class="shape-1">
                    <img src="<?php echo base_url('');?>front_assets/img/class/class-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="<?php echo base_url('');?>front_assets/img/class/class-shape-2.png" alt="image">
                </div>
            </div>
        </section> -->
<!-- End Class Area -->

<!-- Start Value Area -->
<section class="value-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="value-image">
                <img src="<?php echo base_url('').'uploads/home/'.$home['home_section2_image'];?>" alt="<?php echo $home['home_section2_title'];?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="value-item">
                    <div class="value-content">
                        <span><?php echo $home['home_section2_short_title'];?></span>
                        <h3><?php echo $home['home_section2_title'];?></h3>
                    </div>

                    <div class="value-inner-content">
                        <div class="number">
                            <span>01</span>
                        </div>
                        <h4><?php echo $home['home_section2_1_title'];?></h4>
                        <p><?php echo $home['home_section2_1_description'];?></p>
                    </div>

                    <div class="value-inner-content">
                        <div class="number">
                            <span class="bg-2">02</span>
                        </div>
                        <h4><?php echo $home['home_section2_2_title'];?></h4>
                        <p><?php echo $home['home_section2_2_description'];?></p>
                    </div>

                    <div class="value-inner-content">
                        <div class="number">
                            <span class="bg-3">03</span>
                        </div>
                        <h4><?php echo $home['home_section2_3_title'];?></h4>
                        <p><?php echo $home['home_section2_3_description'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="value-shape">
        <div class="shape-1">
            <img src="<?php echo base_url('');?>front_assets/img/value/value-shape-1.png" alt="image">
        </div>
        <div class="shape-2">
            <img src="<?php echo base_url('');?>front_assets/img/value/value-shape-2.png" alt="image">
        </div>
        <div class="shape-3">
            <img src="<?php echo base_url('');?>front_assets/img/value/value-shape-3.png" alt="image">
        </div>
    </div>
</section>
<!-- End Value Area -->

<!-- Start Teacher Area -->
<!-- <section class="teacher-area bg-ffffff pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title">
                    <span>Our Core Teacher</span>
                    <h2>Meet Our Teacher</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-teacher">
                            <div class="image">
                                <img src="<?php echo base_url('');?>front_assets/img/teacher/teacher-1.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Glims Bond</h3>
                                <span>Music Teacher</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-teacher">
                            <div class="image">
                                <img src="<?php echo base_url('');?>front_assets/img/teacher/teacher-2.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Sherlock Bin</h3>
                                <span>Art Teacher</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-teacher">
                            <div class="image">
                                <img src="<?php echo base_url('');?>front_assets/img/teacher/teacher-3.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Priestly Herbart</h3>
                                <span>Math Teacher</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-teacher">
                            <div class="image">
                                <img src="<?php echo base_url('');?>front_assets/img/teacher/teacher-4.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Smith Broke</h3>
                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!-- End Teacher Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $home['home_section3_title'];?></span>
            <h2><?php echo $home['home_section3_description'];?></h2>
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

<!-- Start Event Area -->
<!--
    <section class="event-area bg-ffffff pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Events</span>
                    <h2>Upcoming Events</h2>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="<?php echo base_url('');?>front_assets/img/event/event-1.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">Annual Cultural Programme</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>12</h4>
                                <span>September</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="<?php echo base_url('');?>front_assets/img/event/event-2.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Kids Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>18</h4>
                                <span>January</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="<?php echo base_url('');?>front_assets/img/event/event-3.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Drawing Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>25</h4>
                                <span>March</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="<?php echo base_url('');?>front_assets/img/event/event-4.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">Teachers Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>30</h4>
                                <span>April</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
-->
<!-- End Event Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $home['home_section4_title'];?></h2>
        </div>
        <div class="row">
            <?php
                foreach ($event as $event) {
                    ?>
                        <div class="col-lg-4">
                            <div class="single-blog-item">
                                <div class="blog-image">
                                    <a href="<?php echo base_url('').'event-detail/'.$event['event_slug'];?>">
                                        <img src="<?php echo base_url('').'uploads/events/short/'.$event['event_feature_image'];?>" alt="<?php echo ucwords($event['event_title'])?>">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="<?php echo base_url('').'event-detail/'.$event['event_slug'];?>"><?php echo ucwords($event['event_title'])?></a></h3>
                                    <ul class="post-meta">
                                        <li><span>By <a href="javascript:void(0)">Admin</a></span></li>
                                        <li><span>Date: <a href="javascript:void(0)"><?php echo $event['event_date'];?></a></span></li>
                                    </ul>
                                    <p><?php echo $event['event_short_desc']?></p>                        
                                    <div class="blog-btn">
                                        <a href="<?php echo base_url('').'event-detail/'.$event['event_slug'];?>" class="default-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php        
                }
                
            ?>
            
        </div>
    </div>
</section>
<!-- End Blog Area -->