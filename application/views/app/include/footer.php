<?php 
    $general_tbl=$this->crud_model->get_data_by_query("SELECT * FROM `general_tbl`");
?>
<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <img src="<?php echo base_url('').'uploads/'.$general_tbl[0]['general_imgicon'];?>"
                            class="black-logo" alt="image">
                    </div>
                    <p><?php echo $general_tbl[0]['general_about_us'];?></p>
                    <ul class="social">
                        <?php  if ($general_tbl[0]['general_facebook'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_facebook'];?>" target="_blank"><i class='bx bxl-facebook'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_twitter'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_twitter'];?>" target="_blank"><i class='bx bxl-twitter'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_linkedin'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_linkedin'];?>" target="_blank"><i class='bx bxl-linkedin'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_pinterest'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_pinterest'];?>" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_whatsapp'] != '#') { ?> <li><a href="https://wa.me/<?php echo $general_tbl[0]['general_whatsapp'];?>" target="_blank"><i class='bx bxl-whatsapp'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_instagram'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_instagram'];?>" target="_blank"><i class='bx bxl-instagram'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_googleplus'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_googleplus'];?>" target="_blank"><i class='bx bxl-google-plus'></i></a></li> <?php } ?>
                        <?php  if ($general_tbl[0]['general_skype'] != '#') { ?> <li><a href="<?php echo $general_tbl[0]['general_skype'];?>" target="_blank"><i class='bx bxl-skype'></i></a></li> <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href="tel:<?php echo $general_tbl[0]['general_mobilno'];?>"><?php echo $general_tbl[0]['general_mobilno'];?></a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href="mailto:<?php echo $general_tbl[0]['general_emailid'];?>"><span class="__cf_email__" data-cfemail="bcd4d9d0d0d3fcd7d9c8ddd292dfd3d1"><?php echo $general_tbl[0]['general_emailid'];?></span></a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            <?php echo $general_tbl[0]['general_address'] ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Pages</h3>
                    <ul class="quick-links">
                        <li><a href="<?php echo base_url('').'about-us'?>">About Us </a></li>
                        <li><a href="<?php echo base_url('').'contact-us'?>">Contact Us </a></li>
                        <li><a href="<?php echo base_url('').'online-admission-form'?>">Online Address Form</a></li>
                        <li><a href="<?php echo base_url('').'event'?>">Events</a></li>
                        <li><a href="<?php echo base_url('').'privacy-policy'?>">Privacy Policy</a></li>
                        <li><a href="<?php echo base_url('').'terms-and-condition'?>">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- dark version -->
<div class="dark-version">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
<!-- dark version -->

<!-- Jquery Slim JS -->
<script src="<?php echo base_url('');?>front_assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url('');?>front_assets/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu JS -->
<script src="<?php echo base_url('');?>front_assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php echo base_url('');?>front_assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo base_url('');?>front_assets/js/jquery.magnific-popup.min.js"></script>
<!-- Imagelightbox JS -->
<script src="<?php echo base_url('');?>front_assets/js/imagelightbox.min.js"></script>
<!-- Odometer JS -->
<script src="<?php echo base_url('');?>front_assets/js/odometer.min.js"></script>
<!-- Jquery Appear JS -->
<script src="<?php echo base_url('');?>front_assets/js/jquery.appear.min.js"></script>
<!-- Ajaxchimp JS -->
<script src="<?php echo base_url('');?>front_assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="<?php echo base_url('');?>front_assets/js/form-validator.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo base_url('');?>front_assets/js/main.js"></script>
<script>
// Fetch the Castle 
$(document).ready(function() {
    $("#online_form_religion").change(function() {
        var online_form_religion = $("#online_form_religion").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>search-castle",
            data: 'online_form_religion=' + online_form_religion,
            success: function(result) {
                $("#online_form_category").html(result);
            }
        });
    });
});
</script>
</body>

</html>