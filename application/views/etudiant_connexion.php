<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">Connexion</li>
    </ul>
    <h1>Etudiant <small> Connexion</small></h1>
    <p>Déja inscrit ?</p>
    <form class="form-inline">
        <input type="text" class="input-small" placeholder="Email"></br>
        <input type="password" class="input-small" placeholder="Password"></br>
        
        <?php 
        //<button type="submit" class="btn">Sign in</button></br>
        echo form_submit("connexionEtu","Enregistrer")."</br>";
        ?>
    </form>
    </div>
 </div>
<div class="hero-unit">
     <h3>Nouvelle inscription !</h3>
     <a class="btn" href="<?php echo base_url('Etudiants/inscription') ?>">Join Us</a>
 </div>
<?php
    $this->load->view('footer');
?>
