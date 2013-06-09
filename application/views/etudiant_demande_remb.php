<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>

<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/administration') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">demande de remboursement</li>
    </ul>
    <h1>Etudiant <small> Fiche de remboursement</small></h1>
    <p>Déja inscrit ?</p>
    <?php echo form_open('Etudiants/insertRemboursement/'.$etudiant.'/'.$etude.''); ?>
    <form class="form-inline">

        <input name="montant" placeholder="montant">
        <?php echo form_submit("insert","soumettre"); ?>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
