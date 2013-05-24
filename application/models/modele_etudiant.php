<?php
Class Modele_etudiant extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $infos=array();
    }

    function getAll()
    { 
        $query = $this->db->get('etudiant');
        $infos = $query->result(); 
        $query->free_result(); 
        return $infos; 
        
    }

    function validCredentials($mail,$mdp)
    {
        $this->load->library('encrypt');

        $password = $this->encrypt->sha1($password);

        $q = "SELECT * FROM users WHERE mail = ? AND mdp = ?";
        $data = array($mail,$mdp);
        $q = $this->db->query($q,$data);

        if($q->num_rows() > 0)
        {
             $r = $q->result();
             $session_data = array('logged_in' => true);
             $this->session->set_userdata($session_data);
             // variable de session, on enregistre cet utilisateur comme loggé
             return true;
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
}
?>
