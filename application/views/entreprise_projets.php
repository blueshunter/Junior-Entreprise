<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Entreprise</li>
    </ul>
    <h1>Entreprise<small> Vos projets</small></h1>
    

        <article>
            <p>Vous avez un projet innovant, dans le domaine de l'informatique, des multimédia, ou des télécommunication ?
            vous souhaitez faire participer de nouveaux intervenants ?Junior Entreprise est là pour vous!</p>
            <p>Nous nous adaptons a vos besoin et choisissons des étudiant motivés possédant des compétences
            dans les secteurs de l'informatique pour réaliser vos études</p>
            
        </article>
    
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
