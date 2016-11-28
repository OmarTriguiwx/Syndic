<!doctype html>
<html lang="en-US">

    
<!-- Mirrored from pixarwpthemes.net/templates/hata/properties-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:37:41 GMT -->
<head>

        <title>HATA - The Real Estate</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/pace.js" ></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/bootstrap.min.css'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/flexslider.css'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/jquery.selectBox.css'); ?>">

       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/jquery-ui.css'); ?>">

        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/font-awesome.min.css'); ?>">
     
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/green.css'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/style.css'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/responsive.css'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/pace-minimal.css'); ?>">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="favicon.ico">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
      

    <?php echo $map['js']; ?>
    </head>

    <body>
    

        <!-- TOP -->
        <div class="top-bar">

            <p class="text">
                <a><i class="fa fa-map-marker"></i> 121 King Street, Melbourne Victoria 3000 Australia</a>
                <a href="tel:+61383766284"><i class="fa fa-phone"></i> + 613 8376 6284</a>
            </p>

            <p class="social">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-skype"></i></a>
            </p>

        </div>
        <!-- TOP -->

        <!-- HEADER -->
        <header class="clearfix">

            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="HATA">HATA</a>
            </div>

            <nav class="navbar collapse" id="mobile-menu">
                <ul class="nav navbar-nav">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                        <ul class="dropdown-menu">
                            <li><a href="properties-grid.html">Properties Grid</a></li>
                            <li><a href="properties-list.html">Properties List</a></li>
                            <li><a href="properties-map.html">Properties Map</a></li>
                            <li><a href="properties-single.html">Properties Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services Page</a></li>
                            <li><a href="services-single.html">Preparation of Documents</a></li>
                            <li><a href="services-single.html">Design Projects</a></li>
                            <li><a href="services-single.html">Repair of Apartments</a></li>
                            <li><a href="services-single.html">Utility Services</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Page</a>
                        <ul class="dropdown-menu">
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="error.html">404 Error</a></li>
                            <li><a href="offline.html">Site Offline</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Posts</a></li>
                            <li><a href="blog-post.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>

            <div class="user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/avatar1.png" alt="User Photo">
                    <span class="drop-arow"></span>
                </a>
                <ul class="dropdown-menu user-drop">
                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="#"><i class="fa fa-list"></i>My Properties</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </header>
        <!-- HEADER -->

        <div class="page-wrap properties-page map-properties">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="index-2.html">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Properties List</span>
                        </div>
                        <h2 class="page-title">All Properties</h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="property-filter">
                            <a href="#" class="active">All</a>
                            <a href="#">Rent</a>
                            <a href="#">Sale</a>
                            <a href="#">Buy</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="property-views">
                            <a href="properties-grid.html"><i class="fa fa-th-large"></i>Grid</a>
                            <a href="properties-list.html"><i class="fa fa-bars"></i>List</a>
                            <a href="properties-map.html" class="active"><i class="fa fa-map"></i>Map</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- MAP&FORM -->
            <div class="full-width map-wrap">

                <?php echo $map['html']; ?> 

               
            </div>
            <!-- MAP&FORM -->

        </div>

        <!-- CALL2ACTION -->
        <div class="full-width call-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Want to sell you property? contact us now!</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="contact.html" class="btn btn-danger">Submit Property</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL2ACTION -->

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-7">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Properties</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        
        <!-- FOOTER -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/gmap-properties.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery-1.11.3.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery-ui.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/masonry.pkgd.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery.flexslider-min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery.selectBox.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/icheck.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/counter.animation.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery.appear.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/custom.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/template/js/jquery.cycle2.js" ></script>


    </body>

<!-- Mirrored from pixarwpthemes.net/templates/hata/properties-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:37:46 GMT -->
</html>