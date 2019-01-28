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
        
    <?php
        
         try
                    {
                        // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                        if (!isset($GLOBALS["pdo"]))
                        {
                            $bdd = new PDO("mysql:dbname=cesiprojet;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                        }

                         
                    }
                    catch (PDOException $e)
                    {
                        echo $e->getMessage();
                    }
    ?>


        
<?php
switch($_GET['ac'])
{
    case 'Cinéma':
        
        // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();
        
        
        //$res = $GLOBALS["pdo"]->query("SELECT * FROM activities  WHERE activity_name = 'Cinéma'");

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

            echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
    break; 
        
    case 'Basketball':
        
        
        // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

           echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Football':
        
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);

           echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Musique':
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

           echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
    
    case 'Gaming':
        
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

          echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Soirée':
        
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

         echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Voile':
   
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

         echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Oenologie':
    
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);
        

            echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
        
    case 'Workout':
        
        
          // On récupère les données grâce à une requête préparée :
        $requete = $bdd->prepare("SELECT * FROM activities WHERE activity_name =:name ");
        $requete->bindParam(':name', $name);
        $name = $_GET['ac'];
        $requete->execute();

        // On affiche les activités :
        $table = $requete->fetch(PDO::FETCH_ASSOC);

         echo "<div class='container'>
                    <h1 id='titre-association'>" . $table["activity_name"] ."</h1> <br>               
                    <img class='img-assoc' src='./res/img/clubs/" . $table["activity_picture"] . "' alt=" . $table["activity_name"] . "> <br>           
                    <p>" . $table["activity_description"] . "</p> <br>
             </div>";
        
        
    break;
}
?>
        

    </main>

    <footer>
    </footer>
</body>
