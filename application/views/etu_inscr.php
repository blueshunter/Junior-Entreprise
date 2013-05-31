<?php
    $this->load->view('template');
    $this->load->view('navbar');
   
?>

            <script>
                $(function() 
                {
                    $( "#datepicker" ).datepicker();
                });
            </script>

<div class="hero-unit">
    
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('Welcome/index') ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url('Etudiants') ?>">Etudiant</a> <span class="divider">/</span></li>
        <li class="active">Inscription</li>
    </ul>  
    <h1>Etudiant <small> Inscription</small></h1>
    <p>Déja inscrit ?</p>
    <?php //echo form_open('Etudiants/inscription'); ?>
    <form>
        <input type="text" class="input-small" name="mail" placeholder="mail"></br>
        <input type="password" class="input-small" name="mdp" placeholder="mot de passe"></br>
        <input type="text" class="input-small" name="nom" placeholder="nom"></br>
        <input type="text" class="input-small" name="prenom" placeholder="prenom"></br>
        <input type="text" id="datepicker" name="date_naiss"></br>
            
 
        <input type="text" class="input-small" name="tel" placeholder="tel"></br>
        <select name="domaine" placeholder="dommaine">
            <option>developpement Web</option>
            <option>developpement mobile</option>
            <option>developpement logiciel</option>
            <option>Réseau et Telecom</option>
            <option>Management</option>
        </select></br>
        
        <?php 
        //<button type="submit" value="Submit"   class="btn">Sign in</button></br>
      //  echo form_submit("add_folder","Enregistrer")."</br>";
        ?>
    </form>
    </div>
 </div>

<?php
    $this->load->view('footer');
?>
