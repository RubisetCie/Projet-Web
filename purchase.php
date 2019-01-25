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
     <link rel="stylesheet" type="text/css" href="./style/css/purchase.css">

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
        <form>
            <h1>Formulaire de paiement</h1>
            <p>Les champs obligatoires sont suivis par <strong><abbr title="required">*</abbr></strong>.</p>
            <section>
                <h2>Informations de contact</h2>
                <fieldset>
                    <legend>Qualité</legend>
                    <ul>
                        <li>
                            <label for="title_1">
                                <input type="radio" id="title_1" name="title" value="M.">
                                Monsieur
                            </label>
                        </li>
                        <li>
                            <label for="title_2">
                                <input type="radio" id="title_2" name="title" value="Mme.">
                                Madame
                            </label>
                        </li>
                    </ul>
                </fieldset>
                <p>
                    <label for="name">
                        <span>Nom :</span>
                        <strong><abbr title="required">*</abbr></strong>
                    </label>
                    <input type="text" id="name" name="username">
                </p>
                <p>
                    <label for="mail">
                        <span>e-mail :</span>
                        <strong><abbr title="required">*</abbr></strong>
                    </label>
                    <input type="email" id="mail" name="usermail">
                </p>
                <p>
                    <label for="password">
                        <span>Mot de passe :</span>
                        <strong><abbr title="required">*</abbr></strong>
                    </label>
                    <input type="password" id="pwd" name="password">
                </p>
            </section>
            <section>
                <h2>Informations de paiement</h2>
                <p>
                    <label for="card">
                        <span>Type de carte :</span>
                    </label>
                    <select id="card" name="usercard">
                        <option value="visa">Visa</option>
                        <option value="mc">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                </p>
                <p>
                    <label for="number">
                        <span>Numéro :</span>
                        <strong><abbr title="required">*</abbr></strong>
                    </label>
                    <input type="text" id="number" name="cardnumber">
                </p>
                <p>
                    <label for="date">
                        <span>Validité :</span>
                        <strong><abbr title="required">*</abbr></strong>
                        <em>format mm/aa</em>
                    </label>
                    <input type="text" id="date" name="expiration">
                </p>
            </section>
            <section>
                <p> <button type="submit">Valider le paiement</button> </p>
            </section>
        </form>
    </main>

    <footer class="container-fluid footer">
        <!-- Pied de page -->
        <?php
            require("./res/footer.html");
        ?>
    </footer>
</body>
