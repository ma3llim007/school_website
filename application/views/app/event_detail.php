<?php 
    $url = $this->uri->segment(2);
    foreach ($banner as $banner) {}
    foreach ($event_details as $event_details) {}

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

<!-- Start Event Details Area -->
<section class="event-details-area pb-50 pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="event-details-desc">
                    <div class="event-desc-content">
                        <?php echo $event_details['event_long_desc'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event Details Area -->

<!-- Start Gallery Area -->
<div class="gallery-area pt-5 pb-70">
    <div class="container">
        <div class="row">
            <?php 
                foreach ($gallery_event_listing as $gallery) {
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-gallery-box">
                                <img src="<?php echo base_url('').'uploads/events/gallery/'.$gallery['cover_image']?>" alt="image">
                                <a href="<?php echo base_url('').'uploads/events/gallery/'.$gallery['cover_image']?>" class="gallery-btn" data-imagelightbox="popup-btn">
                                    <i class='bx bx-search-alt'></i>
                                    </a>
                            </div>
                        </div>
                    <?php        
                }
            ?>
            

           
        </div>
        <!-- <div class="view-btn">
            <a href="#" class="default-btn">View More</a>
        </div> -->
    </div>
</div>
<!-- End Gallery Area -->