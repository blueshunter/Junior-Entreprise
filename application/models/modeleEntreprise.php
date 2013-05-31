<?php

 Class ModeleEntreprise extends CI_Model
 {
     function __construct()
    {
        // Call the Model constructor
        parent::__construct();
 
    }
    
    function getAll($nom)
    {
        
        $query = $this->db->get_where('entrprise',array('nom'=>$nom));
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
       
        }
        return $row; 
    }
    function getNom($id)
    {
        $query = $this->db->get_where('entrprise',array('id'=>$id));
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
       
        }
        return $row->nom; 
    }
    
    function valider($nom)
    {
            $data = array('etat' => 'valide');
            $this->db->where('nom',$nom);
            $this->db->update('entrprise', $data); 
    }
    
    function validCredentials($mail,$mdp)
    {

        $this->load->library('encrypt');

        $password = $this->encrypt->sha1($mdp);

        $q = "SELECT * FROM entrprise WHERE mail = ? AND mdp = ?";
        $data = array($mail,$password);
        $q = $this->db->query($q,$data);
        
        if($q->num_rows() > 0)
        {
             $row = $q->row();
             $r = $q->result();
             
             if($row->etat!="non valide")
             {
                 $session_data = array('nom'=>$row->nom,'type'=>"ent",'mail'=>$mail,'logged_in' => true);
                $this->session->set_userdata($session_data);
                // variable de session, on enregistre cet utilisateur comme loggé
                return true;
             }
             else
            {
                return false;
            }
        } 
        else
        {
            return false;
        }
     }
 }
?>
