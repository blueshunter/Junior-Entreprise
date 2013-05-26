<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entreprises extends CI_Controller
{
       public function __construct()
       {
            parent::__construct();
            $this->load->model('modeleEntreprise');

       }

	public function index()
	{
		$this->load->view('entreprise_projets');
	}
        public function projets()
	{
		$this->load->view('entreprise_projets');
	}
        
        public function competences()
	{
		$this->load->view('entreprise_competences');
	}
        public function tarifs()
	{
		$this->load->view('entreprise_tarifs');
	}
        public function connexion()
	{
		
            if(isset($_POST["connexionEntreprise"])==false)
            {
               $this->load->view('entreprise_connexion');
            }
            else
            {
               if($this->modeleEntreprise->validCredentials($_POST['mail'],$_POST['mdp']))
               {
                   $this->load->view('entreprise_administration');
               }
               else
               {
                   $this->load->view('entreprise_connexion');
               }
   
            }
	}
        public function inscription()
	{
            if(isset($_POST["inscriptionEntreprise"])==false)
            {
               $this->load->view('entreprise_inscr'); 
            }
            else
            {
               
               $this->load->view('formEntSuccess');
   
            }
		
	}
        public function deconnexion()
        {        
            $this->load->view('entreprise_deconnexion');
        }
        public function administration()
        {
            $this->load->view('entreprise_administration');
        }
        function fiche($nom)
        {
        $data['nom']=$nom;
        $this->load->view('entreprise_fiche',$data);
        }
}