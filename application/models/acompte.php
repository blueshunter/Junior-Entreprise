<?php
 Class Acompte extends CI_Model
 {
     function __construct()
     {
         parent::__construct();
     }
     function getNbAcompte($id_etude,$id_etudiant)
     {
        $query = $this->db->query("Select * from acompte where id_etudiant='$id_etudiant' and id_etude='$id_etude' order by id_acompte desc");
        //$row = $query->row_array(); 
        $var=0;
        foreach($query->result() as $Myrow)
        {
            $var= $var + 1;
        }
        return $var;
     }
    function valider($id)
    {
            $data = array('etat' => 'remboursee');
            $this->db->where('id_acompte',$id);
            $this->db->update('acompte', $data); 
    }
     
     function Liste()
     {
         $query = $this->db->query("select * from acompte where etat='non remboursee';");
         return $query->result();
     }
     
     function getTotalAcompte($id_etude,$id_etudiant)
     {
        $total=0;
        $query = $this->db->query("Select * from acompte where id_etudiant='$id_etudiant' and id_etude='$id_etude'");
        foreach ($query->result() as $row)
        {
            $total=$total+$row->montant;
        }
        return $total;
     }
     
     function getAllByEtude($id_etude)
     {
        $query = $this->db->query("Select * from acompte where id_acompte='$id_etude'"); 
        return $query->result();
        
     }
     function insert($id_etude,$id_etudiant,$montant)
     {
         
         $query = $this->db->query("Select * from acompte order by id_acompte desc");
        $row = $query->row_array(); 
        if ($query->num_rows() == 0)
        {
            $inc=1;
        }
        else
        {
            $inc=$row['id_acompte'] +1;
}
        $newUser = array
            (
            'id_acompte'=>$inc,
            'id_etudiant'=>$id_etudiant,
            'id_etude'=>$id_etude,
            'montant'=>$montant,
            'etat'=>'non remboursee'
            );
            //Insert
            $this->db->insert('acompte', $newUser); 
     }
 }
?>
