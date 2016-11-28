<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Register extends CI_Controller
{
	function index()
	{
	$this->load->view('register.php');// loading form view
	}
	function insert_to_db()
	{
		$this->load->model('user_model');
		$this->user_model->insert_to_db();
		$this->load->view('success.php');
	}

}