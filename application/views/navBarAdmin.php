            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Etudiants/intro') ?>">Etudiant <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etudiant/nonValide')?>">inscription en attentes</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etudiant/Valide')?>">Etudiants inscrits</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/acompte/false')?>">acomptes en attentes</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/frais/false')?>">Frais en attentes</a></li>
                    <li class="divider"></li>                   
                </ul >
            </li>
            <li class="divider"></li>
            <li class="dropdown pull-right"">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Entreprises/index') ?>">Entreprise <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/entreprise/nonValide')?>">inscriptions en attentes</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/entreprise/Valide')?>">liste des entreprises</a></li>
                    <li><a tabindex="-1" href="#">Factures</a></li>
                    <li class="divider"></li>
                </ul >
            </li>
            <li class="divider"></li>
            <li class="dropdown pull-right"">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Etudes/index') ?>">Etude <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etude/nonValide')?>">Etudes en attentes</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etude/Valide')?>">Etudes valides</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etude/enCours')?>">Etudes en cours</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('Admins/liste/etude/terminee')?>">Etudes terminées</a></li>
                    <li><a tabindex="-1" href="#">Factures</a></li>
                    <li class="divider"></li>
                </ul >
            </li>