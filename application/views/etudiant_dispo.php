<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>



<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/index') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">disponibilités</li>
    </ul>
    <h1>Etudiants<small>disponibilités</small></h1>
    
    <div class="row">
        <div class="span1"></div>
        <div class="span2"></div>
        <div class="span3"></div>
        <article>
            <p>Junior Entreprise prends en considération votre emploi du temps et adapte votre temps
            de travail. Lors de l'édition de la convention, le volume horaire de l'étude sera fixé
            avec l'assentiment de toute l'équipe et de l'entreprise partenaire.</p>
            
            <p>Pour cette raison, la durée d'une étude n'est pas calculée en mois hommes mais en nombre de jours
            et plus précisément en heures de travail repartis sur les horaires de l'équipe</p>
            
        </article>
    </div>
    <div class="row">
        <div class="span4></div>
        <div class="span5"></div>
        <div class="span6"></div>
        <article>
            
        </article>
    </div>
    <div class="row">
        <div class="span7"></div>
        <div class="span8"></div>
        <div class="span9"></div>
        <article>
            
        </article>
    </div>
 </div>




<?php
    $this->load->view('footer');
?>
