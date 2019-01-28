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
        
 <?php
        
    try
                    {
                        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                        if (!isset($GLOBALS["pdo"]))
                        {
                            //$GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                            $bdd = new PDO("mysql:dbname=cesiprojet;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                        }

                         
                    }
                    catch (PDOException $e)
                    {
                        echo $e->getMessage();
                    }
     ?>

        
<?php
switch($_GET['ev'])
{
    case 'Lan Party':
    
    
        
        // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM events WHERE event_name =:name ");
        $requete->bindParam(':name', $name);
        $name = 'Lan Party';
        $requete->execute();
        
        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

            echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["event_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/events/" . $table["event_picture"] . "' alt=" . $table["event_name"] . "> <br>           
                    <p>" . $table["event_description"] . "</p> <br>
             </div>";
    break;
        
    case 'Projection film':
      
        // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM events WHERE event_name =:name ");
        $requete->bindParam(':name', $name);
        $name = 'Projection film';
        $requete->execute();
        
        
        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

            echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["event_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/events/" . $table["event_picture"] . "' alt=" . $table["event_name"] . "> <br>           
                    <p>" . $table["event_description"] . "</p> <br>
             </div>";
    break;
    
    case 'Tournoi de foot':
        
        // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM events WHERE event_name =:name ");
        $requete->bindParam(':name', $name);
        $name = 'Tournoi de foot';
        $requete->execute();
        
        

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

            echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["event_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/events/" . $table["event_picture"] . "' alt=" . $table["event_name"] . "> <br>           
                    <p>" . $table["event_description"] . "</p> <br>
             </div>";
    break;
}
?>
            

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
                    <form name="commentform" action="./php/send_comments.php" method="post">
                    <input  type="text" placeholder="pseudo">
                    <textarea class="form-control" name="commentaire" placeholder="écrire un commentaire..." rows="3"></textarea>
                    <br>
                        
                    <!-- choix image -->
                  <!--  <div>
                        <div class="row">
                             <label for="Image" class="col-xs-2 control-label">Image:</label>
                            <div class="col-lg-7 col-sm-6 col-12">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-info">
                                            Choisir&hellip; <input type="file" id="Image" name="uploadfile" style="display: none;" multiple >
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- Poster le commentaire -->
                    <input type="submit" class="btn btn-info pull-right" value="poster">
                    <div class="clearfix"></div>
                    <hr>
                    </form>
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


        

    </main>

    <footer>
     
    </footer>
</body>
