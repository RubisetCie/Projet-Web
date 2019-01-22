<!DOCTYPE html>
<html>

<!-- Mirrored from localhost:8081/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 15:54:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Shop - BDE Cesi</title>
    <meta name="viewport" content="width=device-width;user-scalable=no;initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.css" />
    <link rel="stylesheet" href="static/css/fa/css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="icon" href="static/img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="BDE/BDE/StaticExport/static/css/base.css" />
    <link rel="stylesheet" type="text/css" href="BDE/BDE/StaticExport/static/css/foothead.css" />
    <link rel="stylesheet" type="text/css" href="BDE/BDE/StaticExport/static/css/shop.css" />
     <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">

            <div>
                <img src="./img/logo_bde.png" alt="Logo bde" height="69.6" width="58">
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item text-nav">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item text-nav">
                        <a class="nav-link" href="#">Magasin</a>
                    </li>
                    <li class="nav-item text-nav">
                        <a class="nav-link" href="#">Association</a>
                    </li>
                    <li class="nav-item text-nav">
                        <a class="nav-link" href="#">Boite à idée</a>
                    </li>
                </ul>
            </div>






            <!----------------- Search ------------------------->
            <form class="navbar-form navbar-right inline-form">
                <div class="form-group modal-box">
                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>

            <!----------------- Se connecter ------------------------->
            <div class="text-center modal-box">
                <!-- Button HTML (to Trigger Modal) -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
                    Se connecter
                </button>

            </div>

            <!-- Modal Formulaire connexion -->
            <div id="Modal1" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Connexion BDE</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="/examples/actions/confirmation.php" method="post">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" placeholder="Username" required="required">
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <a href="#">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------- INSCRIPTION ----------------------------->
            <div class="text-center">
                <!-- Button HTML (to Trigger Modal) -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">
                    S'inscrire ?
                </button>
            </div>

            <!-- Modal Formulaire inscription -->
            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="signup-form">
                                <form action="/examples/actions/confirmation.php" method="post">
                                    <h2>Inscription</h2>
                                    <p class="hint-text">Creer ton compte BDE</p>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6"><input type="text" class="form-control" name="Nom" placeholder="Nom" required="required"></div>
                                            <div class="col-xs-6"><input type="text" class="form-control" name="Prénom" placeholder="Prénom" required="required"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Promotion" placeholder="Promotion" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
                                    </div>
                                </form>
                                <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </nav>

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
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 footer-infos">
                    <ul>
                        <li><a href="#">Legals Notice</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <diV class="col-12 col-md-4 footer-social">
                    <div class="footer-social-logos">
                        <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 footer-logos">
                    <div class="row">
                        <div class="col-6"><img src="./img/exia.png" alt="eXia" width=85% /></div>
                        <div class="col-6"><img src="./img/ei.png" alt="ei" width=90% /></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Mirrored from localhost:8081/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 15:54:59 GMT -->
</html>