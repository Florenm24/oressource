<?php session_start(); ?>
<?php
    if (isset($_SESSION['id']) AND (strpos($_SESSION['niveau'], 'bi') !== false))
      {  include "tete.php" ?>
   
        <h1>need help? call me!</h1> 
         


<?php include "pied.php" ?>
<?php }
    else
    header('Location: ../') ;
?>
       
      