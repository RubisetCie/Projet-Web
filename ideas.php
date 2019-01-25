<!DOCTYPE html>
<!-- Informations d'en-tête -->

<head>
    <title>Proposition d'activité</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/ideas.css">
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
        <div class="modal-dialog modal-ideas">
            <div class="modal-content modal-idea bg-color">
                <div class="modal-header">
                    <h4 class="modal-title">Proposer une idée</h4>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group form-idea" >
                            <label class="col-md-3 control-label">Titre de l'idée :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group form-idea" >
                            <label class="col-md-3 control-label">Inserer une image :</label>
                            <div class="col-md-8">
                                <span class="btn btn-default btn-file">
                                    Browse <input type="file">
                                </span>
                            </div>
                        </div>

                        <div class="form-group form-idea">
                            <label class="col-md-3 control-label">Description de l'idée :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Soumettre">
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
