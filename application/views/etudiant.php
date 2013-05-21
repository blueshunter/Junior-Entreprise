<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
  <li class="active">Etudiant</li>
</ul>




<?php
    $this->load->view('footer');
?>
