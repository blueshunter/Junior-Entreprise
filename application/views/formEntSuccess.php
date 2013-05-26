<?php
    $this->load->view('template');
    $this->load->view('navbar');


//Traitement des données du formulaire
$query = $this->db->query("Select * from entrprise order by id desc");
$row = $query->row_array(); 
if ($query->num_rows() == 0)
{
    $inc=1;
}
else
{
    $inc=$row['id'] +1;
}

$nom = str_replace(' ', '_',$_POST['nom']);

//Récupération des variables post
if(isset($_POST["inscriptionEntreprise"]))
{
    $newUser = array(

    'id'=>$inc,
    'nom'=>$nom,
    'mail'=>$_POST['mail'],
    'mdp'=>sha1($_POST['mdp']),
    'tel'=>$_POST['tel'],
    'adresse'=>$_POST['adresse'],
    'domaine'=>$_POST['domaine'],
    'etat'=>"non valide"



    );
    //Insert
    $this->db->insert('entrprise', $newUser); 

    echo '<p>Enregistrement inséré</p>';
}
                
echo "<p>".anchor('Entreprises/administration','retour')."</p>"; 


$this->load->view('footer');
?>
