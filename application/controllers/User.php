<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Login.php
 * @author Imron rosdiana
 */
class User extends CI_Controller
{
	public $page="user";
    public $model="user_model";

  		 public function index()
  		{
  			if (strcmp($_SESSION['niveau'],"admin") == 0) {
                  
				$v['content']=$this->page.'/calander';
			    $this->load->view('admin',$v);
            } else {

		    
		
    		   
                $v['content']=$this->page.'/index';
			    $this->load->view('client',$v);
            }
  		}
  		function insert_to_db()
		{
			$this->load->model('reservation_model');
			$this->reservation_model->add_reservation();
			
		}
		
		
		public function update_to_db()
		{
			$this->load->model('user_model');
			$this->user_model->update_to_db();
			$v['content']=$this->page.'/updatesucess';
		    $this->load->view('admin',$v);
			
		}

		public function get_list()
        {
	        $data   = array();
	        $this->load->model('update_model');
	        $this->load->helper('url');
			$data['result'] = $this->update_model->get_list();
	        $this->load->view('user/list', $data );
        }

        public function supprimer($id)
        {
			$this->load->model($this->model);  
			$this->user_model->delete($id);
			redirect('User/get_list');  
	    }
	    public  function get_content()
        {
	        $data   = array();
	        $this->load->model('update_model');
	        $this->load->helper('url');
	        $data['result'] = $this->update_model->get_list();
	        $this->load->view('admin', $data);
        
        }
}