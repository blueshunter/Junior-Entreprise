<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiant/projets') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">Inscription</li>
    </ul>
    <h1>Etudiant <small> Inscription</small></h1>
    <p>Déja inscrit ?</p>
    <form class="form-inline">
        <input type="text" class="input-small" placeholder="Email"></br>
        <input type="password" class="input-small" placeholder="Password"></br>
        <button type="submit" class="btn">Sign in</button></br>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
