<?php
    $this->load->view('template');
    $this->load->view('navbar');


//Traitement des données du formulaire
$query = $this->db->query("Select * from etude order by id_etude desc");
$row = $query->row_array(); 
if ($query->num_rows() == 0)
{
    $inc=1;
}
else
{
    $inc=$row['id_etude'] +1;
}

    $query2 = $this->db->query('Select * from entrprise where mail="'.$this->session->userdata("mail").'";');
    $row2 = $query2->row_array(); 
    if ($query2->num_rows() == 0)
    {
        $id_ent=$row2['id'];
    } 
    $nom = str_replace('\'', ' ',$_POST['nom']);
    $nom = str_replace(' ', '_',$nom);
    $nom = str_replace('é', 'e',$nom);
    $nom = str_replace('à', 'a',$nom);
    $nom = str_replace('è', 'e',$nom);
    $nom = str_replace('ê', 'e',$nom);
    $nom = str_replace('â', 'a',$nom);
    $nom = str_replace('ô', 'o',$nom);
    $nom = str_replace('î', 'i',$nom);


    $nouvelleETude = array(

    'id_etude'=>$inc,
    'id_entrprise'=>"".$row2['id']."",
    'date_debut'=>$_POST['date'],   
    'duree'=>$_POST['duree'],
    'nom'=>$nom,
    'description'=>$_POST['description'],
    'domaine'=>$_POST['domaine'],
    'etat'=>"non valide",
    'prix'=>$_POST['prix']
    );  


    //Insert
    $this->db->insert('etude', $nouvelleETude); 

    echo '<p>nouvelle etude envoyée</p>';

                
echo "<p>".anchor('Entreprises','retour')."</p>"; 


$this->load->view('footer');
?>
