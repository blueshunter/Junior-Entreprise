<?php
Class Etudes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('modele_etude');
    }
    
    function nouvelleEtude()
    {
        if(isset($_POST['inscriptionEtude'])==FALSE)
        {
            $this->load->view('etude_form');
        }
        else
        {
            $this->load->view('etude_form_success');
        }
        
    }
    
    
    
    function fiche($nom)
    {
        $data['nom']=$nom;
        $data['candidature']="false";
        $this->load->view('etude_fiche',$data);
    }
    function ficheCandidat($nom)
    {
        $data['nom']=$nom;
        $data['candidature']="true";
        $this->load->view('etude_fiche',$data);
    }
}
?>