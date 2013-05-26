            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Etudiants/intro') ?>">Etudiant <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/intro') ?>">Introduction</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/dispo') ?>">Vos disponibilités</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Etudiants/remuneration') ?>">Remuneration</a></li>
                    <li class="divider"></li>
                    <?php 
                    if(($this->session->userdata('logged_in')) && ($this->session->userdata('type')=='etu'))
                    {

                        ?>
                        <li><a tabindex="-1" href="<?php echo base_url('Etudiants/administration') ?>">Administration</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url('Etudiants/deconnexion') ?>">Deconnexion</a></li>
                        <?php 
                    }
                    else
                    {
                        ?>
                        <li><a tabindex="-1" href="<?php echo base_url('Etudiants/connexion') ?>">Connexion</a></li>
                        <?php         
                    }
                    ?>
                   
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
                    <?php 
                    if(($this->session->userdata('logged_in')) && ($this->session->userdata('type')=='ent'))
                    {

                        ?>
                        <li><a tabindex="-1" href="<?php echo base_url('Entreprises/administration') ?>">Administration</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url('Entreprises/deconnexion') ?>">Deconnexion</a></li>
                        <?php 
                    }
                    else
                    {
                        ?>
                        <li><a tabindex="-1" href="<?php echo base_url('Entreprises/connexion') ?>">Connexion</a></li>
                        <?php         
                    }
                    ?>
                </ul >
            </li>