<?php
Class Modele_etudiant extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $infos=array();
    }

    function getAll($nom,$mail)
    { 
        $query = $this->db->get_where('etudiant',array('mail'=>$mail,'nom'=>$nom));
        //$query = $this->db->query("Select * from etudiant where mail=".$mail."and nom=".$nom.";");
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
     
       
        }
        return $row; 
        
    }

    function validCredentials($mail,$mdp)
    {
        $this->load->library('encrypt');

        $password = $this->encrypt->sha1($mdp);

        $q = "SELECT * FROM etudiant WHERE mail = ? AND mdp = ?";
        $data = array($mail,$password);
        $q = $this->db->query($q,$data);
        
        if($q->num_rows() > 0 )
        {
             $row = $q->row();
             $r = $q->result();
             
             if($row->etat!="non valide")
             {
                 $session_data = array('nom'=>$row->nom,'type'=>"etu",'mail'=>$mail,'logged_in' => true);
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
     function isLoggedIn()
     {
        if($this->session->userdata('logged_in'))
        {
            return true;
        }
        else
        {
            return false;
        }
     }
     function valider($nom,$mail)
    {
            $data = array('etat' => 'valide');
            $this->db->where('nom',$nom);
            $this->db->where('mail',$mail);
            $this->db->update('etudiant', $data); 
    }
}
?>
