<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Candidature</li>
    </ul>
    <p>Votre candidature a bien été prise en compte</p>
    <a href="<?php echo base_url('Etudiants/administration') ?>">retour</a>
 </div>


<?php
    $this->load->view('footer');
?>