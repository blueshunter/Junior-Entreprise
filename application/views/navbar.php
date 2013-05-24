<?php 
?>

<div class="navbar">
    <div class ="navbar-inner">
        <a class="brand" href="#">Junior Entreprise </a>
        
     
        <ul class="nav nav-tabs">
            <li class="divider"></li>
            <li class="dropdown">
                <a href="<?php echo base_url('Welcome/index') ?>" title ="lien home"><i class="icon-home"></i></a>
             </li>
             <li class="divider"></li>
             <li class="dropdown">
                <a href="<?php echo base_url('Admins/index') ?>" title ="lien admin"><i class="icon-cog"></i></a>
             </li>
             
             <li class="divider"></li>
             <li class="dropdown">
                <a href="<?php echo base_url('Welcome/deconnexion') ?>" title ="lien admin"><i class="icon-off"></i></a>
             </li>
        
            <li class="divider"></li>
           
            <li class="divider"></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Etudiants/intro') ?>">Etudiant <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/intro') ?>">Introduction</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/dispo') ?>">Vos disponibilités</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/remuneration') ?>">Remuneration</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/connexion') ?>">Connexion</a></li>
                </ul >
            </li>
            <li class="divider"></li>
            <li class="dropdown pull-right"">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Entreprises/index') ?>">Entreprise <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Entreprises/projets') ?>">Vous avez un projet</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Entreprises/competences') ?>">Nos compétence</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Entreprises/tarifs') ?>">Tarifs</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Entreprises/connexion') ?>">Connexion</a></li>
                </ul >
            </li>
            <li class="divider"></li>
            <?php 
                if(($log)==true)
                {
                    echo'<li><a class="dropdown" href="#">bienvenue '.$nom.' </a></li>';
                }
             
            ?>
           
        </ul>
   
    </div>
</div>