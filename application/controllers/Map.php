<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Map extends CI_Controller

{
	public function index()
	{
		$this->load->library('googlemaps');
		$this->confgureGoogleMap();
		
	}
	public function confgureGoogleMap()
	
	{
		$config['center'] = '36.633055,10.4605078';
		$config['zoom'] = 30;
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '36.633055,10.4605078';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		
		$this->load->view('map',$data);
	}
	
}