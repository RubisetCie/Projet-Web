<!-- 
  -- Rôle     : Permet à un utilisateur de se déconnecter
  -- Auteur   : Matthieu CARTERON
  -- Date     : 25/01/2019
  -->

<?php
    // On détruit la session :
    session_destroy();
    
    unset($_SESSION["status"]);
    
    header("Location: ../index.php");
?>