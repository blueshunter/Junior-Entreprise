<?php
    $this->load->view('template');
    $this->load->view('navbar');


//Traitement des données du formulaire
$query = $this->db->query("Select * from etudiant order by id desc");
$row = $query->row_array(); 
if ($query->num_rows() == 0)
{
    $inc=1;
}
else
{
    $inc=$row['id'] +1;
}



//Récupération des variables post
if(isset($_POST['add_folder']))
{
    $newUser = array(

    'id'=>$inc,
    'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
    'mdp'=>sha1($_POST['mdp']),
    'mail'=>$_POST['mail'],
    'tel'=>$_POST['tel'],
    'domaine'=>$_POST['domaine'],
    'date_naiss'=>$_POST['date_naiss']


    );
    //Insert
    $this->db->insert('etudiant', $newUser); 

    echo '<p>Enregistrement inséré</p>';
}
                
echo "<p>".anchor('etudiants','retour')."</p>"; 


$this->load->view('footer');
?>
