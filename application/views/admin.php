<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Admin</li>
    </ul>
    <h1>Administration<small> Formulaire de connexion</small></h1>
    <div class="divider"></div>
    <?php echo form_open("Admins") ?>
    <form class="form-inline">
        <input type="text" class="input-small"  name="login" placeholder="login"></br>
        <input type="password" class="input-small" name="mdp" placeholder="Password"></br>
        <?php echo form_submit("connexionAdmin","enregistrer")?>
    </form> 

    </div>
 </div>


<?php
    $this->load->view('footer');
?>