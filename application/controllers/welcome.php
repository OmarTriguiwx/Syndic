<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Login.php
 * @author Imron rosdiana
 */
class welcome extends CI_Controller
{
    public function index() {
         
            $data   = array();
	        $this->load->model('Appartement_model');
	        $this->load->helper('url');
			$data['result'] = $this->Appartement_model->get_list();
	        $this->load->view('welcome', $data );
    }
    public function single($id)
    {
        $data   = array();
        $this->load->model('Appartement_model');
        $this->load->helper('url');
        $data['result'] = $this->Appartement_model->getByIdApp($id);

        /*API GOOGLE MAP*/
        $this->load->library('googlemaps');
        $x = $this->Appartement_model->getByIdApp($id)->Nord ;
        $y = $this->Appartement_model->getByIdApp($id)->sud ;
        $cord = $x.','.$y ; 
        $config['center'] = $cord;
        $config['zoom'] = 12;
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $cord;
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        
        $this->load->view('propritaire', $data );
        }
   
    
    
   
}