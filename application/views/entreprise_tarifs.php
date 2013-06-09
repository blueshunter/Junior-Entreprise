<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Entreprises/projets') ?>">Entreprise</a> <span class="divider">/</span></li>
        <li class="active">Tarifs</li>
    </ul>
    <h1>Entreprise <small> Tarifs</small></h1>
    

        <article>
           <p>Les contrats réalisés avec vous prennent en considération la gestion des étudiants
           tout au cours de l'étude ainsi que nos conseils dans la réalistion des projets.
           Chaque étude possèdes ses propres spécificités et sont discutés pendant premières
           réunions d'avancement.
           </p>
           <p>
               tarifs standards
               <table class='table'>                 
                   <tr>
                    <td>Type   </td>
                    <td>nombre de jours   </td>
                    <td>etudiants   </td>
                    <td>but lucratif   </td>
                    <td>complexité   </td>
                    <td>ordre de prix  </td>
                   </tr>
                   <tr>
                    <td>développement</td>
                    <td>10-30 </td>
                    <td>3-5</td>
                    <td>non</td>
                    <td>faible</td>
                    <td>300 -1000 HT</td>
                   </tr>
                   <tr>
                    <td>développement</td>
                    <td>30-90</td>
                    <td>3-5</td>
                    <td>non</td>
                    <td>faible</td>
                    <td>500 - 1500 HT</td>
                   </tr>
                   <tr>
                    <td>développement</td>
                    <td>10-30</td>
                    <td>5-10</td>
                    <td>non</td>
                    <td>faible</td>
                    <td>1500 - 4000 HT</td>
                   </tr>
                   
                   <td>développement</td>
                    <td>30-90</td>
                    <td>5-10</td>
                    <td>non</td>
                    <td>faible</td>
                    <td>2500 - 5000 HT</td>
                   </tr>
                   
                   <tr>
                    <td>développement</td>
                    <td>10-30 </td>
                    <td>5-10</td>
                    <td>oui</td>
                    <td>moyen</td>
                    <td>5000 - 7000 HT</td>
                   </tr>
               </table>
           </p>
           
           
        </article>
    
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
