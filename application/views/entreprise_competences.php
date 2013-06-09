<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Entreprises/projets') ?>">Entreprise</a> <span class="divider">/</span></li>
        <li class="active">Compétences</li>
    </ul>
    <h1>Entreprise <small> Compétences</small></h1>
    

        <article>
            <p>La Junior entreprise est une société à forte valeur ajoutée dont le but est d'allier les points
          forts des entreprises avec des projets novateurs, avec des étudiants motivés et désireux d'intégrer
          et d'apporter leurs connaisances et leur savoir-faire sur des études dans le domaine de l'informatique.</p>
          Notre rôle est de répondre a vos besoins que vous soyez étudiant, ou auto-entrepreneur, ou multi-nationales.
          <p>Nous sommes fort de notre experience dans le conseil en développement de logiciels, progiciels, en télecomunication et réseau.</p>
          <p>Notre société est implanté a proximité du campus de la Doua depuis 5 ans et réunis de nombreux acteurs
          du développement Web et Mobile dans la région rhône-alpes.</p>
          
        </article>
    
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
