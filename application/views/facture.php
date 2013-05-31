<?php
$this->load->view('template');
$this->load->view('navbar');
?>
<div class="hero-unit">
    
    <h2> Facture </h2>
    
    <ul>
        <li>N°FACTURE: <?php echo $facture ?></li>
        <li>N° SIRET: <?php echo $siret ?></li>
        <li>Date facture : <?php echo $date  ?></li>
        <li>Nom Entreprise : <?php echo $entreprise ?></li>
        <li>Adresse Entreprise : <?php echo $adresse ?></li>
        <li>Nom de l'étude : <?php echo str_replace('_',' ',$etude) ?></li>
        <li>Prix de la journee : <?php echo $prix." Euros" ?></li>
    </ul>
    
    <table class="table">
        <tr>
            <td>Nbre jours étude</td>
            <td>coût étude</td>
            <td>frais</td>
            <td>total convention</td>
        </tr>
        <tr>
            <td><?php echo $duree ?></td>
            <td><?php echo $cout ;?></td>
            <td><?php echo  $frais?></td>
            <td><?php echo  $total?></td>
        </tr>
    </table>
    
    
 </div> 
 <?php
$this->load->view('footer');
?>
