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
}
