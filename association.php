<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Titre de la page</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/static.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
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
            require("./res/header.html");
        ?>
    </header>

    <main>
        <div class="container">
            <h1 id="titre-association"> Titre Association </h1>
            <img src="./res/img/clubs/club_cinema.jpg" class="img-assoc">
            <p>Ostendit aliquid efficiatur vero veri parte solvantur parte nudus logikh logikh est partiendo esse in est ostendit in videtur non quo in pro non mihi vero via plane disserendi iste sit logikh sublatum parte sit sublatum quae ut dicitur falsi probatum inermis ac iudicia mihi via est concludaturque tradit modo sensibus dividendo ac falsi tradit nihil efficiatur dividendo rerum vero non parte modo efficiatur concludaturque esse modo quaerendi falsi tradit veri ambigua semel quibus quibus altera quidem ut partiendo solvantur in plane ac qua quaerendi ostendit logikh ac videtur videtur tollit in modo tollit sublatum quaerendi solvantur dicitur solvantur ac.</p>

            
            <button type="button" class="btn btn-success btn-inscription">S'inscrire</button>

        </div>

    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
    
    </footer>
</body>
