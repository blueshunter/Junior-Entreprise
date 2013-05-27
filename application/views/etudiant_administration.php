<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants/index') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">Administration</li>
    </ul>
    <h2><?php echo $this->session->userdata('nom');?> <small> infos</small></h2>
    
        
    </div>
    <div class="hero-unit">
    
        <?php
        $row=$this->modele_etudiant->getAll($this->session->userdata('nom'),$this->session->userdata('mail'));
        echo "<ul>";
        echo "<li><strong>nom</strong>    : ".$row->nom."</li>";
        echo "<li><strong>prenom</strong> :".$row->prenom."</li>";
        echo "<li><strong>tel</strong>    :".$row->tel."</li>";
        echo "<li><strong>e-mail</strong> :".$row->mail."</li>";
        echo "<li><strong>domaine</strong>:".$row->domaine."</li>";
        echo "<li><strong>date de naissance</strong> ".$row->date_naiss."</li>";
        echo "</ul></br>";
        ?>

        <a href="<?php echo base_url('Welcome/index') ?>">modifier le profil</a>

        
    </div>
    <div class="hero-unit">
        <h3>Mes études en cours</h3>
        <ul>
            <?php
            $query = $this->db->query("SELECT * FROM groupeEtudiant JOIN etude where groupeEtudiant.id_etude=etude.id_etude and groupeEtudiant.etat='valide';");
            
            foreach ($query->result() as $row)
            {
               echo "<li><a href=".base_url('Etudes/fiche/'.$row->nom).">".str_replace('_', ' ',$row->nom)."</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="hero-unit">
        <h3>Candidatures - Etudes</h3>
        <ul>
            <?php
            $query = $this->db->query("SELECT * FROM etude where etat='valide';");
            foreach ($query->result() as $row)
            {
               $query2 = $this->db->query("SELECT * FROM groupeEtudiant  where id_etude= '$row->id_etude';");
               $row2 = $query2->row_array(); 
                if ($query2->num_rows() == 0)
                {
                    echo "<li><a href=".base_url('Etudes/fiche/'.$row->nom).">".str_replace('_', ' ',$row->nom)."</a></li>";
                } 
               
            }
            ?>
        </ul> 
    </div>
 </div>
 


<?php
    $this->load->view('footer');
?>
