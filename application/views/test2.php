<?php
   if( $this->input->post["name"] || $this->input->post["age"] ) {
      echo "Welcome ". $this->input->post['name']. "<br />";
      echo "You are ". $this->input->post['age']. " years old.";
      
      exit();
   }
?>