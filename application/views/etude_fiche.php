<?php
    $this->load->view('template');
    $this->load->view('navbar');
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

        if($this->session->userdata('type')=='etu'&&$this->session->userdata('logged_in')==TRUE&&$row->etat=='valide')
        {
            $query2 = $this->db->query("SELECT * FROM groupeEtudiant  where id_etude= '$row->id_etude';");
               $row2 = $query2->row_array(); 
                if ($query2->num_rows()>=0) // =0 ?  => un etudiant!
                {
                    echo form_open('Etudiants/candidature/'.$this->session->userdata('nom').'/'.$this->session->userdata('mail').'/'.$nom);
                     echo'<form class="form-inline">';
                    echo form_submit("candidatureEtude","candidater");    
                } 
              
        }

        
        ?>
        
    </div>
    <div class="hero-unit">
        <h3>Etudiants</h3>
        <ul>
            <?php
            $var=0;
                $query3=$this->db->query("Select * from groupeEtudiant JOIN etudiant JOIN etude where groupeEtudiant.id_etudiant=etudiant.id and groupeEtudiant.id_etude=etude.id_etude  and etude.nom='$nom' and groupeEtudiant.etat='valide';");
                foreach ($query3->result() as $row3) 
                {
                    $var++;
                    $query4=$this->db->query("Select * from etudiant where id='$row3->id_etudiant';");
                    $row4 = $query4->row_array(); 
                    if ($query4->num_rows() != 0)
                    {
                        echo "<li><a href=".base_url('Etudiants/fiche/'.$row4['nom'].'/'.$row4['mail']).">".str_replace('_', ' ',$row4['nom'])."</a></li>";
                    }
                    
                }
            ?>
        </ul>
        <?php
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$row->etat!='non valide')
        {
            echo "<p>listes des candidatures</p>" ;
            $this->modele_groupe->liste();
          
        }
        ?>
    </div>
    <div class="hero-unit">
           <h3>Convention</h3>
           
           <?php
           if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$row->etat=='valide')
           {

                echo'<a  href='.base_url('Admins/convention/'.$var.'/'.$row->id_etude.'').'>editer la convention</a>';
              
           }
           if($this->session->userdata('type')=='etu'||$this->session->userdata('type')=='ent'&&$this->session->userdata('logged_in')==TRUE&&$row->etat=='valide')
           {

                echo'<p>convention non éditée</p>';
              
           }
           
           if($this->session->userdata('logged_in')==TRUE&&$row->etat=='en cours')
           {

                echo'<a  href='.base_url('Etudes/convention/'.$row->id_etude.'').'>afficher la convention</a>';
              
           }
           ?>
     </div>
    <div class="hero-unit">
        <h3>Facture</h3>
        <p>Etat : non éditée</p>
    </div>

<?php
    $this->load->view('footer');
?>
