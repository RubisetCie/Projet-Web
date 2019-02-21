<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Liste des événements</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/associations.css">
    <link rel="icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Contient la liste des associations du CESI BDE.">
    <meta name="keywords" content="CESI,BDE,Associations,Clubs,Liste">
    <meta name="author" content="Killian DEROCHE">
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
        <h1 id="titre_associations"> Liste des évènements</h1></br>  
        <div class="container">
            <div class="row">
                <?php
                    try
                    {
                        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                        if (!isset($GLOBALS["pdo"]))
                        {
                            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                        }

                        // On récupère les données :
                        $res = $GLOBALS["pdo"]->query("SELECT * FROM manifestations ORDER BY manifestation_title");

                        // On affiche les activités :
                        $table = $res->fetch(PDO::FETCH_ASSOC);

                        while ($table)
                        {
                            echo "<div class='col-md-4'>
                                    <div class='card bg-light'>
                                        <img class='card-img-top' src='./res/img/events/" . $table["manifestation_picture"] . "' alt=" . $table["manifestation_title"] . ">
                                        <div class='card-body'>
                                            <h5 class='card-title border-bottom pb-3'>" . $table["manifestation_title"] . "</h5>
                                            <p class='card-text'>" . $table["manifestation_description"] . "</p>
                                            <a href='./event?ev=" . $table["manifestation_id"] . "' class='btn btn-sm btn-info float-right'>Lire plus</a>
                                        </div>
                                    </div>
                                 </div>";

                            $table = $res->fetch(PDO::FETCH_ASSOC);
                        }
                    }
                    catch (PDOException $e)
                    {
                        echo $e->getMessage();
                    }
                ?>
            </div>
        </div>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>