<!-- 
  -- Rôle     : Permet de créer une entrée dans la liste des utilisateurs
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

        // On vérifie que l'utilisateur n'existe pas déjà :
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
        $test = $GLOBALS["pdo"]->prepare("SELECT * FROM users WHERE user_email = :email");
        $test->bindValue(":email", $email, PDO::PARAM_STR);
        
        $test->execute();
        
        if ($test->rowCount() != 0)
        {
            exit;
        }
        
        // On entre les nouvelles données dans la table :
        $password = md5(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS));
        
        $query = $GLOBALS["pdo"]->prepare("INSERT INTO users(user_firstname, user_lastname, user_location, user_email, user_password VALUES (:firstname, :lastname, :location, :email, :password)");
        $query->bindValue(":firstname", filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR);
        $query->bindValue(":lastname", filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR);
        $query->bindValue(":location", filter_input(INPUT_POST, "location", FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);
        
        $query->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    
    exit;
?>