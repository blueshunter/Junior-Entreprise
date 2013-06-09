<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller 
{

        function __construct()
        {
            parent::__construct();
            $this->load->model('modele_admin');
            $this->load->model('modele_groupe');
            $this->load->model('modele_etude');
            $this->load->model('modele_etudiant');
            $this->load->model('modeleEntreprise');
            $this->load->model('frais');
            $this->load->model('acompte');
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
        
        function convention($nbCandidats,$id)
        {
            if($nbCandidats<3)
            {
                $this->load->view('admin_convention_refusee');
                // edition refusée
            }
            else
            {
                // modele_etude->validerEnCours
                $this->modele_etude->validerEnCours($id);
                $this->load->view('admin_convention_validee');
            }

        }
        
        function facture($id)
        {
            $this->modele_etude->terminerEtude($id);
             $this->load->view('admin_etude_terminee');
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
        
        function validationCandidature($nom,$mail,$etude)
        {
            if(isset($_POST['validationCandidature'])==TRUE)
            {
                if(isset($_POST['statut'])=="true")
                {
                    $statut='resp';
                }
                 else
                {
                     $statut='nonResp';
                }

                if($this->modele_groupe->valider($nom,$mail,$etude,$statut))
                {
                   $this->load->view('groupe_valide'); 
                }
                else
                {
                    echo 'nom :'.$nom.'</br> mail: '.$mail.'</br> etude'.$etude.'</br>';
                    $this->load->view('administration');
                }
    
            }
            else
            {
                $this->load->view('administration');
            }
        }
        function acompte($id)
        {
            if($id!='false')
            {
               $this->acompte->VALIDER($id);
            }
            $this->load->view('admin_liste_acompte');
        }
        
        function frais($id)
        {
            if($id!='false')
            {
               $this->frais->VALIDER($id);
            }
            $this->load->view('admin_liste_frais');
        }
        
        function liste($type,$etat)
        {
            $data=array();
            switch($type)
            {
                case 'entreprise':
                    if($etat=='nonValide')
                    {
                        $data['etat']='non valide';
                        $this->load->view('admin_liste_entreprises',$data);
                    }
                    if($etat=='Valide')
                    {
                        $data['etat']='valide';
                        $this->load->view('admin_liste_entreprises',$data);
                    }
                    break;
                case 'etude':
                    if($etat=='nonValide')
                    {
                        $data['etat']='non valide';
                        $this->load->view('admin_liste_etudes',$data);
                    }
                    if($etat=='Valide')
                    {
                        $data['etat']='valide';
                        $this->load->view('admin_liste_etudes',$data);
                    }
                    if($etat=='enCours')
                    {
                        $data['etat']='en cours';
                        $this->load->view('admin_liste_etudes',$data);
                    }
                    if($etat=='terminee')
                    {
                        $data['etat']='terminee';
                        $this->load->view('admin_liste_etudes',$data);
                    }
                    break;
                case 'etudiant':
                    if($etat=='nonValide')
                    {
                        $data['etat']='non valide';
                        $this->load->view('admin_liste_etudiants',$data);
                    }
                    if($etat=='Valide')
                    {
                        $data['etat']='valide';
                        $this->load->view('admin_liste_etudiants',$data);
                    }
                    break;
                        
            }
        }
        
}