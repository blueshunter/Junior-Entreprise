<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>



<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/index') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">deconnexion</li>
    </ul>
    <h1>Etudiants<small> Déconnexion</small></h1>
        
    Vous etes bien deconnecté
    
    <?php
        $session_data = array('nom'=>'','type'=>"",'mail'=>"",'logged_in' => "false");
        $this->session->set_userdata($session_data);
        echo "<p>".anchor('etudiants','retour')."</p>"; 
    ?>   
    </div>
 </div>




<?php
    $this->load->view('footer');
?>
