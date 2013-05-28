<?php
    $this->load->view('template');
    $this->load->view('navbar');



    echo '<p>le nombre des étudiant doit être superieur à 3</p>';   

                
echo "<p>".anchor('Admins','retour')."</p>"; 


$this->load->view('footer');
?>
