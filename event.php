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
    <link rel="stylesheet" type="text/css" href="./style/css/commentary.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>
    <script src="./js/uploadfile.js"></script>
    
    
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

        <div class="container">
            <h1 id="titre-association"> Titre Association </h1>
            <img src="./res/img/clubs/club_cinema.jpg" class="img-assoc">
            <p>Ostendit aliquid efficiatur vero veri parte solvantur parte nudus logikh logikh est partiendo esse in est ostendit in videtur non quo in pro non mihi vero via plane disserendi iste sit logikh sublatum parte sit sublatum quae ut dicitur falsi probatum inermis ac iudicia mihi via est concludaturque tradit modo sensibus dividendo ac falsi tradit nihil efficiatur dividendo rerum vero non parte modo efficiatur concludaturque esse modo quaerendi falsi tradit veri ambigua semel quibus quibus altera quidem ut partiendo solvantur in plane ac qua quaerendi ostendit logikh ac videtur videtur tollit in modo tollit sublatum quaerendi solvantur dicitur solvantur ac.</p>

   <!------------------- Espace COMMENTAIRE ----------------->


<div class="row bootstrap snippets">
    <div class="col-md-6 col-md-offset-3 col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Espace Commentaire
                </div>
                
                <!-- TextArea pour écrire un commentaire -->
                
                <div class="panel-body">
                    <textarea class="form-control" placeholder="écrire un commentaire..." rows="3"></textarea>
                    <br>
                        
                    <!-- choix image -->
                    <div>
                        <div class="row">
                             <label for="Image" class="col-xs-2 control-label">Image:</label>
                            <div class="col-lg-7 col-sm-6 col-12">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-info">
                                            Choisir&hellip; <input type="file" id="Image"style="display: none;" multiple >
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Poster le commentaire -->
                    <button type="button" class="btn btn-info pull-right">Poster</button>
                    <div class="clearfix"></div>
                    <hr>
                    
                    <!-- Liste de commentaire -->
                    <ul class="media-list">
                
                        <!-- Commentaire type -->
                        
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="http://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">Il y a 30 min...</small>
                                </span>
                                <strong class="text-success">Killian Deroche</strong>
                                <p>
                                    Commentaire.
                                </p>
                            </div>
                        </li>
                       <!-- Fin commentaire type -->
                        
                    </ul>
                    <!-- Fin liste de commentaire -->
                </div>
            </div>
        </div>

    </div>
</div>
<!------------------- Fin espace COMMENTAIRE ----------------->







<!------------------------------------- FIN TEST ------------------>
        </div>

    </main>

    <footer>
     
    </footer>
</body>
