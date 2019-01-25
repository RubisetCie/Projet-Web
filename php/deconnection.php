<!-- 
  -- Rôle     : Permet à un utilisateur de se déconnecter
  -- Auteur   : Matthieu CARTERON
  -- Date     : 25/01/2019
  -->

<?php
    // On détruit la session :
    session_start();
    session_destroy();
    
    header("Location: ../index.php");
?>