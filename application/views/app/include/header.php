<?php 
    $page_url = $this->uri->segment(1);
    $page_slug = $this->uri->segment(2);
    if ($page_url == '') {
        $page_url == 'Home';
    }
    $general_tbl=$this->crud_model->get_data_by_query("SELECT * FROM `general_tbl`");
    if ($page_url == 'event-detail') {
        $event = $this->crud_model->get_data_by_query("SELECT event_title,event_seo_keyword,event_seo_description FROM `event` WHERE `event_status`='1' AND `event_slug`='$page_slug'");
        foreach ($event as $event) {
            $SEOTitle =  $event['event_title'].' | Bright View International School';
            $SEOKeyword =  $event['event_seo_keyword'];
            $SEODescription =  $event['event_seo_description'];
        }
    } else {
        $seo=$this->crud_model->get_data_by_query("SELECT seo_title,seo_keyword,seo_description FROM `seo` WHERE `seo_status`='1' AND `seo_page_slug`='$page_url'");
        foreach ($seo as $seo) {
            $SEOTitle =  $seo['seo_title'].' | Bright View International School';
            $SEOKeyword =  $seo['seo_keyword'];
            $SEODescription =  $seo['seo_description'];
        }
        
    }
?>
<!doctype html>
<html lang="zxx" class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/owl.theme.default.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/odometer.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/magnific-popup.min.css">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/imagelightbox.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/style.css">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="<?php echo base_url('');?>front_assets/css/responsive.css">
        <!-- SEO  -->
        <title><?php if (!empty($SEOTitle)) { echo ucwords($SEOTitle); } else { echo "Bright View International School";} ?></title>
        <meta name="keywords" content="<?php if (!empty($SEOKeyword)) { echo $SEOKeyword; } else { echo "Bright View International School";} ?>">
        <meta name="description" content="<?php if (!empty($SEODescription)) { echo $SEODescription; } else { echo "Bright View International School";} ?>">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('')?>favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('')?>favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('')?>favicon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="wrapper">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-1a"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="<?php echo base_url('');?>">
                                <img src="<?php echo base_url('').'uploads/'.$general_tbl[0]['general_imgicon'];?>" class="black-logo" alt="image">
                                <img src="<?php echo base_url('').'uploads/'.$general_tbl[0]['general_imgicon'];?>" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url('');?>">
                            <img src="<?php echo base_url('').'uploads/'.$general_tbl[0]['general_imgicon'];?>" class="black-logo" alt="image">
                            <img src="<?php echo base_url('').'uploads/'.$general_tbl[0]['general_imgicon'];?>" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('');?>" class="nav-link <?php if ($page_url == '') { echo 'active'; }?> ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page_url =='about-us' || $page_url == 'our-mission-vission' || $page_url == 'our-value'|| $page_url == 'director-message' || $page_url == 'principal-message' ) { echo 'active'; } ?>">About Us <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item <?php if($page_url == 'about-us'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>about-us" class="nav-link">About Us</a></li>
                                        <li class="nav-item <?php if($page_url == 'our-mission-vission'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>our-mission-vission" class="nav-link">Our Mission & Vission</a></li>
                                        <li class="nav-item <?php if($page_url == 'our-value'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>our-value" class="nav-link">Our Value</a></li>
                                        <li class="nav-item <?php if($page_url == 'director-message'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>director-message" class="nav-link">Director Message</a></li>
                                        <li class="nav-item <?php if($page_url == 'principal-message'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>principal-message" class="nav-link">Principal Message</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page_url =='academic-course' || $page_url == 'parents-teacher-meeting' || $page_url == 'suggestion-to-parents' || $page_url == 'curriculum'|| $page_url == 'celebration' || $page_url=='school-rules-and-regulations') { echo 'active'; } ?>">Academic <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item <?php if($page_url == 'academic-course'){ echo 'active'; };?>"><a href="<?php echo base_url('').'academic-course'?>" class="nav-link">Academic Course</a></li>
                                        <li class="nav-item <?php if($page_url == 'parents-teacher-meeting'){ echo 'active'; };?>"><a href="<?php echo base_url('').'parents-teacher-meeting'?>" class="nav-link">Parents teacher meeting</a></li>
                                        <li class="nav-item <?php if($page_url == 'suggestion-to-parents'){ echo 'active'; };?>"><a href="<?php echo base_url('').'suggestion-to-parents'?>" class="nav-link">Suggestion to parents</a></li>
                                        <li class="nav-item <?php if($page_url == 'curriculum'){ echo 'active'; };?>"><a href="<?php echo base_url('').'curriculum'?>" class="nav-link">Curriculum</a></li>
                                        <li class="nav-item <?php if($page_url == 'celebration'){ echo 'active'; };?>"><a href="<?php echo base_url('').'celebration'?>" class="nav-link">Celebration</a></li>
                                        <li class="nav-item <?php if($page_url == 'school-rules-and-regulations'){ echo 'active';} ?>"><a href="<?php echo base_url('');?>school-rules-and-regulations" class="nav-link">School Rules & Regulations</a></li>
                                    </ul>
                                </li> 

                                <li class="nav-item <?php if ($page_url =='registration-process' || $page_url == 'document-required' || $page_url == 'online-admission-form' || $page_url == 'admission-procedure'|| $page_url == 'fee-policies'|| $page_url == 'school-policies' ) { echo 'active'; } ?>">
                                    <a href="#" class="nav-link">Admission <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a <?php if ($page_url == 'registration-process') { echo "class=active"; }?> href="<?php echo base_url('').'registration-process'?>" class="nav-link">Registration Process</a></li>
                                        <li class="nav-item"><a <?php if ($page_url == 'document-required') { echo "class=active"; }?> href="<?php echo base_url('').'document-required'?>" class="nav-link">Document Required</a></li>
                                        <li class="nav-item"><a <?php if ($page_url == 'online-admission-form') { echo "class=active"; }?> href="<?php echo base_url('').'online-admission-form'?>" class="nav-link">Online Admission Form</a></li>
                                        <li class="nav-item"><a <?php if ($page_url == 'admission-procedure') { echo "class=active"; }?> href="<?php echo base_url('').'admission-procedure'?>" class="nav-link">Admission Procedure</a></li>
                                        <li class="nav-item"><a <?php if ($page_url == 'fee-policies') { echo "class=active"; }?> href="<?php echo base_url('').'fee-policies'?>" class="nav-link">Fee Policies</a></li>
                                        <li class="nav-item"><a <?php if ($page_url == 'school-policies') { echo "class=active"; }?> href="<?php echo base_url('').'school-policies'?>" class="nav-link">School Policies</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item <?php if ($page_url =='event' || $page_url == 'event-detail' ) { echo 'active'; } ?> "><a href="<?php echo base_url('').'event'?>" class="nav-link">Event</a></li>
                                <li class="nav-item <?php if ($page_url =='contact-us') { echo 'active'; } ?> "><a href="<?php echo base_url('').'contact-us'?>" class="nav-link">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <!-- <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->