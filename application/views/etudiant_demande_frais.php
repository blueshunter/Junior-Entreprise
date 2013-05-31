<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/administration') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">Etude</li>
    </ul>
    <h1>Etudiant <small>fiche de frais</small></h1>
    <p>Déja inscrit ?</p>
    <?php echo form_open('Etudiants/insertFrais/'.$etudiant.'/'.$etude.''); ?>
    <form class="form-inline">
        <input type="text" class="input-small" name="date" placeholder="date"></br>
        <input type="text" class="input-small" name="montant" placeholder="montant"></br>
        <textarea row="5" name="type" placeholder="type de frais"></textarea></br>
        <?php echo form_submit("insert","soumettre"); ?>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
