<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entreprises extends CI_Controller {


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
		$this->load->view('entreprise_connexion');
	}
}