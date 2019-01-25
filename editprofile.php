<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Edition du profil</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="author" content="Charafein MOHAMED">
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
        <div class="container">
            <h1>Edition du Profil</h1>
            <hr>
            <div class="row">
                
                <!-- Colonne de gauche -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar"><!-- le src de cette photo se trouve directement sur internet-->
                        <h6>Télécharger une photo...</h6>

                        <input type="file" class="form-control">
                    </div>
                </div>

                <!-- Colonne de formulaire d'édition -->
                <div class="col-md-9 personal-info">
                    <h3>Informations personnelles</h3>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nom :</label>
                            <div class="col-lg-8"><!--col-lg-8 permet de definir la longueur de la bar de l'input, ici la longueur est de 8-->
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Prénom :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Pseudo :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Date de naissance :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="texte" value="JJ/MM/AAAA">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Centre de formation :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="exemple@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mot de passe :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirmer mot de passe :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="button" class="btn btn-warning" value="Confirmer"> 
                                <input type="reset" class="btn btn-dark" value="Annuler">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
