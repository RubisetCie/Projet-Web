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
    <link rel="icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Permet d'ajouter un nouvel événement">
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="or">Nouvel événement</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="name" class="or">Titre :</label>
                        <input type="text" id="name" name="user_name" placeholder="ajouter un titre">  <!-- zone de texte -->

                    </div>
                    <div>
                        <label for="image" class="or">Image :</label>
                        <input type="file" name="nom" class="input_image" />  <!-- zone insersion image -->
                    </div>
                    <div>
                        <label for="msg" class="or" id="msg">Description :</label>
                        <textarea id="msg" name="user_message"></textarea>  <!-- zone de texte -->
                    </div>

                    <div class="div_event">
                        <h5 class="or">Type d'évènement :</h5>
                        <div>

                            <label class="or">Ponctuel
                                <input type="radio" name="radio1" value="radio1">  <!-- bouton cochable -->
                            </label>
                            <label class="or">Récurrent
                                <input type="radio" name="radio1" value="radio2"><!-- bouton cochable -->
                            </label>
                        </div>

                        <div>
                            <label class="or">Payant
                                <input type="radio" name="radio2" value="radio3"><!-- bouton cochable -->
                            </label>
                            <label class="or">Gratuit
                                <input type="radio" name="radio2" value="radio4"><!-- bouton cochable -->
                            </label>

                        </div>

                    </div>

                    <div class="date">
                        <label for="date" class="or">choisir une date:</label>
                        <input type="date" name="evenement">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">Soumettre</button>
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