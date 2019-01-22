<!DOCTYPE html>
<head>
    <title>Boutique</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/fontawesome-free-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/foothead.css">
    <link rel="stylesheet" type="text/css" href="./style/css/shop.css">
    <link rel="icon" href="static/img/favicon.png" type="image/png">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-4.2.1/js/bootstrap.min.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Descritpion de la page">
    <meta name="keywords" content="CESI,BDE">
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

            <section class="shop-section col-12 col-lg-8">

                <div class="widget widget-primary shop-jumbotron">
                    <h2 class="shop-jumbotron-title">Bienvenue</h2>
                    <h3 class="widget-offset shop-jumbotron-lead">Dans la boutique du BDE</h3>
                    <form class="row shop-search-form">
                        <input type="text" placeholder="Search" class="form-control col-11" />
                        <button class="button button-invisible col-1">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="product-section row justify-content-center">


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/2.jpg" alt="MyItem 2" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 2 </h4>
                            <div class="product-price">
                                14€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/13.jpg" alt="MyItem 13" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 13 </h4>
                            <div class="product-price">
                                25€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>


                    <article class="product widget col-auto">
                        <div class="product-image">
                            <img src="./img/14.jpg" alt="MyItem 14" />
                        </div>
                        <div class="product-desc">
                            <h4 class="product-title">
                                MyItem 14 </h4>
                            <div class="product-price">
                                174€
                                <nav class="product-menu">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </nav>
                            </div>
                        </div>
                    </article>

                </div>

            </section>

            <aside class="widgets col-12 col-lg-4">

                <div class="cart widget">

                    <h4 class="widget-title widget-offset">Cart</h4>

                    <ul class="cart-item-list">
                        <li class="cart-item">MyItem 1 <div class="cart-item-right">
                                <div class="cart-item-price">15€</div><a href="#" class="cart-item-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </li>
                        <li class="cart-item">MyItem 2 <div class="cart-item-right">
                                <div class="cart-item-price">55€</div><a href="#" class="cart-item-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </li>
                        <li class="cart-item">MyItem 3 <div class="cart-item-right">
                                <div class="cart-item-price">8€</div><a href="#" class="cart-item-remove"><i class="fa fa-times"></i></a>
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