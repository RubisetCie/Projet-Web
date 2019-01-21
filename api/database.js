/* 
 * Rôle     : Gère la connectique avec la base de donnée MySQL
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

var mysql = require("mysql");

// Connexion au serveur MySQL :
var database = mysql.createConnection({host : "localhost", user : "root", password : ""});

// On se connecte au serveur :
database.connect(function(err)
{
    // Vérification des erreurs :
    if (err)
        throw err;
});