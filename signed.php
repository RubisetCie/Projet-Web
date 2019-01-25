<?php
$connect = mysqli_connect("localhost","root","");
$query = //entrer la requête SQL
$result = mysqli_query($connect, $query);
?>

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
    <link rel="stylesheet" type="text/css" href="./style/css/signed.css">


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


        <div class="container">
            <h2>Activité</h2>
            <p>Voici un tableau répertoriant l'ensemble des personnes adhérentes à cette associatinon:</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>nom</th>
                        <th>prénom</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Zemri</td>
                        <td>Salim</td>
                    </tr>
                    <tr>
                        <td>Oumid</td>
                        <td>Mohamed</td>
                    </tr>
                    <tr>
                        <td>Carteron</td>
                        <td>Matthieu</td>
                    </tr>
                   <?php
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row["nom"]; ?>
                        </td>
                        <td>
                            <?php echo $row["prénom"]; ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                    <tr>
                    </tr>
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
