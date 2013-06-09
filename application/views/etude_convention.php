<?php
$this->load->view('template');
$this->load->model('modele_groupe');
if($print=="off")
{  
    $this->load->view('navbar');
}       
?>

<div class="hero-unit">
    
    <h2> Fiche Convention <small> <?php echo str_replace('_',' ',$nom_etude);?></small></h2>
    <ul>
        <li>n° convention : <?php echo $id_convention ?></li>
        <li>nom de l'étude:<?php echo str_replace('_',' ',$nom_etude) ?></li>
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
    
    <p>liste des étudiants<p>
    <?php
    
    
        echo '<table class="table">';
        echo '<tr>';
        echo '<td><strong>nom</strong></td>';
        echo '<td><strong>prenom</strong></td>';
        echo '<td><strong>date de naissance</strong></td>';
        echo '<td><strong>mail</strong></td>';
        echo '</tr>';
        
        foreach($students as $etu)
        {
            echo '<tr>';
            echo '<td>'.$etu->nom.'</td>';
            echo '<td>'.$etu->prenom.'</td>';
            echo '<td>'.$etu->date_naiss.'</td>';
            echo '<td>'.$etu->mail.'</td>';
            echo '</tr>';
        }
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
            //redirect(base_url('Etudes/convention/'.$id));
        }
    ?>
    
 </div>



