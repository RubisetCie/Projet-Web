<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>CESI BDE Accueil</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/home.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Page d'accueil">
    <meta name="keywords" content="CESI,BDE,Accueil">
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
        <h2>Bienvenue sur le site officiel du BDE !</h2>
        <section>
            <article>
            <img class="top img-home img-thumbnail img-responsive" src="./res/img/party.jpg" alt="Party">
            </article>
            <article>
                <img class="img-thumbnail img-home img-responsive" src="./res/img/logo_cesi.png" alt="Image" width="300" height="150">
                <p class="txt">
                    Sur ce site Web, vous pourrez découvrir les innombrables activités du BDE, joindre à des événements et même parcourir notre liste de Goodies !
                </p>
                <a href="https://www.cesi.fr/">Lien CESI</a>
            </article>
        </section>

        <aside>
            <?php
                try
                {
                    // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                    if (!isset($GLOBALS["pdo"]))
                    {
                        $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    }

                    // On récupère les données des meilleures ventes (stock le plus bas) :
                    $res = $GLOBALS["pdo"]->query("SELECT product_id, product_name, product_picture FROM products ORDER BY product_stock ASC LIMIT 2");

                    // On affiche les produits :
                    $table = $res->fetch(PDO::FETCH_ASSOC);
                    
                    while ($table)
                    {
                        echo "<img class='img-thumbnail img-home img-responsive' width=200px src='./res/img/products/" . $table["product_picture"] . "' alt='Topvente'>
                              <a class='a' href='./article?id=" . $table["product_id"] . "'>" . $table["product_name"] . "</a>";
                        
                        $table = $res->fetch(PDO::FETCH_ASSOC);
                    }
                }
                catch (PDOException $e)
                {
                    echo $e->getMessage();
                }
            ?>
        </aside>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
