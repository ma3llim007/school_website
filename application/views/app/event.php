<?php 
    $url = $this->uri->segment(1);
    foreach ($banner as $banner) {}
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

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-100">
    <div class="container">
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
            

            <!-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class='bx bx-chevron-left'></i>
                    </a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers">
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Blog Area -->