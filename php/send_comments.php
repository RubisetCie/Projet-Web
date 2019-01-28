<?php
    try
    {
        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
        if (!isset($GLOBALS["pdo"]))
        {
            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }

        
        // On entre les nouvelles données dans la table :
        $commentaire = filter_input(INPUT_POST, "commentaire");
        
        $GLOBALS["pdo"]->exec("INSERT INTO comments(comment_text) VALUES ('$commentaire')");
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    

    header("Location: ../events.php");
?>