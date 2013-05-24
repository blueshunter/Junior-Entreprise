<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etudiants extends CI_Controller 

{
        public function __construct()
       {
            parent::__construct();
            $this->load->model('modele_etudiant');
       }


	public function index()
	{
            if($this->modele_etudiant->isLoggedIn())
            {
               $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
               $this->load->view('etudiant_intro',$data);
            } 
            else
            {
                $data=array('log'=>false,'nom'=>'','type'=>'etu');
                $this->load->view('etudiant_intro',$data);
            }
	}
        
        public function intro()
        {
            if($this->modele_etudiant->isLoggedIn())
            {  
               echo'test1';
               $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
               $this->load->view('etudiant_intro',$data);
            } 
            else
            {
                $data=array('log'=>false,'nom'=>'','type'=>'etu');
                $this->load->view('etudiant_intro',$data);
            }
	}  
         public function dispo()
        {
            if($this->modele_etudiant->isLoggedIn())
            {
               $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
               $this->load->view('etudiant_dispo',$data);
            } 
            else
            {
                $data=array('log'=>false,'nom'=>'','type'=>'etu');
                $this->load->view('etudiant_dispo',$data);
            }

	}  
         public function remuneration()
        {
            if($this->modele_etudiant->isLoggedIn())
            {
               $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
               $this->load->view('etudiant_remuneration',$data);
            } 
            else
            {
                $data=array('log'=>false,'nom'=>'','type'=>'etu');
                $this->load->view('etudiant_remuneration',$data);
            }
	
	}  
         public function connexion()
        {
            
            if (/*$this->form_validation->run() == FALSE*/isset($_POST['add_folder']) == FALSE)
            {
                if($this->modele_etudiant->isLoggedIn())
                {
                   $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
                   $this->load->view('etudiant_connexion',$data);
                } 
                else
                {
                    $data=array('log'=>false,'nom'=>'','type'=>'etu');
                    $this->load->view('etudiant_connexion',$data);
                }
            }
            else
            {
                   //charger le modele etudiant validCredentials($mail,$mdp)
                    $data=array('log'=>true,'nom'=>'MR. '.$_POST['nom'].'','type'=>'etu');
                    $this->load->view('etudiant_intro',$data);
            }

	} 
        public function inscription()
	{
		
            $this->load->database();

            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
             
            if (/*$this->form_validation->run() == FALSE*/isset($_POST['add_folder']) == FALSE)
            {
                    $data=array('log'=>false,'nom'=>'','type'=>'etu');
                    $this->load->view('etu_inscr',$data);
            }
            else
            {
                    $data=array('log'=>false,'nom'=>'','type'=>'etu');
                    $data=array('log'=>true,'nom'=>'MR. '.$_POST['nom'].'','type'=>'etu');
                    $this->load->view('formEtuSuccess',$data);
            }
	}
        public function inscriptionValide()
	{
            $data=array('log'=>true,'nom'=>'MR.','type'=>'etu');
            $this->load->view('formEtuSuccess',$data);
          
        }
        
}
