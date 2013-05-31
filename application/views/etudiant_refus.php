<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <p>Votre demande a été refusé :</p>

    <p>dans le cas d'un accompte, celui ci ne doit pas dépasser</br>
        80% de votre rémuneration.Le nombre d'accomptes est limité à 3.
    </p>
    
      <?php echo "<a href=".base_url('Etudiants/administration').">retour</a>";?>
</div>
    

<?php
    $this->load->view('footer');
?>
