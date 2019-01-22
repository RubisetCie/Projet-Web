<!DOCTYPE html>
<head>
    <title>Boutique</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/shop.css">
    <link rel="icon" href="static/img/favicon.png" type="image/png">

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
                <div class="shop-section widget widget-primary shop-jumbotron">
                    <h2 class="shop-jumbotron-title">Bienvenue</h2>
                    <h3 class="widget-offset shop-jumbotron-lead">Dans la boutique du BDE</h3>
                    <form class="row shop-search-form">
                        <input type="text" placeholder="Search" class="form-control col-11" />
                        <button class="button button-invisible col-1">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    
                    <div id="topvente" class="carousel slide" data-ride="carousel">
                        <!-- Indicateurs -->
                        <ul class="carousel-indicators">
                            <li data-target="#topvente" data-slide-to="0" class="active"></li>
                            <li data-target="#topvente" data-slide-to="1"></li>
                            <li data-target="#topvente" data-slide-to="2"></li>
                        </ul>

                        <!-- Les images -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./res/img/2.jpg" alt="Top Vente 1">
                            </div>
                            <div class="carousel-item">
                                <img src="./res/img/4.jpg" alt="Top Vente 2">
                            </div>
                            <div class="carousel-item">
                                <img src="./res/img/6.jpg" alt="Top Vente 3">
                            </div>
                        </div>

                        <!-- Les contrôles gauche et droite -->
                        <a class="carousel-control-prev" href="#topvente" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#topvente" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                <div class="product-section row justify-content-center">
                    <!-- Article statique -->
                    <div class="product widget col-auto">
                        <div class="product-image">
                            <img src="./res/img/2.jpg" alt="MyItem 2" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 2</h4>
                            <div class="product-price">
                                14€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="widgets col-12 col-lg-4">
                <div class="cart widget">
                    <h4 class="widget-title widget-offset">Panier</h4>
                    <!-- Liste du panier -->
                    <ul class="cart-item-list">
                        <li class="cart-item">MyItem 1 <div class="cart-item-right">
                                <div class="cart-item-price">15€</div><a href="#" class="cart-item-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </li>
                    </ul>
                    <button class="button button-primary">Purchase</button>
                </div>
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