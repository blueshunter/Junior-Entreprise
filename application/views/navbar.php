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
            <?php 
            
             if($this->session->userdata('logged_in')&&$this->session->userdata('type')=='admin')
             {
               
                    $this->load->view('navBarAdmin');
             }
             else
             {
                 $this->load->view('navBarUser');
             }
             ?>
            <li class="divider"></li>


            <?php 
                if($this->session->userdata('logged_in')&&($this->session->userdata('type')=='etu'||$this->session->userdata('type')=='ent'))
                {
                    if($this->session->userdata('type')=='etu')
                    {
                        echo'<li><a class="dropdown" href='.base_url('Etudiants/administration').'>bienvenue '.str_replace('_', ' ',$this->session->userdata('nom')).' </a></li>';
                    }
                    else
                    {
                        echo'<li><a class="dropdown" href='.base_url('Entreprises/administration').'>bienvenue '.str_replace('_', ' ',$this->session->userdata('nom')).' </a></li>';
                    }
                    
                }
             
            ?>
           
        </ul>
   
    </div>
  
</div>
