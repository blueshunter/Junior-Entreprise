<?php

Class Modele_Etude extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getAll($nom)
    {
        $query = $this->db->get_where('etude',array('nom'=>$nom));
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
     
       
        }
        return $row;
    }
    function valider($nom)
    {
            $data = array('etat' => 'valide');
            $this->db->where('nom',$nom);
            $this->db->update('etude', $data); 
    }
}
?>
