<!DOCTYPE html>
<!-- Informations d'en-tête -->
<head>
    <title>Liste des inscrits</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <!-- On inclus les deux versions de bootstrap ! -->
    <link rel="stylesheet" href="./vendors/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/css/base.css">
    <link rel="stylesheet" type="text/css" href="./style/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./style/css/signed.css">
    <link rel="shortcut icon" href="./favicon.ico">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/inscription.js"></script>
    <script src="./js/connection.js"></script>

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
            <?php   
                echo "<h2>" . filter_input(INPUT_GET, "activity", FILTER_SANITIZE_URL) . "</h2>";
            ?>
            <p>Voici un tableau répertoriant l'ensemble des personnes adhérentes à cette association :</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse email</th>
                        <th>Centre de formation</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        try
                        {
                            // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                            if (!isset($GLOBALS["pdo"]))
                            {
                                $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=10.192.128.186", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                            }

                            // On récupère les données :
                            $query = $GLOBALS["pdo"]->prepare("SELECT users.user_firstname, users.user_lastname, users.user_email, users.user_location, users.user_status, activities.activity_name FROM users INNER JOIN practise ON users.user_id = practise.user_id INNER JOIN activities ON practise.activity_name = activities.activity_name WHERE activities.activity_name = :activity");
                            $query->bindValue(":activity", filter_input(INPUT_GET, "activity", FILTER_SANITIZE_URL), PDO::PARAM_STR);
                            $query->execute();

                            // On affiche les inscrits :
                            $table = $query->fetch(PDO::FETCH_ASSOC);

                            while ($table)
                            {
                                echo "<tr>
                                        <td>" . $table["user_lastname"] . "</td>
                                        <td>" . $table["user_firstname"] . "</td>
                                        <td>" . $table["user_email"] . "</td>
                                        <td>" . $table["user_location"] . "</td>";
                                
                                switch ($table["user_status"])
                                {
                                    case 0 : echo "<td>Etudiant</td>"; break;
                                    case 1 : echo "<td>Membre du BDE</td>"; break;
                                    case 2 : echo "<td>Salarié du CESI</td>"; break;
                                }
                                        
                                echo "</tr>";

                                $table = $query->fetch(PDO::FETCH_ASSOC);
                            }
                        }
                        catch (PDOException $e)
                        {
                            echo $e->getMessage();
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="btn-signed">
            <button type="button" class="btn btn-primary">Télécharger au format CSV</button>
            <button type="button" class="btn btn-primary">Télécharger au format PDF</button>
        </div>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
