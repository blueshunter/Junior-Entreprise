<?php
    $this->load->view('template');
    $this->load->view('navbar');
    $this->load->model('modele_etude');
    ?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Admins') ?>">Admin</a> <span class="divider">/</span></li>
        <li class="active">Etudes</li>
    </ul>
    <h2> Etudes <small> liste complete</small></h2>
    
    </div>
 </div>
 <div class="hero-unit">
     <ul>
            <?php
            $query = $this->db->query("SELECT * FROM etude where etat='$etat' ;");
            foreach ($query->result() as $row)
            {
               echo "<li><a href=".base_url('Etudes/fiche/'.$row->nom).">".str_replace('_', ' ',$row->nom)."</a></li>";
            }
            ?>
    </ul> 
 </div>

<?php
    $this->load->view('footer');
?>
