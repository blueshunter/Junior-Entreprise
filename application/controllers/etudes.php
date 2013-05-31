<?php
Class Etudes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('modele_etude');
        $this->load->model('frais');
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
    
    
    function facture($id)
    {
            $data= array();
            $row=$this->modele_etude->getInfosFacture($id);
            $entreprise=$this->modeleEntreprise->getNom($row['id_entrprise']);
 
            $data['facture']=$row['id_etude'];
            $data['siret']="732 829 320 00074";
            $data['date']=' ';
            $data['entreprise']=$entreprise;
            $data['adresse']=$row['adresse'];
            $data['etude']=$row['id_etude'];
            $data['prix']=$row['prix'];
            $data['duree']=$row['duree'];
            $data['cout']=$this->modele_etude->getPrixEtude($row['id_etude']);
            $data['frais']=$this->frais->getMontantFrais($row['id_etude']);
            $data['total']=$data['cout']+$data['frais'];
            
            $this->load->view('facture',$data);
    }
    function convention($id)
    {
        $data= array();
        if(isset($_POST['print'])==FALSE)
        {
            
             $data['print']="off";
        }
        else
        {
            $data['print']="on";
        }
        $data['id']=$id;
        $this->load->view('etude_convention',$data);
                

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
