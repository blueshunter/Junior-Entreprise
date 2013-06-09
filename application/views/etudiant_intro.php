<?php
    $this->load->view('template');
    $this->load->view('navbar');
?>


<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li class="active">Etudiant</li>
    </ul>
    <h1>Etudiants</h1>
    
        <article>
            <p>Vous étudiez informatique, issu d'une formation de type DUT, BTS ou école d'ingénieur en informatique,
            votre place est avec nous ! Soyez forts d'une nouvelle experience enrichissante dans les secteurs de l'informatique
            et des télécomunication avec nos entreprises partenaire de la région rhône-alpes.</p>
            <p>L'inscription a ce programme est gratuite et les études sont rémunérée par convention entre
            vous et l'entreprise.</p>
            <p>Dans l'éventualité de votre inscription, la participation à une étude est très simple:</br>
                <li>vous candidatez à l'étude qui vous interèsse</li>
                <li>Junior Entreprise évalue votre candidature et votre profil</li>
                <li>Si vous êtes accepté, vous intégrez une équipe en tant que participant
                ou responsable du projet.</li>
                <li>Une fois la convention signée, le projet démarre !</li>
            </p>
   
            
           
        </article>
    </div>
 </div>


<?php
    $this->load->view('footer');
?>
