<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class update_model extends CI_Model
{
	function __construct() {
          parent::__construct();
          $this->load->database();
    }
    function get_list() {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
}