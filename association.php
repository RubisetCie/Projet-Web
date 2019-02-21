<!DOCTYPE html>
<?php
    try
    {
        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
        if (!isset($GLOBALS["pdo"]))
        {
            $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        
        // On récupère les données :
        $query = $GLOBALS["pdo"]->prepare("SELECT * FROM activities WHERE activity_name = :association");
        $query->bindValue(":association", filter_input(INPUT_GET, "ac", FILTER_SANITIZE_URL), PDO::PARAM_STR);
        $query->execute();
        
        // On récupère les informations sur l'association :
        $table = $query->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
?>

<!-- Informations d'en-tête -->
<head>
    <title><?php echo str_replace("OE", "Œ", $table["activity_name"]) ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/static.css">
    <link rel="stylesheet" type="text/css" href="./style/css/commentary.css">
    <link rel="icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    <script src="./js/uploadfile.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="keywords" content="CESI,BDE">
    <meta name="author" content="Matthieu CARTERON">
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
        <?php
            // On affiche les informations sur l'association :
            echo "<div class='container'>
                  <h1 id='titre-association'>" . str_replace("OE", "Œ", $table["activity_name"]) ."</h1><br>
                  <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "><br>
                  <p>" . $table["activity_description"] . "</p><br>
                  </div>";
        ?>
    </main>
    
    <footer>
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
