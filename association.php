<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Description d'une association</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/static.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
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
                    $query = $GLOBALS["pdo"]->prepare("SELECT * FROM activities WHERE activity_name = :activity");
                    $query->bindValue(":activity", filter_input(INPUT_GET, "activity", FILTER_SANITIZE_URL), PDO::PARAM_STR);
                    $query->execute();
                    
                    $table = $query->fetch();
                    
                    echo "<h1 class='titre-association'>" . $table["activity_name"] . "</h1>
                          <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt='" . $table["activity_name"] . "'>
                          <p>" . $table["activity_description"] . "</p>";
                }
                catch (PDOException $e)
                {
                    echo $e->getMessage();
                }
            ?>

            <button class='btn btn-success btn-inscription' type='button' >Inscription</button>
        </div>

    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
