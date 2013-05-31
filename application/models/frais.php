<?php
 Class Frais extends CI_Model
 {
     function __construct()
     {
         parent::__construct();
     }
     function getNbFrais($id_etude,$id_etudiant)
     {
        $query = $this->db->query("Select * from frais order by id_frais desc");
        $row = $query->row_array(); 
        if ($query->num_rows() == 0)
        {
            return 0;
        } 
        else
        {
            return $row['id_frais'];
        }
     }
     
     function getMontantFrais($id_etude)
     {
         $montant=0;
        $query = $this->db->query("Select * from frais where id_etude='$id_etude' and etat='remboursee'");
        foreach ($query->result_array() as $row)
        {
           $montant=$montant+$row['montant'];
        }
        return $montant;
     }
     function Liste()
     {
         $query = $this->db->query("select * from frais where etat='non rembourse';");
         return $query->result();
     }
     function getAllByEtude($id_etude)
     {
        $query = $this->db->query("Select * from frais where id_acompte='$id_etude'"); 
        return $query->result();
        
     }
     
    function valider($id)
    {
            $data = array('etat' => 'remboursee');
            $this->db->where('id_frais',$id);
            $this->db->update('frais', $data); 
    }
     function insert($id_etude,$id_etudiant,$montant,$type,$date)
     {
         
         $query = $this->db->query("Select * from frais order by id_frais desc");
        $row = $query->row_array(); 
        if ($query->num_rows() == 0)
        {
            $inc=1;
        }
        else
        {
            $inc=$row['id_frais'] +1;
}
        $newUser = array
            (
            'id_frais'=>$inc,
            'id_etudiant'=>$id_etudiant,
            'id_etude'=>$id_etude,
            'montant'=>$montant,
            'type'=>$type,
            'date'=>$date,
            'etat'=>'non remboursee'
            );
            //Insert
            $this->db->insert('frais', $newUser); 
     }
 }
?>
