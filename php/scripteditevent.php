<?php
    try
    {
        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
        if (!isset($GLOBALS["pdo"]))
        {
            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }

        $event_name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $event_description = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_SPECIAL_CHARS);
        $event_picture = filter_input(INPUT_POST, "pic", FILTER_SANITIZE_URL);
        $event_ponctuel = filter_input(INPUT_POST, "ponctuel", FILTER_SANITIZE_URL);

        session_start();

        // Requête préparée pour empêcher les injections SQL
        $requete = $GLOBALS["pdo"]->prepare("INSERT INTO manifestations (manifestation_title, manifestation_description, manifestation_picture, manifestation_ponctuel, manifestation_publicy, manifestation_iduser) VALUES (:event_name, :event_description, :event_picture, :event_ponctuel, 1, :event_user)");

        $requete->bindValue(":event_name", $event_name, PDO::PARAM_STR);
        $requete->bindValue(":event_description", $event_description, PDO::PARAM_STR);
        $requete->bindValue(":event_picture", $event_picture, PDO::PARAM_STR);
        $requete->bindValue(":event_ponctuel", $event_ponctuel, PDO::PARAM_INT);
        $requete->bindValue(":event_user", $_SESSION["id"], PDO::PARAM_INT);

        $requete->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    header("Location: ../index");
?> 