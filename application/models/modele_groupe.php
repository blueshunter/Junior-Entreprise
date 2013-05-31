<?php
Class Modele_groupe extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function liste()
    {
        $query=$this->db->query("select * from groupeEtudiant where etat = 'non valide'");
        foreach ($query->result() as $rowtwo)
        {
            $query=$this->db->query("select * from etudiant where id = ".$rowtwo->id_etudiant.";");
            $row = $query->row_array(); 
            if ($query->num_rows() != 0)
            {
            
               echo "<li><a href=".base_url('Etudiants/ficheCandidat/'.$row['nom'].'/'.$row['mail'].'/'.$rowtwo->id_etude).">".str_replace('_', ' ',$row['nom'])."</a></li>";
            }
        }
                
    }
    
    function getNbEtu($etude)
    {
        $var=0;
                $query3=$this->db->query("Select * from groupeEtudiant where id_etude='$etude' and etat='valide';");
                foreach ($query3->result() as $row3) 
                {
                    $var++;
                    
                }
                
         return $var;
    }
    function not_exist($Etu,$mail,$Etude)
    {
        $query1=$this->db->query("Select * from etudiant where mail='".$mail."' and nom='".$Etu."';");
        $row1 = $query1->row_array(); 
        if ($query1->num_rows() != 0)
        {
            $id_etudiant=$row1['id'];
            $query2=$this->db->query("Select * from etude where nom='".$Etude."';");
            $row2 = $query2->row_array();
            
            if ($query2->num_rows() != 0)
            {
                $id_etude=$row2['id_etude'];
                $query3=$this->db->query("Select * from groupeEtudiant where id_etude='".$id_etude."' and id_etudiant='".$id_etudiant."';");
                $row3 = $query3->row_array();
                if ($query3->num_rows() == 0)
                {

                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }  
        else
        {
            return false;
        }
        
    }
    function valider($Etu,$mail,$Etude,$statut)
    {
        $id_etudiant=' ';
        $id_etude=' ';
        
        $query1=$this->db->query("SELECT * FROM etudiant WHERE mail= '".$mail."' AND nom='".$Etu."';");
        $row1 = $query1->row_array(); 
        if ($query1->num_rows() != 0)
        {
            $id_etudiant=$row1['id'];
            $query2=$this->db->query("Select * from etude where id_etude='".$Etude."';");
            $row2 = $query2->row_array();
            if ($query2->num_rows() != 0)
            {
                $id_etude=$row2['id_etude'];
                $data = array('etat' => 'valide','statut'=>$statut);
                $this->db->where('id_etudiant',$id_etudiant);
                $this->db->where('id_etude',$id_etude);
                $this->db->update('groupeEtudiant', $data); 
                return true;
            }
            else
            {
                return false;
            }
            
        }
        else
        {
            return false;
        }
        
        
    }
            
    function insert($Etu,$mail,$Etude)
    {
        $id_etudiant=' ';
        $id_etude=' ';
        
        $query1=$this->db->query("SELECT * FROM etudiant WHERE mail= '".$mail."' AND nom='".$Etu."';");
        $row1 = $query1->row_array(); 
        if ($query1->num_rows() != 0)
        {
            $id_etudiant=$row1['id'];
        }
        else
        {
            return false;
        }
        $query2=$this->db->query("Select * from etude where nom='".$Etude."';");
        $row2 = $query2->row_array();
        if ($query2->num_rows() != 0)
        {
            $id_etude=$row2['id_etude'];
        }
        else
        {
            return false;
        }
        $query3=$this->db->query("Select * from groupeEtudiant where id_etude='".$id_etude."' and id_etudiant='".$id_etudiant."';");
        $row3 = $query3->row_array();
        if ($query3->num_rows() == 0)
        {
            $newUser = array
            (
            'id_etude'=>$id_etude,
            'id_etudiant'=>$id_etudiant,
            'etat'=>'non valide',
            'statut'=>' ',
            );
            //Insert
            $this->db->insert('groupeEtudiant', $newUser); 
            return true;
        }
        else
        {
            return false;
        }
        
        
    }
}
?>
