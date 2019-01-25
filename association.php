<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Titre de la page</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/static.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Descritpion de la page">
    <meta name="keywords" content="CESI,BDE">
    <meta name="author" content="Matthieu CARTERON">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <?php
            require("./res/header.html");
        ?>
    </header>

    <main>
        <div class="container">

            <?php
                    try
                    {
                        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                        if (!isset($GLOBALS["pdo"]))
                        {
                            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=10.192.128.186", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                        }

                        // On récupère les données :
                        $res = $GLOBALS["pdo"]->query("SELECT * FROM activities ORDER BY activity_name");

            echo "
            <h1 class='titre-association'>" . $table["activity_name"] . "</h1>

            <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . ">


            <p>" . $table["activity_description"] . "</p>";
            }
                    catch (PDOException $e)
                    {
                        echo $e->getMessage();
                    }
                ?>

            <button class='btn btn-success btn-inscription' type='button' >inscription</button>
        </div>

    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
    
    </footer>
</body>
