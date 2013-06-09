<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>
<script>
            $(function() 
            {
                $( "#datepicker" ).datepicker();
            });
            </script>

<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Entreprises/projets') ?>">Entreprise</a> <span class="divider">/</span></li>
        <li class="active">Etude</li>
    </ul>
    <h1>Entreprise <small> Nouvelle étude</small></h1>
    <p>Déja inscrit ?</p>
    <?php echo form_open('Etudes/nouvelleEtude'); ?>
    <form class="form-inline">
        <input type="text" class="input-small" name="nom" placeholder="nom"></br>
        <input type="text" class="input-small" name="duree" placeholder="durée(j)"></br>
        <input type="text" class="input-small" name="date" id="datepicker" placeholder="date début"></br>
        <input type="text" class="input-small" name="prix" placeholder="prix/journée"></br>
        <textarea row="5" name="description" placeholder="description"></textarea></br>
        <select name="domaine" placeholder="dommaine">
            <option>developpement Web</option>
            <option>developpement mobile</option>
            <option>developpement logiciel</option>
            <option>Réseau et Telecom</option>
            <option>Management</option>
        </select></br>
        <?php echo form_submit("inscriptionEtude","envoyer"); ?>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
