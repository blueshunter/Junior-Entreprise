<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etudiants extends CI_Controller 

{
        public function __construct()
       {
            parent::__construct();
            $this->load->model('modele_etudiant');
            $this->load->model('modele_etude');
             $this->load->model('modele_groupe');
             $this->load->model('acompte');
              $this->load->model('frais');
       }


	public function index()
	{
               $this->load->view('etudiant_intro');
	}
        
        public function intro()
        {
           $this->load->view('etudiant_intro'); 
	}  
         public function dispo()
        {
            $this->load->view('etudiant_dispo');
	}  
         public function remuneration()
        {
           $this->load->view('etudiant_remuneration');	
	}  
         public function connexion()
        {
            // cas ou on est pas loggé
            if (isset($_POST["connexionEtu"]) == FALSE)
            {
                $this->load->view('etudiant_connexion');
            }
            else
            {
                    // le formulaire a ete envoyé, on verifie donc le login
                    if($this->modele_etudiant->validCredentials($_POST['mail'],$_POST['mdp']))
                    {// Si true, le mdp et login correspond à une session
                        $this->load->view('etudiant_administration');
                    }
                    else
                    {
                        $this->load->view('etudiant_connexion');
                    }

                   
            }

	}
        public function deconnexion()
        {
            $this->load->view('etudiant_deconnexion');
        }
        public function administration()
	{
            $this->load->view('etudiant_administration');
        }
        
        
        public function inscription()
	{
		
            $this->load->database();

            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
             
            if (isset($_POST['add_folder']) == FALSE)
            {

                    $this->load->view('etu_inscr');
            }
            else
            {
                    $this->load->view('formEtuSuccess');
            }
	}
        function fiche($nom,$mail)
        {
            $data['nom']=$nom;
            $data['mail']=$mail;
            $data['etude']='';
            $this->load->view('etudiant_fiche',$data);
        }
        
        function ficheCandidat($nom,$mail,$etude)
        {
            $data['nom']=$nom;
            $data['mail']=$mail;
            $data['etude']=$etude;
            $this->load->view('etudiant_fiche',$data);
           // $this->modele_groupe->valider($nom,$mail,$etude);
        }
        function candidature($nomEtu,$mail,$etude)
        {
            if($this->modele_groupe->insert($nomEtu,$mail,$etude))
            {
                $this->load->view('etudiant_candidature');
            }
            else
            {
                $this->load->view('etudiant_administration');
            }
            
        }
        
        function demandeFrais($etude,$nom,$mail)
        {
            
            $row=$this->modele_etudiant->getAll($nom,$mail);
            $id = $row->id;
            $data=array();
            $data['etudiant']=$id;
            $data['etude']=$etude;

            $this->load->view('etudiant_demande_frais',$data);         
        }
        
        function insertFrais($etudiant,$etude)
        {
            if (isset($_POST['insert']) == true)
            {
                $this->frais->insert($etude,$etudiant,$_POST['montant'],$_POST['type'],$_POST['date']);
                $this->load->view('etudiant_administration');
            }
            else
            {
                $this->load->view('etudiant_refus');
            }
        }
        function insertRemboursement($etudiant,$etude)
        {
            $nbEtu=$this->modele_groupe->getNbEtu($etude);
            $montant = $this->acompte->getTotalAcompte($etude,$etudiant)+$_POST['montant'];
            $montantAut =($this->modele_etude->getPrixEtude($etude)*(80/100))/$nbEtu;
            echo $montantAut;
            if (isset($_POST['insert']) == true && $this->acompte->getNbAcompte($etude,$etudiant)<3 &&$montant <=$montantAut)
            {
                $this->acompte->insert($etude,$etudiant,$_POST['montant']);
                $this->load->view('etudiant_administration');
            }
            else
            {
                 $this->load->view('etudiant_refus'); 
            }
        }
        function demandeRemb($etude,$nom,$mail)
        {
            $row=$this->modele_etudiant->getAll($nom,$mail);
            $id = $row->id;
            $data=array();
            $data['etudiant']=$id;
            $data['etude']=$etude;
            $this->load->view('etudiant_demande_remb',$data);         
        }
              
        
}
