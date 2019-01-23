<!DOCTYPE html>
<head>
    <title>Nouvel événement</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    
    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/forms.css">
    <link rel="stylesheet" type="text/css" href="./style/css/edition.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/edit.js"></script>

    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Permet d'ajouter un nouvel événement">
    <meta name="author" content="Killian DEROCHE">
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
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-color">
                <div class="modal-header">
                    <h5 class="or">Editer une Association</h5>
                </div>
                
                <div class="form-group">
                    <label for="Tire_assoc" class="col-xs-2 control-label">Titre:</label>
                        <div class="col-xs-9">
                        <input type="text" class="form-control" id="Titre_assoc" name="Tire_assoc" placeholder="Ecrire le titre">
                        </div>
                </div>

                <div class="container">
                    <div class="row">
                         <label for="Image" class="col-xs-1 control-label">Image:</label>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-orange">
                                        Choisir&hellip; <input type="file" id="Image"style="display: none;" multiple >
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group green-border-focus">
                  <label for="Description" class="col-xs-1 control-label">Description:</label>
                  <textarea class="form-control" id="Description" rows="2" placeholder="Ecrivez la description de l'association"></textarea>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Soumettre</button>
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