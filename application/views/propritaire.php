<!doctype html>
<html lang="en-US">

    
<!-- Mirrored from pixarwpthemes.net/templates/hata/properties-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:37:46 GMT -->
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
        <style type="text/css">
        .cart {
                padding-bottom: 35px;
                display: inline-block;
                position: relative;
                margin-right: 40px ;
                margin-top: 3px;
                float: right;
        }
        </style>
        <style type="text/css">
        table, th, td {
          border: 1px solid black;
        }
    </style>
      
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

                <a href="#"><img src="<?php echo base_url('assets/template/images/logo.png'); ?>" alt="HATA">HATA</a>
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
                    <div class="cart">
                        <a href="#" id="cart" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Cart   &nbsp;  &nbsp;  &nbsp;<span class="badge"><?php echo $this->cart->total_items(); ?></span></a>
                        <ul class="dropdown-menu user-drop">
                             <?php if ($cart = $this->cart->contents()) { ?>
                             <div id="carte">
                            <table>
                        <caption>total : <?php echo $this->cart->total(); ?></caption>
                        <tr>
                            <th> id </th>
                            <th> Nom </th>
                            <th> quantite </th>
                            <th> prix </th>
                            <th> date deb </th>
                            <th> date fin </th>
                            <th> nombre </th>
                                
                            </tr>
                        <?php foreach ($cart as $item) : ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['name']; ?></td>
                                <td><?php echo $item['qty']; ?></td>
                                <td><?php echo $item['price']; ?></td>
                                <td><?php echo $item['datedb']; ?></td>
                                <td><?php echo $item['datefin']; ?></td>
                                <td><?php echo $item['nbpersonne']; ?></td>
                            
                            </tr>
                        <?php endforeach; ?>
                        <?php echo $this->input->post['dbtime']; ?>
                    </table>
                    </div>
                    <?php
                        } else {
                        ?>
                         <h6><a href="Welcome/Login"><i class="fa fa-sign-in" style="font-size: 22px; "></i>
                          &nbsp;&nbsp;&nbsp;&nbsp;Login</a></h6> 
                        <?php

                        }
                        

                    ?>
                    </ul>
            </div>



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
<form action="<?php echo base_url('Shop/add').'/'.$result->id_appartement;?>" method="post">
        <div class="page-wrap properties-page property-single">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="index-2.html">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Properties List</span>
                        </div>
                        <h2 class="page-title"><?= $result->nom_appartement;?></h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <div class="container">

                <!-- PROPERTY FILTERS -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="property-filter">
                            <a href="#" class="active">Overview</a>
                            <a href="#">Living Room</a>
                            <a href="#">I Bedroom</a>
                            <a href="#">II Bedroom</a>
                            <a href="#">Bathroom</a>
                            <a href="#">Kitchen</a>
                            
                        </div>
                    </div>
                </div>
                <!-- PROPERTY FILTERS -->

                <div class="row">

                    <!-- PROPERTY SLIDER -->
                    <div class="col-md-7 property-slider">
                        <figure>

                            <img src="<?php echo base_url('assets/template/images/pro-big.jpg'); ?>" alt="Image" class="img-responsive">
                            <span class="label sale">Sale</span>
                        </figure>
                        <div class="thumbnails">

                            <a href="#"><img src="<?php echo base_url('assets/template/images/pro-thumb1.jpg'); ?>" alt="Thumbnils" class="img-responsive"></a>
                            <a href="#"><img src="<?php echo base_url('assets/template/images/pro-thumb2.jpg'); ?>" alt="Thumbnils" class="img-responsive"></a>
                            <a href="#"><img src="<?php echo base_url('assets/template/images/pro-thumb3.jpg'); ?>" alt="Thumbnils" class="img-responsive"></a>
                        </div>
                    </div>
                    <!-- PROPERTY SLIDER -->

                    <!-- PROPERTY DATA -->
                    <div class="col-md-5 property-data">
                        <div class="prop-features prop-before">
                            <span class="location"><?= $result->ville;?></span>
                            <span class="area"><?= $result->surface;?> M²</span>
                        </div>
                        <div class="prop-price">
                        
                            <strong class="price"><?= $result->prix_par_jour;?> DT /PAR MOIS</strong>
                            
                            <input type="submit" name="Reserver" />
                        </div>
                        <div class="prop-features">
                            <span class="bed"><?= $result->nbre_salon;?> salon</span>
                            <span class="garage"><?= $result->nbr_garage;?> garage </span>
                            <span class="bath"><?= $result->nbr_salle_bain;?> salle de bain</span>
                            <span class="kitchen"><?= $result->nbr_cuisine;?> cuisine</span>
                          
                        </div>
                        <ul>
                     
                             
                            <li>Gaz de ville</li>
                            <li>Chauffage centrale</li>
                            <li>Ascenseur de marque</li>
                            <li>Securité</li>
                            <li>Parking</li>
                            <li>Cuisine agencée</li>
                            <li>Résidence</li>
                            
                            
                        </ul>
                        
                        
                         <input  type="date"    name="dbtime"><br/>
                         <input  type="date"    name="dftime"   ><br/>
                         <input  type="number"  name="nombre">

                        </form>
                    </div>
                    <!-- PROPERTY DATA -->

                </div>

            </div>

            <!-- GALLERY -->
            <div class="full-width gallery">
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item grid-item-half">

                        <a href="#"><img src="<?php echo base_url('assets/template/images/g13.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g11.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g12.jpg'); ?>" alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g14.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g15.jpg'); ?>" alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g16.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g17.jpg'); ?>" alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g18.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g19.jpg'); ?>" alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item grid-item-half">
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g20.jpg'); ?>" alt=""><div class="overlay"></div></a>
                        <a href="#"><img src="<?php echo base_url('assets/template/images/g13.jpg'); ?>" alt=""><div class="overlay"></div></a>
                    </div>
                </div>
            </div>
            <!-- GALLERY -->
 <div class="full-width map-wrap">
 
        <?php echo $map['html']; ?> 

               
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

<!-- Mirrored from pixarwpthemes.net/templates/hata/properties-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:38:42 GMT -->
</html>