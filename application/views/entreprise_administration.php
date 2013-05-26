<?php
    $this->load->view('template');
    $this->load->view('navbar');
    $this->load->model('modele_etude');
    ?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Entreprises/projets') ?>">Entreprise</a> <span class="divider">/</span></li>
        <li class="active">Administration</li>
    </ul>
    <h2><?php echo str_replace('_', ' ',$this->session->userdata('nom'))?> <small> infos</small></h2>
    
    </div>
 </div>
 <div class="hero-unit">
    
        <?php
        $row=$this->modeleEntreprise->getAll($this->session->userdata('nom'));
        echo "<ul>";
        echo "<li><strong>nom</strong>    : ".$row->nom."</li>";
        echo "<li><strong>prenom</strong> :".$row->adresse."</li>";
        echo "<li><strong>tel</strong>    :".$row->tel."</li>";
        echo "<li><strong>e-mail</strong> :".$row->mail."</li>";
        echo "<li><strong>domaine</strong>:".$row->domaine."</li>";
        echo "</ul></br>";
        ?>

        <a href="<?php echo base_url('Welcome/index') ?>">modifier le profil</a>

        
    </div>
    <div class="hero-unit">
        <a href="<?php echo base_url('Etudes/nouvelleEtude') ?>"><h3>nouvelle étude<h3></a>
    </div>
    <div class="hero-unit">
        <h3>Mes études</h3>
        <ul>
            <?php
                $query = $this->db->query("SELECT * FROM etude;");
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
