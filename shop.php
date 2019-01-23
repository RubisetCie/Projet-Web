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
                <div class="a">
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
                                    <a href="#"><i class="fa fa-cart-plus fa-2x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/3.jpg" alt="MyItem 3" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 3 </h4>
                            <div class="product-price">
                                40€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/4.jpg" alt="MyItem 4" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 4 </h4>
                            <div class="product-price">
                                10€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/5.jpg" alt="MyItem 5" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 5 </h4>
                            <div class="product-price">
                                55€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/6.jpg" alt="MyItem 6" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 6 </h4>
                            <div class="product-price">
                                46€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/7.jpg" alt="MyItem 7" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 7 </h4>
                            <div class="product-price">
                                44€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/8.jpg" alt="MyItem 8" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 8 </h4>
                            <div class="product-price">
                                74€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/9.jpg" alt="MyItem 9" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 9 </h4>
                            <div class="product-price">
                                113€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/10.jpg" alt="MyItem 10" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 10 </h4>
                            <div class="product-price">
                                107€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/11.jpg" alt="MyItem 11" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 11 </h4>
                            <div class="product-price">
                                76€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/12.jpg" alt="MyItem 12" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 12 </h4>
                            <div class="product-price">
                                115€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus fa-3x"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <aside >
                <div class="button">
                    <br/>
                    <br/>
                    <button class="button button-primary" style="width:250px" >Passer la commande</button>
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
