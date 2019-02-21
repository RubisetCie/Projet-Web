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
        $query = $GLOBALS["pdo"]->prepare("SELECT * FROM products WHERE product_id = :id");
        $query->bindValue(":id", filter_input(INPUT_GET, "id", FILTER_SANITIZE_URL), PDO::PARAM_INT);
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
    <title><?php echo $table["product_name"]; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/article.css">
    <link rel="icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>

    <!-- Balises META -->
    <meta charset="utf-8">
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
        <article>
            <header>
                <h1 class="titre"><?php echo $table["product_name"]; ?></h1>
                <br />
                <br />
                <h2 class="ei">Ei Cesi</h2>
                <br />
                <br />
                <br />
                <br />
                <img class="logo" src="./res/img/logo_cesi.png" alt="Product"/>
                <br />
                <br />
            </header>

            <section id="image-gallery">
                <figure>
                    <figcaption class="legende"><?php echo $table["product_description"]; ?></figcaption>
                </figure>

                <div id="thumbnails">
                    <img class="pull" src="./res/img/products/<?php echo $table["product_picture"]; ?>" alt="Produit image" />
                    <br />
                    <br />
                    <div class="price"><?php echo $table["product_price"]; ?> &euro;</div>
                    <br />
                    <div class="promo"></div>
                </div>
            </section>

            <section id="characteristics">
                <br />
                <h2 class="cara1">Stock</h2>

                <ul class="stock">
                    <h6><?php echo $table["product_stock"]; ?></h6>
                </ul>

            </section>
            <br/>
            <br/>
            <br/>
            <br/>

            <input class="favorite styled" type="button" value="Acheter">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </article>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>

        