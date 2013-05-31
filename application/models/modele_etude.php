<?php

Class Modele_Etude extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('modele_groupe');
        $this->load->model('modeleEntreprise');
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
    
    function getNom($id)
    {
        $query = $this->db->query("select * from etude where id_etude='".$id."';");
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
           //return "test"; 
           return $row->nom; 
           
        }
        else
        {
            return "erreur requete SQL";
        }
        
    }
    
    function getInfosFacture($id)
    {
        $query = $this->db->query
            ("
                   select * from groupeEtudiant join etude join entrprise
                   where groupeEtudiant.id_etude=etude.id_etude
                   and etude.id_entrprise=entrprise.id
                   and etude.id_etude='$id';
            ");

        $row = $query->row_array(); 
        return $row;
    }
    
    function valider($nom)
    {
            $data = array('etat' => 'valide');
            $this->db->where('nom',$nom);
            $this->db->update('etude', $data); 
    }
    function validerEnCours($id)
    {
            $data = array('etat' => 'en cours');
            $this->db->where('id_etude',$id);
            $this->db->update('etude', $data); 
    }
    function terminerEtude($id)
    {
            $data = array('etat' => 'terminee');
            $this->db->where('id_etude',$id);
            $this->db->update('etude', $data); 
    }
    function getPrixEtude($etude)
    {
        $query = $this->db->get_where('etude',array('id_etude'=>$etude));
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
           $prix = ($row->duree)*($row->prix);
           
        }
        else
        {
            $prix=-1;
        }
        return $prix;
    }
}
?>
