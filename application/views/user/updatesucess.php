<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mdl/material.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url();?>assets/mdl/material.js" ></script>
<style>
  .alert {
      padding: 20px;
      background-color: #004d40;
      color: white;
      width: 500px
  }

  .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;

  }

  .closebtn:hover {
      color: black;
  }
  

</style>
    
</head>
<body>



<h1>update</h1>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Note:</strong> votre detail sont modifier avec succés 

</div>




<table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">user name</th>
      <th class="mdl-data-table__cell--non-numeric">password</th>
      <th class="mdl-data-table__cell--non-numeric">email</th>
      <th class="mdl-data-table__cell--non-numeric">cin</th>
      <th class="mdl-data-table__cell--non-numeric">nom</th>
      <th class="mdl-data-table__cell--non-numeric">prenom</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('username') ?></h6> </td>
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('password') ?></h6> </td>
      
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('email') ?></h6> </td>
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('cin') ?></h6> </td>
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('nom') ?></h6> </td>
      <td class="mdl-data-table__cell--non-numeric"><h6><?= $this->session->userdata('prenom') ?></h6> </td>
    </tr>
    
    <tr>
    
    
    <form method="post" action="<?php echo base_url();?>index.php/User/update_to_db">
          <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="username" placeholder="user name" >
             </div>
          </td>
          <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="password" placeholder="password" >
             </div>
          </td>
          <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="email" placeholder="email" >
             </div>
          </td>
           <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="cin" placeholder="cin" >
             </div>
          </td>
          <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="nom" placeholder="nom" >
             </div>
          </td>
          <td class="mdl-data-table__cell--non-numeric">
             <div class="mdl-textfield mdl-js-textfield">
             <input class="mdl-textfield__input" type="text" name="prenom" placeholder="prenom" >
             </div>
          </td>
        </tr>
         
        </tbody>
      </table>
      
      <input type="submit" class="btn" name="modifier" style="margin-left : 40%;  margin-top: 5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
 </form>



</body>
</html>