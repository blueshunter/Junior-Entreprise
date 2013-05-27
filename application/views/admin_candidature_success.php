<?php
    $this->load->view('template');
    $this->load->view('navbar');



    echo '<p>Enregistrement inséré</p>';

                
echo "<p>".anchor('Admins/administration','retour')."</p>"; 


$this->load->view('footer');
?>
