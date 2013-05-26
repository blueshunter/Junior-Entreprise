<?php
Class Modele_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function validCredentials($login,$mdp)
    {
        $this->load->library('encrypt');

        $password = $this->encrypt->sha1($mdp);
        
        if($login=='admin'&&$mdp='d033e22ae348aeb5660fc2140aec35850c4da997')
        {             
             $session_data = array('nom'=>'admin','type'=>"admin",'mail'=>'','logged_in' => true);
             $this->session->set_userdata($session_data);
             // variable de session, on enregistre cet utilisateur comme loggé
             return true;
        } 
        else
        {
            return false;
        }
     }
}
?>
