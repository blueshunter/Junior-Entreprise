<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Entreprises/projets') ?>">Entreprise</a> <span class="divider">/</span></li>
        <li class="active">Inscription</li>
    </ul>
    <h1>Entreprise <small> Inscription</small></h1>
    <p>Déja inscrit ?</p>
    <?php echo form_open('Entreprises/inscription'); ?>
    <form class="form-inline">
        <input type="text" class="input-small" name="nom" placeholder="nom"></br>
        <input type="text" class="input-small" name="mail" placeholder="Email"></br>
        <input type="password" class="input-small" name="mdp" placeholder="Password"></br>
        <input type="text" class="input-small" name="adresse" placeholder="adresse"></br>
        <input type="text" class="input-small" name="tel" placeholder="telephone"></br>
        <select name="domaine" placeholder="dommaine">
            <option>developpement Web</option>
            <option>developpement mobile</option>
            <option>developpement logiciel</option>
            <option>Réseau et Telecom</option>
            <option>Management</option>
        </select></br>
        <?php echo form_submit("inscriptionEntreprise","envoyer"); ?>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
