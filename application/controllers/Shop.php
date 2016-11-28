<?php
 
  class Shop extends CI_Controller
  {
  	
  	public function add($id)
  	{
  		$this->load->model('Appartement_model');
  		$this->load->library('cart');
  		$id = $this->Appartement_model->getByIdApp($id)->id_appartement;
  		$nom = $this->Appartement_model->getByIdApp($id)->nom_appartement ;
  		$prix = $this->Appartement_model->getByIdApp($id)->prix_par_jour ;
  		
  		$data = array(
        'id'      => $id,
        'qty'     => 1,
        'price'   => $prix,
        'name'    => $nom,
        'datedb' => $this->input->post('dbtime'),
        'datefin' => $this->input->post('dftime'), 
        'nbpersonne'=> $this->input->post('nombre')
        );
        
  
        $this->cart->insert($data);
       
        $chaine = 'welcome/single/'.$id ; 
		    redirect($chaine);

  		
  	}
    public function remove($id)
    {
      $this->cart->update(array(
        'rowid' => $id ,
         'qty' => 0 

        )); 
      redirect('User');
    }
  }