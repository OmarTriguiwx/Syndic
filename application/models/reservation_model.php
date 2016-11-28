<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class reservation_model extends CI_Model
{
	function __construct() {
          parent::__construct();
          $this->load->database();
    }
    function add_reservation()
    {
    	if ($cart = $this->cart->contents()) {
	    		foreach ($cart as $item) {
	    		$f1 =  $item['datedb'] ; 
		    	$f2 =  $item['datefin'];
		    	$f3 =  $item['nbpersonne'];
		    	$f4 =  $_SESSION['id_user'] ; 
		    	$f5 =  $item['id'];
		    	$this->db->query("INSERT INTO reservation (date_debut,date_fin,nombre_de_personne,id_user,id_appartement) VALUES('$f1','$f2','$f3','$f4','$f5')");
	    	}
	    $this->cart->destroy();
	    redirect('User');

    	}
    	
    	
    	
       	

    }
}