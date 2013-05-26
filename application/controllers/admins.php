<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller 
{

        function __construct()
        {
            parent::__construct();
            $this->load->model('modele_admin');
        }
	public function index()
	{
            if(isset($_POST['connexionAdmin'])==FALSE)
            {
                if($this->session->userdata('type')=='admin')
                {
                    $this->load->view('administration');
                }
                else
                {
                   $this->load->view('admin');  
                }
            }
            else
            {
                if($this->modele_admin->validCredentials($_POST['login'],$_POST['login']))
                {
                    $this->load->view('administration');
                }
                else
                {
                    $this->load->view('admin');
                }
            }
		
	}
        
        function validationEtude($nom)
        {
            if(isset($_POST['validationEtude'])==TRUE)
             {
                 $this->load->model('modele_etude');
                 $this->modele_etude->valider($nom);
                 $this->load->view('administration');
             }
        }
        function validationEntreprise($nom)
        {
            if(isset($_POST['validationEntreprise'])==TRUE)
             {
                 $this->load->model('modeleEntreprise');
                 $this->modeleEntreprise->valider($nom);
                 $this->load->view('administration');
             }
        }
        function validationEtudiant($nom,$mail)
        {
            if(isset($_POST['validationEtudiant'])==TRUE)
             {
                 $this->load->model('modele_etudiant');
                 $this->modele_etudiant->valider($nom,$mail);
                 $this->load->view('administration');
             }
        }
        
        function liste($numero)
        {
            switch($numero)
            {
                case 1:
                    $this->load->view('admin_liste_entreprises');
                    break;
                case 2:
                    $this->load->view('admin_liste_etudes');
                    break;
                case 3:
                    $this->load->view('admin_liste_etudiants');
                    break;
                        
            }
        }
        
}