<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Administration</li>
    </ul>
    <h2><?php echo $this->session->userdata('nom');?> <small> page d'administration</small></h2>
    
    </div>
 </div>
 <div class="hero-unit">

     <ul>
        <li><a href="<?php echo base_url('Admins/liste/1')?>">liste des entreprises inscrites</a></li>
        <li><a href="<?php echo base_url('Admins/liste/2')?>">liste des etudes</a></li>
        <li><a href="<?php echo base_url('Admins/liste/3')?>">liste des étudiants inscrits</a></li>
     </ul>
      
    </div>
    <div class="hero-unit">
        <h3>Etudes en cours de validation</h3>
        <ul>
            <?php
                $query = $this->db->query("SELECT * FROM etude where etat='non valide';");
                foreach ($query->result() as $row)
                {
                   echo "<li><a href=".base_url('Etudes/fiche/'.$row->nom).">".str_replace('_', ' ',$row->nom)."</a></li>";
                }
                
            ?>
    </div>
     <div class="hero-unit">
        <h3>Entreprises en cours de validation</h3>
        <ul>
            <?php
            $query = $this->db->query("SELECT * FROM entrprise where etat='non valide' ;");
            foreach ($query->result() as $row)
            {
               echo "<li><a href=".base_url('Entreprises/fiche/'.$row->nom).">".str_replace('_', ' ',$row->nom)."</a></li>";
            }
            ?>
        </ul> 
    </div>
    <div class="hero-unit">
        <h3>Etudiants en cours de validation</h3>
        <ul>
            <?php
            $query = $this->db->query("SELECT * FROM etudiant where etat='non valide' ;");
            foreach ($query->result() as $row)
            {
               echo "<li><a href=".base_url('Etudiants/fiche/'.$row->nom.'/'.$row->mail).">".str_replace('_', ' ',$row->nom)."</a></li>";
            }
            ?>
        </ul>
    </div>
    

<?php
    $this->load->view('footer');
?>
