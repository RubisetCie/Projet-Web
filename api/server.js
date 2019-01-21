/* Rôle     : Point d'entrée du serveur Node.js
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

// On appelle les bibliothèques :
var http = require("http");     // Bibliothèque HTTP
var mysql = require("mysql");   // Bibliothèque MySQL

// Création du serveur Web :
var server = http.createServer(function(input, output)
{
    // On écrit la réponse :
    output.writeHead(200, {"Content-Type" : "text/html"});
    output.end("<p>Salut tout le monde !</p>");
});

// Connexion au serveur MySQL :
var database = mysql.createConnection({host : "localhost", user : "root", password : ""});

// On se connecte au serveur :
database.connect(function(err)
{
    // Vérification des erreurs :
    if (err)
        throw err;
});

// On fait écouter le serveur sur le port 8080 :
server.listen(8080);