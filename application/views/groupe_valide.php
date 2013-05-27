<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Candidature</li>
    </ul>
    <p>l'étudiant à bien été accepté dans l'étude</p>
    <a href="<?php echo base_url('Admins') ?>">retour</a>
 </div>


<?php
    $this->load->view('footer');
?>