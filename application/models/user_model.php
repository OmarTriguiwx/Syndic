<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class user_model extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);
        return $this->db->get('user')->row();
    }
 
 
    function insert_to_db()
    {
        $f1 = $_POST['name'];
        $f2 = $_POST['password'];
        $f3 = $_POST['email'];
        $f4 = $_POST['cin'];
        $this->db->query("INSERT INTO user (username,password,email,cin) VALUES('$f1','$f2','$f3','$f4')");

    
    }
    public function delete($id){ 
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }

    function update_to_db()
    {
        if (!empty($_POST['username']) ) {
            $f1 = $_POST['username'];
            $this->session->set_userdata('username', $f1);
        } else {
            $f1 = (string)$this->session->userdata('username') ; 
        }

        if (!empty($_POST['password']) ) {
            $f2 = $_POST['password'];
            $this->session->set_userdata('password', $f2);
        } else {
            $f2 = (string)$this->session->userdata('password') ; 
        }

        if (!empty($_POST['email'])) {
            $f3 = $_POST['email'];
            $this->session->set_userdata('email', $f3);
        } else {
            $f3 = (string)$this->session->userdata('email') ; 
        }

         if (!empty($_POST['cin'])) {
            $f4 = $_POST['cin'];
            $this->session->set_userdata('cin', $f4);
        } else {
            $f4 = (string)$this->session->userdata('cin') ; 
        }

         if (!empty($_POST['nom'])) {
            $f5 = $_POST['nom'];
            $this->session->set_userdata('nom', $f5);
        } else {
            $f5 = (string)$this->session->userdata('nom') ; 
        }


         if (!empty($_POST['prenom'])) {
            $f6 = $_POST['prenom'];
            $this->session->set_userdata('prenom', $f6);
        } else {
            $f6 = (string)$this->session->userdata('prenom') ; 
        }

        $f7 = (string)$this->session->userdata('id_user') ; 

        $this->db->query("UPDATE user SET username='$f1', password='$f2' , email='$f3' , cin='$f4' , nom ='$f5' , prenom ='$f6' 
              where id_user = '$f7' ");    
    }
    
 
    function __destruct() {
        $this->db->close();
    }
}