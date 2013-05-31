<?php
    $this->load->view('template');
    $this->load->view('navbar');
    ?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Admins') ?>">Admin</a> <span class="divider">/</span></li>
        <li class="active">Frais en attentes</li>
    </ul>
    <h2> Admins <small> liste des frais</small></h2>
    
    </div>
 </div>
 <div class="hero-unit">
     <table class="table">
            <?php
            $li=$this->frais->liste();
            foreach ($li as $row)
            { 
               $etude = $this->modele_etude->getNom($row->id_etude);
               $etude = str_replace('_',' ',$etude);
               $etudiant =$this->modele_etudiant->getNom($row->id_etudiant);
               echo "<tr>"; 
               echo "<td>".$etude."</td>";
               echo "<td>".$etudiant."</td>";
               echo "<td>".$row->montant."</td>";
               echo "<td>".$row->type."</td>";
               echo "<td>".$row->date."</td>";
               echo "<td>".$row->etat."</td>"; 
               echo '<td>';
               echo "<a href='".base_url('Admins/frais/'.$row->id_frais) ."' class='btn btn-small enabled'>valider</a>";
               echo"</td>";
               echo "</tr>";
            }
            ?>
    </table> 
 </div>

<?php
    $this->load->view('footer');
?>
