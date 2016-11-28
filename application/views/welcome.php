<!doctype html>
<html lang="en-US">

    
<!-- Mirrored from pixarwpthemes.net/templates/hata/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:27:51 GMT -->
<head>

        <title>HATA - The Real Estate</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        
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
      

    </head>

    <body>

       

        <!-- HEADER -->
        <header class="clearfix">

            <div class="logo">

                <a href="#"><img src="<?php echo base_url('assets/template/images/logo.png'); ?>"  alt="HATA">HATA</a>
            </div>

            <nav class="navbar collapse" id="mobile-menu">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index-2.html">Acceuil</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="dropdown">
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
            <?php
                 
                        if (!empty($_SESSION['id_user'])) {
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/template/images/avatar1.png'); ?>" alt="User Photo">
                        <span class="drop-arow"></span>
                        </a>
                        <ul class="dropdown-menu user-drop">
                            <li><a href="User"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-list"></i>My Properties</a></li>
                            <li><a href="<?= site_url('home/logout') ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                        
                        </ul>

                        <?php
                        } else {
                        ?>
                         <h6><a href="Login"><i class="fa fa-sign-in" style="font-size: 22px; "></i>
                          &nbsp;&nbsp;&nbsp;&nbsp;Login</a></h6> 
                        <?php

                        }
                        

                    ?>

              
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </header>
        <!-- HEADER -->
                
        <!-- SLIDER -->
        <div class="flexslider" id="slider">
            <ul class="slides">
                <li>

                    <img src="<?php echo base_url('assets/template/images/slider.jpg'); ?>" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail">
                                    <div class="white">
                                        <h2>Maison<br>with Ghosts</h2>
                                        <span class="slide-location">South Beach, Miami (USA)</span>
                                        <div class="bar"></div>
                                        <span class="slide-price">$ 1 525 000</span>
                                    </div>
                                    <div class="red">
                                        <span class="bath">3 Bathroom</span>
                                        <span class="bed">2 Bedrooms</span>
                                        <span class="gym">1 Gym</span>
                                        <span class="pool">2 Pool</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>

                    <img src=" <?php echo base_url('assets/template/images/slider.jpg'); ?>" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail">
                                    <div class="white">
                                        <h2>House<br>with Ghosts</h2>
                                        <span class="slide-location">South Beach, Miami (USA)</span>
                                        <div class="bar"></div>
                                        <span class="slide-price">$ 1 525 000</span>
                                    </div>
                                    <div class="red">
                                        <span class="bath">3 Bathroom</span>
                                        <span class="bed">2 Bedrooms</span>
                                        <span class="gym">1 Gym</span>
                                        <span class="pool">2 Pool</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- SLIDER -->

        <!-- FILTER -->
        <div class="container">
            <div class="filter">

                <select class="location">
                    <option>Location</option>
                    <option>London</option>
                    <option>Paris</option>
                    <option>New York</option>
                </select>

                <select class="cata">
                    <option>Category</option>
                    <option>Land</option>
                    <option>Plots</option>
                    <option>Commercial</option>
                </select>

                <select class="type">
                    <option>Type</option>
                    <option>Buy</option>
                    <option>Sell</option>
                    <option>Rent</option>
                </select>

                <select class="type">
                    <option>Type</option>
                    <option>Buy</option>
                    <option>Sell</option>
                    <option>Rent</option>
                </select>

                <button type="button" class="btn"><i class="fa fa-search"></i>Search</button>

                <div class="range">
                    <p>
                      <label for="price">Price</label>
                      <span>$ <input type="text" id="price" ></span>
                    </p>
                    <div id="price-range"></div>
                </div>

                <a href="#" class="adv-srch">Advance Search</a>

            </div>
        </div>
        <!-- FILTER -->

        <!-- ITEMS GRID -->
        <div class="container">
          <?php 
                foreach($result  as $r): 
                 ?>
            <div class="row">

                <div class="col-md-4 col-sm-6">
               
                 
                    <div class="item">

                        <div class="item-header clearfix">
                            <h3><a href="#"><i class="fa fa-home fa-2x" aria-hidden="true" >&nbsp;&nbsp;</i><?php echo $r->nom_appartement; ?></a></h3>
                            
                        </div>
                        <figure>

                            <img src="<?php echo base_url();?>//assets/template/images/items/<?php echo $r->img; ?>" alt="" class="img-responsive">
                            
                            <div class="overlay">
                            
                                <a href="<?php echo base_url('welcome/single').'/'.$r->id_appartement;?>" class="btn btn-detail">Detaille</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $r->ville; ?></span>
                                
                                <span class="bed"><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $r->nbr_salle_bain; ?></span>
                                <span class="bath" ><i class="fa fa-umbrella" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $r->nbre_salon; ?></span>
                                <span class="garage"><i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $r->nbr_garage; ?></span>
                                
                            </div>
                            <div class="right">
                                <span class="area"><?php echo $r->surface; ?> m²</span>
                                <span class="price"><?php echo $r->prix_par_jour; ?> DT</span>
                            </div>
                        </div>
                    </div>
                </div>
               <?php endforeach; ?>
               <!--
                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>

                            <img src="<?php echo base_url('assets/template/images/items/2.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>

                        <img src="<?php echo base_url('assets/template/images/items/3.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/4.png'); ?>" alt="" class="img-responsive">
                            <span class="label hot">Hot</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/5.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/6.png'); ?>" alt="" class="img-responsive">
                            <span class="label sale">Sell</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ITEMS GRID -->

        <!-- FACTS -->
        <div class="facts_wrap animated">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="clearfix row">
                            <li class="counter col-md-3 col-sm-3">
                                <div>

                                    <figure><img src="<?php echo base_url('assets/template/images/fact1.png'); ?>" alt=""></figure>
                                    <small>Apartments</small>
                                    <span data-fact="2518">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="<?php echo base_url('assets/template/images/fact2.png'); ?>" alt=""></figure>
                                    <small>Industrial</small>
                                    <span data-fact="1007">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="<?php echo base_url('assets/template/images/fact3.png'); ?>" alt=""></figure>
                                    <small>Houses</small>
                                    <span data-fact="2119">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="<?php echo base_url('assets/template/images/fact4.png'); ?>" alt=""></figure>
                                    <small>Commercial</small>
                                    <span data-fact="507">000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- FACTS -->

        <!-- ITEMS GRID -->
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>

                            <img src="<?php echo base_url('assets/template/images/items/7.png'); ?>" alt="" class="img-responsive">
                            <span class="label sale">Sell</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/8.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/9.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/10.png'); ?>" alt="" class="img-responsive">
                            <span class="label hot">Hot</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/11.png'); ?>" alt="" class="img-responsive">
                            <span class="label rent">Rent</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="<?php echo base_url('assets/template/images/items/12.png'); ?>" alt="" class="img-responsive">
                            <span class="label sale">Sell</span>
                            <div class="overlay">
                                <a href="#" class="btn btn-detail">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                <span class="bed">3</span>
                                <span class="bath">2</span>
                                <span class="garage">2</span>
                                <span class="gym">1</span>
                            </div>
                            <div class="right">
                                <span class="area">134 m2</span>
                                <span class="price">$ 870000</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ITEMS GRID -->

        <!-- BANNER -->
        <div class="full-width-white design">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <article>
                            <h2>interior Design as gift</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
                            <button type="button" class="btn btn-danger">learn more</button>
                        </article>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <figure>
                        
                            <img src="<?php echo base_url('assets/template/images/gift-design.png'); ?>"" alt="Image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- BANNER -->

        <!-- BLOG -->
        <div class="full-width home-posts blog-posts">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="post clearfix">
                            <figure>

                                <a href="#"><img src="<?php echo base_url('assets/template/images/post1.png'); ?>"" alt="" class="img-responsive" ></a>
                            </figure>
                            <article>
                                <span class="date">8 June 2015</span>
                                <h3><a href="blog-post.html">It has nice clean design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis nascetur ridiculus...</p>
                                <a href="#" class="cmmt">28</a>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="post clearfix">
                            <figure>
                                <a href="#"><img src="<?php echo base_url('assets/template/images/post2.png'); ?>" alt="" class="img-responsive" ></a>
                            </figure>
                            <article>
                                <span class="date">14 September 2015</span>
                                <h3><a href="blog-post.html">Experienced real estate brokers</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis nascetur ridiculus...</p>
                                <a href="#" class="cmmt">7</a>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG -->

        <!-- BANNER -->
        <div class="full-width personal-agent">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <figure>

                            <img src="<?php echo base_url('assets/template/images/agent-pic.png'); ?>" alt="Pic" class="img-responsive">
                        </figure>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <article>
                            <span>Lara Loft</span>
                            <h2>Your personal agent</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget<br> dolor. Aenean massa.</p>
                            <button type="button" class="btn btn-danger">Get Agent Help</button>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER -->

        <!-- REVIEWS -->
        <div class="full-width rewiews">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">

                        <img src="<?php echo base_url('assets/template/images/avatar1.png'); ?>" alt="Avatar" class="img-responsive">
                        <h6>Jane Ramos</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="<?php echo base_url('assets/template/images/avatar2.png'); ?>" alt="Avatar" class="img-responsive">
                        <h6>Eva Rodriges</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="<?php echo base_url('assets/template/images/avatar3.png'); ?>" alt="Avatar" class="img-responsive">
                        <h6>Paul Jones</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- REVIEWS -->

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
                    <div class="col-md-5 copy-right">

                        <p><img src="<?php echo base_url('assets/template/images/footer-logo.png'); ?>" alt="Logo" class="img-responsive"> &copy; 2015 HATA — Real Estate Site Template</p>
                    </div>
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

<!-- Mirrored from pixarwpthemes.net/templates/hata/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:32:13 GMT -->
</html>