<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
   <li><a href="<?php echo base_url('Etudiants/index') ?>">Etudiant</a> <span class="divider">/</span></li>
  <li class="active">introduction</li>
</ul>

<h1>Introduction</h1>


<?php
    $this->load->view('footer');
?>
