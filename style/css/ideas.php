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
    <link rel="stylesheet" type="text/css" href="./style/css/ideas.css">

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






        <div class="modal-dialog modal-ideas">
            <div class="modal-content modal-idea bg-color">
                <div class="modal-header">
                    <h4 class="modal-title">éditer une idée </h4>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">

                        <div class="form-group form-idea" >
                            <label class="col-md-3 control-label">titre de l'idée :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group form-idea" >
                            <label class="col-md-3 control-label">inserer une image:</label>
                            <div class="col-md-8">
                                <span class="btn btn-default btn-file">
                                    Browse <input type="file">
                                </span>
                            </div>
                        </div>

                        <div class="form-group form-idea">
                            <label class="col-md-3 control-label">description de l'idée :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="soumettre">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
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
