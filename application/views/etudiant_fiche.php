<?php
    $this->load->view('template');
    $this->load->view('navbar');
    $this->load->model('modele_etude');
    ?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Etudiant</li>
    </ul>
    <h2> Etudiant <small> <?php echo str_replace('_', ' ',$nom)?></small></h2>
    
    </div>
 </div>
 <div class="hero-unit">
    
        <?php
        $row=$this->modele_etudiant->getAll($nom,$mail);
        echo "<ul>";
        echo "<li><strong>nom</strong>    : ".$row->nom."</li>";
        echo "<li><strong>prenom</strong> :".$row->prenom."</li>";
        echo "<li><strong>tel</strong>    :".$row->tel."</li>";
        echo "<li><strong>e-mail</strong> :".$row->mail."</li>";
        echo "<li><strong>domaine</strong>:".$row->domaine."</li>";
        echo "<li><strong>date de naissance</strong> ".$row->date_naiss."</li>";
        echo "</ul></br>";
        
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$row->etat=='non valide')
        {
                          
            echo form_open('Admins/validationEtudiant/'.$nom.'/'.$mail);
            echo'<form class="form-inline">';
            echo form_submit("validationEtudiant","valider");          
        }
        ?>
        
    </div>

<?php
    $this->load->view('footer');
?>
