<nav class="navbar navbar-expand-lg navbar-light bg-color-nav">
    <img class="navbar-icon" src="./res/img/logo_bde.png" alt="Logo bde" width="58">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon btn-orange"></span>
    </button>

    <!-- Barre de navigation -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="text-nav" href="./">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="text-nav" href="./shop">Boutique</a>
            </li>
            <li class="nav-item">
                <a class="text-nav" href="./associations">Associations</a>
            </li>
            <li class="nav-item">
                <a class="text-nav" href="./events">Évènements</a>
            </li>
            <li class="nav-item">
                <a class="text-nav" href="./boxidea">Boite à idées</a>
            </li>
        </ul>
    </div>

    <!-- Barre de recherche -->
    <form class="navbar-form navbar-right inline-form">
        <div class="form-group modal-box">
            <input type="search" class="form-control" placeholder="Recherche">
            <button type="submit" class="btn btn-orange"/>
            <span class="glyphicon glyphicon-search"/>
        </div>
    </form>

    <!-- Les boutons de la navbar -->
    <?php
        session_start();
    
        // On vérifie si une session est en cours :
        if (isset($_SESSION["id"]) == 0)
        {
            echo "<div class='text-center modal-box'>
                    <button type='button' class='btn btn-orange' data-toggle='modal' data-target='#Modal1'>Se connecter</button>
                  </div>
                  <div class='text-center'>
                    <button type='button' class='btn btn-orange' data-toggle='modal' data-target='#Modal2'>S'inscrire ?</button>
                  </div>";
        }
        else
        {
            // Sinon, on affiche des boutons différents en fonction du statut :
            switch ($_SESSION["status"])
            {
                case 0 :
                    echo "<div class='text-center'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./php/deconnection.php\")'>Déconnexion</button>
                          </div>";
                    break;
                case 1 :
                    echo "<div class='text-center modal-box'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./editevent\")'>Nouvel événement</button>
                          </div>
                          <div class='text-center modal-box'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./signed\")'>Liste des inscrits</button>
                          </div>
                          <div class='text-center'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./php/deconnection.php\")'>Déconnexion</button>
                          </div>";
                    break;
                case 2 :
                    echo "<div class='text-center modal-box'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./pictures\")'>Liste des photos</button>
                          </div>
                          <div class='text-center'>
                            <button type='button' class='btn btn-orange' onclick='window.location.replace(\"./php/deconnection.php\")'>Déconnexion</button>
                          </div>";
                    break;
            }
        }
    ?>

    <!-- Modal Formulaire connexion -->
    <div id="Modal1" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">              
                    <h4 class="modal-title">Connexion Etudiant</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form name="connectionform" action="./php/connection.php" method="post" onsubmit="return validateConnection()">
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">                 
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Connexion">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Formulaire inscription -->
    <div class="modal fade" id="Modal2" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-signup" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="signup-form">
                        <form name="inscriptionform" action="./php/inscription.php" method="post" onsubmit="return validateInscription()">
                            <h2>Inscription</h2>
                            <p class="hint-text">Crée ton compte étudiant</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6"><input type="text" class="form-control" name="lastname" placeholder="Nom" required="required"></div>
                                    <div class="col-xs-6"><input type="text" class="form-control" name="firstname" placeholder="Prénom" required="required"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirmer mot de passe" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="location" placeholder="Locaisation Centre Cesi" required="required">
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" required="required">J'accepte les <a href="./legals.php">Conditions d'utilisation</a> &amp; <a href="#">Politique de Confidentialité</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="S'inscrire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
