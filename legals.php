<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Mentions légales</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/legalmentions.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Conditions d'utilisations du site">
    <meta name="keywords" content="CESI,BDE,Conditions,Utilisation,Mentions,Legales">
    <meta name="author" content="Matthieu CARTERON">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <?php
            require("./res/header.html");
        ?>
    </header>

    <main>
        <p>
            Site Internet CESI BDE<br>
            Par le CESI Ecole d'ingénieurs<br>
            93 Boulevard de la Seine<br>
            92000 Nanterre<br>
            France<br>
            <br>
            Tel.    : 555-01-26-25-64<br>
            Fax     : 555-05-40-00-12<br>
            https://www.cesi-bde.fr<br>
            <br>
            Le CESI est une école d'ingénieurs au capital de 25 000 €<br>
            RCS B 497 553 71 - Siret : 49755371900020 - APE : 6201Z<br>
            N° déclaration CNIL : 2831470<br>
            <br>
            Conditions d'utilisation :<br>
            <br>
            Le site accessible par les URL suivants : www.cesi-bde.fr est exploité dans le respect de la législation française. L'utilisation de ce site est régie par les présentes conditions générales. En utilisant le site, vous reconnaissez avoir pris connaissance de ces conditions et les avoir acceptées. Celles-ci pourront êtres modifiées à tout moment et sans préavis par l'école CESI Ecole d'ingénieurs.<br>
            Le CESI Ecole d'ingénieurs ne saurait être tenu pour responsable en aucune manière d’une mauvaise utilisation du service.
        </p>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
