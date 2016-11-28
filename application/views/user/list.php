
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

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard.css'); ?>">
    
 	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mdl/material.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url();?>assets/mdl/material.js" ></script>

    <style>
	.demo-list-two {
	  width: 300px;
	}
    </style>
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
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp;&nbsp;DAR el WAFA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;<?= $this->session->userdata('username') ?> &nbsp; </a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="User/update">Profile</a></li>
            <li><a href="<?= site_url('home/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;"></i>&nbsp;&nbsp;Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">

            <li class="active"><a href="/syndic/index.php/User/get_list">liste des clients<span class="sr-only">(current)</span></a></li>
            <li><a href="#" style="color: #ffffff ;">gerer les reservations </a></li>
            <li><a href="#" style="color: #ffffff ;">gerer des bien immeublier</a></li>
            <li><a href="#" style="color: #ffffff ;" >gerer des blocs</a></li>
            <li><a href="#" style="color: #ffffff ;">gerer les reglement</a></li>
            <li><a href="#" style="color: #ffffff ;">gerer les recamations</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="glyphicon glyphicon-king" aria-hidden="true"></span>&nbsp;&nbsp;Admin</h1>
        <div id="container">

	<h1>Client</h1>      
<div style="margin-left:50px;">
	<ul class="demo-list-two mdl-list">

	   <!--
		
		 
		  	<h3>admin</h3>
		  	 <?php 
		     foreach($result  as $r): 
		     if (strcmp($r->niveau,"admin") == 0) {
		  	 ?>
		  	  <li class="mdl-list__item mdl-list__item--two-line">
		      <span class="mdl-list__item-primary-content">
		      <i class="material-icons mdl-list__item-avatar">person</i>
		      <span><?php echo $r->nom; echo " " ; echo $r->prenom; ?></span>
		      <span class="mdl-list__item-sub-title"><?php echo $r->tel;?></span>
		      </span>
		      <span class="mdl-list__item-secondary-content">
		      <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" 
		              onclick=" location.href='<?php echo base_url('User/supprimer').'/'.$r->id_user;?>'" >
		      
	          <i class="material-icons">delete</i>
            </button>
		     </span>
		     </li>
		     <?php } endforeach; ?>
		  	<h3>client</h3>
		  	<?php 
		     foreach($result  as $r): 
		     if (strcmp($r->niveau,"client") == 0) {
		  	 ?>

		  	<li class="mdl-list__item mdl-list__item--two-line">
		    <span class="mdl-list__item-primary-content">
		    <i class="material-icons mdl-list__item-avatar">person</i>
		    <span><?php echo $r->nom; echo " " ; echo $r->prenom; ?></span>
		    <span class="mdl-list__item-sub-title"><?php echo $r->tel;?></span>
		    </span>
		    <span class="mdl-list__item-secondary-content">
		    
		     <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" 
		              onclick=" location.href='<?php echo base_url('User/supprimer').'/'.$r->id_user;?>'" >
		      
	          <i class="material-icons">delete</i>
            </button>
		    </span>
		    </li>
		  
		  
		  
	    <?php } endforeach; ?>

	</ul>
</div>
    -->
			<table  class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th></th>
      <th class="mdl-data-table__cell--non-numeric">id</th>
      <th>username</th>
      <th>password</th>
      <th>mail</th>
      <th>cin</th>
      <th>nom</th>
      <th>prenom</th>
      <th>tel</th>
      <th>adresse</th>
      <th>niveau</th>
      <th>Supprimer</th>
      <th>modifier</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result  as $r): ?>
   
    <tr>
      <td><i class="material-icons mdl-list__item-avatar">person</i></td>
      <td><?php echo $r->id_user;?></td>    
      <td><?php echo $r->username;?></td>
      <td><?php echo $r->password;?></td>
      <td><?php echo $r->email;?></td>
      <td><?php echo $r->cin;?></td>
      <td><?php echo $r->nom;?></td>
      <td><?php echo $r->prenom;?></td>
      <td><?php echo $r->tel;?></td>
      <td><?php echo $r->adresse;?></td>
      <td><?php echo $r->niveau;?></td>
      <td><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-button--fab" 
                  onclick=" location.href='<?php echo base_url('User/supprimer').'/'.$r->id_user;?>'" >
          
            <i class="material-icons">delete</i>
            </button></td>
      <td>
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--red mdl-button--fab" 

                  onclick=" location.href='<?php echo base_url('User/update_to_db').'/'.$r->id_user;?>'" >
            <i class="material-icons">cached</i>
            </button>
      </td>
      
    </tr>
    
    <?php  endforeach; ?>
  </tbody>
</table>
			
                  
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
  </body>
</html>
