<!-- 
  -- Rôle     : Permet à un utilisateur de se connecter
  -- Auteur   : Matthieu CARTERON
  -- Date     : 25/01/2019
  -->

<?php
    try
    {
        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
        if (!isset($GLOBALS["pdo"]))
        {
            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=10.192.128.186", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }

        // On vérifie si l'utilisateur existe :
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = md5(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS));
        
        $test = $GLOBALS["pdo"]->prepare("SELECT * FROM users WHERE user_email = :email AND user_password = :password");
        $test->bindValue(":email", $email, PDO::PARAM_STR);
        $test->bindValue(":password", $password, PDO::PARAM_STR);
        
        $test->execute();
        
        $table = $test->fetch();
        
        if ($test->rowCount() == 0)
        {
            header("Location: ../index.php");
            exit;
        }
        
        // On lance la nouvelle session PHP :
        session_start();
        
        $_SESSION["id"] = $table["user_id"];
        $_SESSION["status"] = $table["user_status"];
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    
    header("Location: ../index.php");
?>