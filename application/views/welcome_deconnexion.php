<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Déconnexion</li>
    </ul>
    <h1>Junior Entreprise <small> déconnexion</small></h1>
    <p>Vous etes bien deconnecté</p>
    
    <?php
        $session_data = array('nom'=>'','type'=>"",'mail'=>"",'logged_in' => "false");
        $this->session->set_userdata($session_data);
        echo "<p>".anchor('Welcome','retour')."</p>"; 
    ?> 
   
 </div>

<?php
    $this->load->view('footer');
?>
