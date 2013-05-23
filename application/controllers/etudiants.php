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
	$this->load->view('etudiant_intro');
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
		$this->load->view('etudiant_dispo');
	}  
         public function remuneration()
        {
		$this->load->view('etudiant_remuneration');
	}  
         public function connexion()
        {
		$this->load->view('etudiant_connexion');
	} 
        public function inscription()
	{
		
            $this->load->database();

            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
             
            if (/*$this->form_validation->run() == FALSE*/isset($_POST['Submit']) == FALSE)
            {
                    $this->load->view('etu_inscr');
            }
            else
            {
                    $this->load->view('formEtuSuccess');
            }
	}
        public function inscriptionValide()
	{
             $this->load->view('formEtuSuccess');
        }
        
}
