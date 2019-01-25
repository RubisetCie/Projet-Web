<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Description d'article</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/article.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>

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
            require("./res/header.php");
        ?>
    </header>

    <main>
        <article>
            <header>
                <h1 class="titre">Pull CESI</h1>
                <br />
                <br />
                <h2 class="ei">Ei Cesi</h2>
                <br />
                <br />
                <br />
                <br />
                <img class="logo" src="./res/img/logo_cesi.png" alt="Product" />
                <br />
                <br />
            </header>

            <section id="image-gallery">
                <figure>
                    <figcaption class="legende">Pull Cesi en coton de face</figcaption>
                </figure>

                <div id="thumbnails">
                    <img class="pull" src="./res/img/products/product_pull2.jpg" alt="Produit 1" />
                    <br />
                    <br />
                    <div class="price">300&euro;</div>
                    <br />
                    <div class="promo"></div>
                </div>
            </section>

            <section id="info">
                <br />
                <br />
                <p class="des">Matière: 50% Coton / 50% Polyester Poids: 175g/m² Col tricot Ourlet bas de manches et base Patte boutonnée: 3 boutons Tissu teint Bande de propreté dans le col.</p>
                <div class="social">
                    <!-- Boutons de partage-->
                </div>
            </section>
            <section id="options">
                <select class="op">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <a href="#" id="addtocart">Ajouter au panier</a>
            </section>

            <section id="characteristics">
                <br />
                <h2 class="cara1">Stock</h2>

                <ul class="stock">
                    <h6>XS O en stock</h6>
                    <h6>S 4 en stock</h6>
                    <h6>M 7 en stock</h6>
                    <h6>L 5 en stock</h6>
                    <h6>XL 4 en stock</h6>
                    <h6>XXL O en stock</h6>
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

        