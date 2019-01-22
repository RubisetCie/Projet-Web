<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>édition des manifestations</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>


<body>

    <header>

        <!-- navbar -->

        <?php include("menu.php"); ?>


        <div>
            <img src="./img/Cesi_Logo.png" alt="Logo Cesi" height="62.8" width="169.2">
        </div>

    </header>


    <main>
        <!-- Button trigger modal -->

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="or" id="exampleModalLabel">éditer une manifestation</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="name" class="or">titre de l'évènement :</label>
                        <input type="text" id="name" name="user_name" placeholder="ajouter un titre">  <!-- zone de texte -->

                    </div>
                    <div>
                        <label for="image" class="or">inserer une image:</label>
                        <input type="file" name="nom" class="input_image" />  <!-- zone insersion image -->
                    </div>
                    <div>
                        <label for="msg" class="or" id="msg">Message :</label>
                        <textarea id="msg" name="user_message"></textarea>  <!-- zone de texte -->
                    </div>

                    <div class="div_event">
                        <h5 class="or">type d'évènement:</h5>
                        <div>

                            <label class="or">ponctuelle
                                <input type="radio" name="radio1" value="radio1">  <!-- bouton cochable -->
                            </label>
                            <label class="or">récurrent
                                <input type="radio" name="radio1" value="radio2"><!-- bouton cochable -->
                            </label>
                        </div>

                        <div>
                            <label class="or">payant
                                <input type="radio" name="radio2" value="radio3"><!-- bouton cochable -->
                            </label>
                            <label class="or">gratuit
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
</body>

</html>
