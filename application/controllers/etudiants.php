<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etudiants extends CI_Controller {


	public function index()
	{
		$this->load->view('etudiant');
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
		$this->load->view('etudiant_connexion');
	} 
        public function inscription()
	{
		$this->load->view('etu_inscr');
	}
        
}
