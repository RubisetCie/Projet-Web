<!DOCTYPE html>
<head>
    <title>Boutique</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/shop.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Descritpion de la page">
    <meta name="keywords" content="CESI,BDE,Boutique,Goodies">
    <meta name="author" content="Mohamed OUMID">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <?php
            require("./res/header.html");
        ?>
    </header>

    <section class="container main-page main-page-pad">
        <div class="shop row">
            <section class="col-12 col-lg-8">
                <div class="shop-section">
                    <h2 class="shop-jumbotron-title">Bienvenue</h2>
                    <h3 class="widget-offset shop-jumbotron-lead">Dans la boutique de goodies du BDE !</h3>
                    <form class="row shop-search-form">
                        <input type="text" placeholder="Rechercher un article" class="form-control col-11" />
                        <button class="button button-invisible col-1">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    
                    <div id="topvente" class="shop-carousel carousel slide" data-ride="carousel">
                        <!-- Indicateurs -->
                        <ul class="carousel-indicators">
                            <li data-target="#topvente" data-slide-to="0" class="active"></li>
                            <li data-target="#topvente" data-slide-to="1"></li>
                            <li data-target="#topvente" data-slide-to="2"></li>
                        </ul>

                        <!-- Les images -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="./res/img/2.jpg" align="center" alt="Top Vente 1">
                                <div class="carousel-caption">
                                    <h3>Article 1</h3>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./res/img/4.jpg" align="center" alt="Top Vente 2">
                                <div class="carousel-caption">
                                    <h3>Article 1</h3>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./res/img/6.jpg" align="center" alt="Top Vente 3">
                                <div class="carousel-caption">
                                    <h3>Article 1</h3>
                                    <p>Description</p>
                                </div>
                            </div>
                        </div>

                        <!-- Les contrôles gauche et droite -->
                        <a class="left carousel-control" href="#topvente" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Précedent</span>
                        </a>
                        <a class="right carousel-control" href="#topvente" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>

                <div class="product-section row justify-content-center">
                    <?php
                        try
                        {
                            // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                            if (!isset($GLOBALS["pdo"]))
                            {
                                $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=10.192.128.186", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                            }

                            // On récupère les données :
                            $res = $GLOBALS["pdo"]->query("SELECT product_name, product_picture, product_price, product_stock FROM products");

                            // On affiche les activités :
                            $table = $res->fetch(PDO::FETCH_ASSOC);

                            while ($table)
                            {
                                // On vérifie si le produit est en stock (sinon on ne l'affiche pas) :
                                if ($table["product_stock"] > 0)
                                {
                                    echo "<div class='product widget col-auto'>
                                            <div class='product-image'>
                                                <img src='./res/img/products/" . $table["product_picture"] . "' alt='" . $table["product_name"] . "'/>
                                            </div>
                                            <div class='product-desc'>
                                                <h4 class='product-title'>" . $table["product_name"] . "</h4>
                                                <div class='product-price'>" . $table["product_price"] . " €
                                                    <nav class='product-menu'>
                                                        <a href='#'><i class='fa fa-cart-plus fa-2x'></i></a>
                                                    </nav>
                                                </div>
                                            </div>
                                          </div>";
                                }
                                
                                $table = $res->fetch(PDO::FETCH_ASSOC);
                            }
                        }
                        catch (PDOException $e)
                        {
                            echo $e->getMessage();
                        }
                    ?>
                    <!-- Article statique -->
                    
                </div>
            </section>

            <aside>
                <button class="button button-primary" style="width:250px;height:150px">Passer commande</button>
            </aside>
        </div>

    </section>
    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
