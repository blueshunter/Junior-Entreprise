<?php
    $this->load->view('template');
    $this->load->view('navbar');
    $this->load->model('modele_etude');
    ?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Etude</li>
    </ul>
    <h2> Etude <small> <?php echo str_replace('_', ' ',$nom)?></small></h2>
    
    </div>
 </div>
 <div class="hero-unit">
    
        <?php
        $row=$this->modele_etude->getAll($nom);
        echo "<ul>";
        echo "<li><strong>etat</strong>    : ".$row->etat."</li>";
        echo "<li><strong>date</strong>    : ".$row->date_debut."</li>";
        echo "<li><strong>duree</strong> :".$row->duree."</li>";
        echo "<li><strong>domaine</strong>    :".$row->domaine."</li>";
        echo "<li><strong>description</strong> :</br><article>".$row->description."</article></li>";
        echo "</ul></br>";
        
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$row->etat=='non valide')
        {
                          
            echo form_open('Admins/validationEtude/'.$nom);
            echo'<form class="form-inline">';
            echo form_submit("validationEtude","valider l'étude");          
        }
        ?>
        
    </div>
    <div class="hero-unit">
        <h3>Etudiants</h3>
        <ul>
            <li>.</li>
            <li>..</li>
            <li>...</li>
        </ul>
    </div>
    <div class="hero-unit">
        <h3>Facture</h3>
        <p>Etat : non éditée</p>
    </div>

<?php
    $this->load->view('footer');
?>
