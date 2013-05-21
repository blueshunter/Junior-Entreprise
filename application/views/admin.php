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
    

        <?php
            //inserer le formulaire ici
        ?>
    </div>
 </div>


<?php
    $this->load->view('footer');
?>