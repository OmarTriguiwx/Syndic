<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Home.php
 * @author Imron Rosdiana
 */
class Carte extends CI_Controller
{
	public function add()
	{
		$this->load->library('cart');
		$data = array(
        'id'      => 'sku_123ABC',
        'qty'     => 1,
        'price'   => 39.95,
        'name'    => 'T-Shirt',
        'options' => array('Size' => 'L', 'Color' => 'Red'));
  
         $this->cart->insert($data);
         echo "add() called";

	}

	public function show()
	{
		$carte = $this->cart->contents() ; 
		echo "<pre>";
		print_r($carte);
	}
	public function add2()
	{
		$data = array(
        'id'      => 'sku_152ABC',
        'qty'     => 1,
        'price'   => 28.95,
        'name'    => 'T-Shirt',
        'options' => array('Size' => 'M', 'Color' => 'black'));
  
         $this->cart->insert($data);
         echo "add() called";
	}
	public function update()
	{
		$data = array(
			'rowid' => '4c6d19389bc5999e6ce5bb756ebcbb6d' , 
			'qty' => 2
			);
		$this->cart->update($data);
	}
	public function total()
	{
		echo  $this->cart->total_items();
 
	}
	public function remove()
	{
		$data = array(
			'rowid' => '4c6d19389bc5999e6ce5bb756ebcbb6d' , 
			'qty' => 0
			);
		$this->cart->update($data);
	}
	public function destroy()
	{
		$this->cart->destroy();
	}
	public function helo()
	{
		$this->load->view('test');
	}
	
}
 