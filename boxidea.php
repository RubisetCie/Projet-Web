<!DOCTYPE html>
<!-- Informations d'en-tête -->

<head>
    <title>Boîte à idées</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/ideabox.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>

    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Propositions d'activités">
    <meta name="keywords" content="CESI,BDE,Boîte,Propositions,Idée,Idées,Club">
    <meta name="author" content="Salim ZEMRI">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <?php
            require("./res/header.php");
        ?>
    </header>

    <main>
        <section>
            <?php
                    try
                    {
                        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                        if (!isset($GLOBALS["pdo"]))
                        {
                            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                        }

                        // On récupère les données et on les affiche:
                        $res = $GLOBALS["pdo"]->query("SELECT * FROM ideas ORDER BY idea_id");

                        // On affiche les activités :
                        $table = $res->fetch(PDO::FETCH_ASSOC);
                        
                        while ($table)
                        {
                            echo "<div class='row'>
                                    
                                    <div class='card bg-light'>" . 
                                        $table["idea_title"] . "<br>" . $table["idea_description"] .
                                    "</div>
                                 </div>";
                            
                            $table = $res->fetch(PDO::FETCH_ASSOC);
                        }
                    }
                    catch (PDOException $e)
                    {
                        echo $e->getMessage();
                    }
                ?>
        </section>

        <aside>
            <h3>Proposez votre idée</h3>

            <textarea rows="15" cols="50"></textarea>
            
        </aside>
