<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class Appartement_model extends CI_Model
{
	function get_list() {
        $this->db->select('*');
        $this->db->from('bien_immeubulier');
        $query = $this->db->get();
        return $result = $query->result();
    }
    public function getById($id){


		$this->db->select('*');
        $this->db->from('bien_immeubulier');
		$this->db->where('id_appartement',$id);
        $query = $this->db->get();
        return $result = $query->result();
	}
	
	public function getByIdApp($id){
		$this->db->select('*');
		$this->db->where('id_appartement',$id);
		$this->db->from('bien_immeubulier');
		$query=$this->db->get();
		return $query->row();
	}
}