<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/form-elements.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
        
        
        
        <style>
            .login {
                margin-top: 20px;
            }
        </style>

        

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <center >
                                    <h3 style="color:white; font-size: 40px;">s'identifier</h3>
                                    
                                    <h4 style="color:white; font-size: 20px;">entez votre nom utilisateur et le mot de pass</h4>
                                </center>
                                    
                              
                           
                               
                               
                            </div>
                            <div class="form-bottom">

                             <?php if(isset($_SESSION)) {
                                    echo $this->session->flashdata('flash_data');
                                } ?>

                                <div class="form" style="padding">
                                <form action="<?= site_url('login') ?>" method="post">
                                    <div class="form-group">
                                    <label class="sr-only" for="username">NOM UTILISATEUR</label>
                                    <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                    <label class="sr-only" for="password">PASSWORD</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">ENTRER</button>
                                    <center><a href="Register" style="color:white ;">ci vous n'avez pas un compte .. faire une inscription ici  </a></center>

                                </form>
                                </div>
                                </div>
                        </div>
                    </div>
                
        <!-- Javascript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js" ></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" ></script>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js" ></script>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js" ></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

         


 

</html>