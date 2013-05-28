<?php
$this->load->view('template');
if($print=="off")
{  
    $this->load->view('navbar');
}
    
    
    $query = $this->db->query
            ("
                   select * from groupeEtudiant join etude join entrprise
                   where groupeEtudiant.id_etude=etude.id_etude
                   and etude.id_entrprise=entrprise.id
                   and etude.id_etude='$id';
            ");
    
    $query2 = $this->db->query
            ("
                   select * from etude                    
                   where etude.id_etude='$id';
            ");
    
    
    $row2 = $query2->row_array(); 
    if ($query2->num_rows() != 0)
    {
        $nom_etude=$row2['nom']; //on recup nom de l'etude
    }
    

            
    $row = $query->row_array(); 
    if ($query->num_rows() != 0)
    {
        $id_convention=$row['id_etude'];
        $date_debut=$row['date_debut'];
        $nom_entreprise=$row['nom'];
        $adresse=$row['adresse'];
        $duree=$row['duree'];
        $tel=$row['tel'];
        $prix=$row['prix'];

       
    }
    
    
    ?>


<div class="hero-unit">
    
    <h2> Fiche Convention <small> <?php echo str_replace('_', ' ',$nom_etude)?></small></h2>
    <ul>
        <li>n° convention : <?php echo $id_convention ?></li>
        <li>nom de l'étude:<?php echo $nom_etude ?></li>
        <li>date :<?php echo $date_debut ?></li>
    </ul>
    
    <ul>
        <li>Nom de l'entreprise :<?php echo $nom_entreprise ?></li>
        <li>Adresse de l'entreprise:<?php echo $adresse ?></li>
        <li>Tel de l'entreprise :<?php echo $tel ?></li>
    </ul>
    
    <ul>
        <li>Durée de l'étude:<?php echo $duree ?></li>
        <li>Date fin prévue:<?php echo '';?></li>
        <li>prix/journée: <?php echo $prix?></li>
    </ul>
    
 </div>


 

<?php
    if($print=="off")
    {
        echo form_open('Etudes/convention/'.$id);
        //echo "<form>";
        echo form_submit("print","imprimer");
        //echo "</form>";
        $this->load->view('footer');
    }
    else
    {
        ?>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.9.1.js') ?>"></script>
        
       <script >window.print()
           
        </script>
        <?php
    }
 ?>


