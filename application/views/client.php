<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/shop/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/shop/css/custom.css'); ?>">
    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mdl/material.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url();?>assets/mdl/material.js" ></script>
  </head>

  <body style="background-color: rgba(238, 241, 241, 0.6);">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/syndic"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp;&nbsp;DAR el WAFA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;<?= $this->session->userdata('username') ?> &nbsp; </a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="<?= site_url('home/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;"></i>&nbsp;&nbsp;Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" >
            <ul class="nav nav-sidebar">

            <li class="active"><a href="/syndic/index.php/User/get_list">liste des clients<span class="sr-only">(current)</span></a></li>
            <li><a href="#" style="color: #ffffff ;">Reports</a></li>
            <li><a href="#" style="color: #ffffff ;" >Analytics</a></li>
            <li><a href="#" style="color: #ffffff ;">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="" style="color: #ffffff ;">Nav item</a></li>
            <li><a href="" style="color: #ffffff ;">Nav item again</a></li>
            <li><a href="" style="color: #ffffff ;">One more nav</a></li>
            <li><a href="" style="color: #ffffff ;">Another nav item</a></li>
            <li><a href="" style="color: #ffffff ;">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="" style="color: #ffffff ;">Nav item again</a></li>
            <li><a href="" style="color: #ffffff ;">One more nav</a></li>
            <li><a href="" style="color: #ffffff ;">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span>&nbsp;&nbsp;client</h1>
           <div id="container">
        <?php
       
        
           $this->load->view($content);
        ?>

        </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" ></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- JavaScript includes -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/shop/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/shop/js/customjs.js" ></script>  </body>
</html>
