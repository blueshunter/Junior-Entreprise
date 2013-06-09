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
        
        echo "<ul>";
        echo "<li><strong>etat</strong>    : ".$infos->etat."</li>";
        echo "<li><strong>date</strong>    : ".$infos->date_debut."</li>";
        echo "<li><strong>duree</strong> :".$infos->duree."</li>";
        echo "<li><strong>domaine</strong>    :".$infos->domaine."</li>";
        echo "<li><strong>description</strong> :</br><article>".$infos->description."</article></li>";
        echo "</ul></br>";
        
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='non valide')
        {
                          
            echo form_open('Admins/validationEtude/'.$nom);
            echo'<form class="form-inline">';
            echo form_submit("validationEtude","valider l'étude");          
        }
        
        if($this->session->userdata('type')=='etu'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='valide')
        {
            
                $data= $this->modele_groupe->getNameById($infos->id_etude);
                if ($data['result']==true) // =0 ?  => un etudiant!
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
            
             $etudiant= $this->modele_etude->studentListByStudy($infos->id_etude);
             foreach ($etudiant as $etu) 
             {
                $data=$this->modele_etudiant->getNameAndMail($etu->id_etudiant);
                echo "<li><a href=".base_url('Etudiants/fiche/'.element('nom',$data).'/'.element('mail',$data)).">".str_replace('_', ' ',element('nom',$data))."</a></li>";
             }
            ?>
        </ul>
        <?php
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat!='non valide')
        {
            echo "<p>listes des candidatures</p>" ;
            $this->modele_groupe->liste();
          
        }
        ?>
    </div>
    <div class="hero-unit">
           <h3>Convention</h3>
           
           <?php
           $var=$this->modele_groupe->getNbEtu($infos->id_etude);
           if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='valide')
           {

                echo'<a  href='.base_url('Admins/convention/'.$var.'/'.$infos->id_etude.'').'>editer la convention</a>';
              
           }
           if(($this->session->userdata('type')=='etu'||$this->session->userdata('type')=='ent')&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='valide')
           {

                echo'<p>convention non éditée</p>';
              
           }
           
           if($this->session->userdata('logged_in')==TRUE&&$infos->etat=='en cours')
           {

                echo'<a  href='.base_url('Etudes/convention/'.$infos->id_etude.'').'>afficher la convention</a>';
              
           }
           ?>
     </div>
    <div class="hero-unit">
        <h3>Facture</h3>
        <?php
        if($this->session->userdata('type')=='admin'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='en cours')
           {

                echo'<a  href='.base_url('Admins/facture/'.$infos->id_etude.'').'>editer la facture</a>';
              
           }
           if($this->session->userdata('type')=='etu'||$this->session->userdata('type')=='ent'&&$this->session->userdata('logged_in')==TRUE&&$infos->etat=='en cours')
           {

                echo'<p>facture non éditée</p>';
              
           }
           
           if($this->session->userdata('logged_in')==TRUE&&$infos->etat=='terminee')
           {

                echo'<a  href='.base_url('Etudes/facture/'.$infos->id_etude.'').'>afficher la facture</a>';
              
           }
           ?>
        
    </div>

<?php
    $this->load->view('footer');
?>
