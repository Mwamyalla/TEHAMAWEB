<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Tehama space hub</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?=base_url().'assets/front'?>/images/newlogo.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?=base_url().'assets/front'?>/css/responsive.css">
  
  
</head>
<body>

    
   <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="<?=base_url().'assets/front'?>/images/all-icon/call.png" alt="icon"><span>+(255) 65 247 8487</span></li>
                                <li><img src="<?=base_url().'assets/front'?>/images/all-icon/email.png" alt="icon"><span>info@tehamaspace.org</span></li>
                                <li><img src="<?=base_url().'assets/front'?>/images/all-icon/map.png" alt="icon"><span>Dar es salaam, Tanzania</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-social text-lg-right text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="navigation navigation-2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?=base_url().'assets/front'?>/images/newlogo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="active" href="<?=base_url()?>">Home</a>
                                    </li>
                                      <li class="nav-item">
                                        <a href="#">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about">About Tehama Space Academy</a></li>
                                            <li><a href="management">Management</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?=base_url()?>elearning/courses">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=base_url()?>community">Our Community</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="#">Ict solution</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?=base_url().'account/login'?>">Staff Member</a></li>
                                            <li><a href="<?=base_url()?>">Projects</a></li>
                                            <li><a href="<?=base_url()?>">Online Meeting</a></li>
                                        </ul>
                                    </li>
									<?php if(!empty($user)):?>
										<li class="nav-item">
											<a href="#"><?=$user['firstname'] .' '. $user['lastname']?></a>
											<ul class="sub-menu">
												<li><a href="<?=base_url().'admin/dashboard'?>">Dashboard</a></li>
												<li><a href="<?=base_url().'admin/profile'?>">Profile</a></li>
												<li><a href="<?=base_url().'account/login/logout'?>">logout</a></li>
											</ul>
										</li>
									<?php else:?>
										<li class="nav-item">
											<a href="<?=base_url().'account/login'?>">Login / Register</a>
										</li>
									<?php endif;?>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                       <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
