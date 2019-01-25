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
    <link rel="stylesheet" type="text/css" href="./style/css/home.css">

    <script src="./vendors/jquery-3.3.1.min.js"></script>
    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Balises META -->
    <meta charset="utf-8">
    <meta name="description" content="Page d'accueil">
    <meta name="keywords" content="CESI,BDE,Accueil">
    <meta name="author" content="Salim ZEMRI">
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
        <h2>Bienvenue sur le site officiel du BDE !</h2>
        <section>
            <article>
            <img class="top img-home img-thumbnail img-responsive" src="./res/img/party.jpg" alt="Party">
                <p class="txt">
                    Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.
                    Ideoque fertur neminem aliquando ob haec vel similia poenae addictum oblato de more elogio revocari iussisse, quod inexorabiles quoque principes factitarunt. et exitiale hoc vitium, quod in aliis non numquam intepescit, in illo aetatis progressu effervescebat, obstinatum eius propositum accendente adulatorum cohorte.
                    Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis per minorem Armeniam lapsus Constantinopolim petit exindeque per protectores retractus artissime tenebatur.
                </p>
            </article>
            <article>
                <img class="img-thumbnail img-home img-responsive" src="./res/img/logo_cesi.png" alt="Image" width="300" height="150">
                <p class="txt">
                    Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.
                </p>
                <a href="https://www.cesi.fr/">Lien CESI</a>
            </article>
        </section>

        <aside>
            <?php
                try
                {
                    // On établi la connexion à la base de donnée si ce n'est pas déjà fait :
                    if (!isset($GLOBALS["pdo"]))
                    {
                        $GLOBALS["pdo"] = new PDO("mysql:dbname=cesiprojet;host=10.192.128.186", "cesibde", "ps854ccbjrkocij2", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    }

                    // On récupère les données des meilleures ventes (stock le plus bas) :
                    $res = $GLOBALS["pdo"]->query("SELECT product_name, product_picture FROM products ORDER BY product_stock ASC LIMIT 3");

                    // On affiche les produits :
                    $table = $res->fetch(PDO::FETCH_ASSOC);
                    while ($table)
                    {
                        echo "<img class='img-thumbnail img-home img-responsive' width=200px src='./res/img/products/" . $table["product_picture"] . "' alt='Topvente'>
                              <p class='a'>" . $table["product_name"] . "</p>";
                        
                        $table = $res->fetch(PDO::FETCH_ASSOC);
                    }
                }
                catch (PDOException $e)
                {
                    echo $e->getMessage();
                }
            ?>
        </aside>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
