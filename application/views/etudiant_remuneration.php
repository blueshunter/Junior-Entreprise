<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>



<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/intro') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">remuneration</li>
    </ul>   
    <h1>Etudiants <small> remuneration</small></h1>
    
    <div class="row">
        <div class="span1"></div>
        <div class="span2"></div>
        <div class="span3"></div>
        <article>
            <p>Junior Entreprise se réserve le droit de valider ou refuser les demande de frais et d'accomptes
            resultants de l'étude en accord avec l'entreprise associée.
            </p>
            <p>les remboursement de frais seront versés par la junior Entreprise toutes les fin de mois.La rémuneration
            sera effectuée 10 jours après la date de la fin de l'étude</p>
            <p>Junior Entreprise aide les étudiants a trouver un juste millieu entre travail et études
            et vous autorise à créer des demandes d'accompte
            <small>sous réserve d'un montant inférieur ou égal à 80% de la rémuneration</small></p>
            
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
