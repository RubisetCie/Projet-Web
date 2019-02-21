<!DOCTYPE html>
<head>
    <title>Edition événement</title>
    
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
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
    <!-- script à télécharger -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
    <!--                    -->
    
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    <script src="./js/datetimepicker.js"></script>
    <script src="./js/uploadfile.js"></script>

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
            require("./res/header.php");
        ?>
    </header>

    <main>
        <form name="connectionform" action="./php/scripteditevent.php" method="post" autocomplete="on">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-color">
                <div class="modal-header">
                    <h5 class="or">Créer un nouvel événement</h5>
                </div>
                <div class="form-group">
                    <label for="Tire_assoc" class="col-xs-2 control-label">Titre :</label>
                        <div class="col-xs-9">
                        <input type="text" class="form-control" id="Titre_assoc" name="name" placeholder="Ecrire le titre">
                        </div>
                </div>

                <div class="container">
                    <div class="row">
                         <label for="Image" class="col-xs-1 control-label">Image :</label>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-orange">
                                        Choisir&hellip; <input type="file" name="pic" id="Image"style="display: none;" multiple >
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
					           
                <div class="form-group green-border-focus">
                  <label for="Description" class="col-xs-1 control-label">Description :</label>
                  <textarea class="form-control" name="desc" id="Description" rows="2" placeholder="Ecrivez la description de l'association"></textarea>
                </div>


            <div>
                <label for="Description" class="col-xs-2 control-label">Prix :</label>
                	<!-- Bouton Radio Gratuit -->
				<div class="form-check form-check-inline">
				  <input type="radio" class="form-check-input" id="radio_Gratuit" name="radio_prix">
				  <label class="form-check-label" for="radio_Gratuit">Gratuit</label>
				</div>

				<!-- Bouton Radio Payant -->
				<div class="form-check form-check-inline">
				  <input type="radio" class="form-check-input" id="radio_payant" name="radio_prix">
				  <label class="form-check-label" for="radio_payant">Payant</label>
				</div>

            </div>
                
                <div>
                    <label for="Description" class="col-xs-2 control-label">Date :</label>
                	<!-- Bouton Radio Récurent -->
				<div class="form-check form-check-inline">
				  <input type="radio" class="form-check-input" id="radio_recurent" name="radio_when">
				  <label class="form-check-label" for="radio_recurent">Récurrent</label>
				</div>

				<!-- Bouton Radio Ponctuelle -->
				<div class="form-check form-check-inline">
				  <input type="radio" class="form-check-input" id="radio_ponctuelle" name="radio_when">
				  <label class="form-check-label" for="radio_ponctuelle">Ponctuel</label>
				</div>

            </div>
                
               
            <div>
                    <label for="Description" class="col-xs-1 control-label">Date :</label>
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' name="date" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                

                
                

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" onclick="window.location.replace('./php/scripteditevent.php\')">Soumettre</button>
                </div>
                     

            </div>
        </div>
    
        </form>

    </main>
    
    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>