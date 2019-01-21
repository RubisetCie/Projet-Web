/* Rôle     : Point d'entrée du serveur Node.js
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

// On appelle la bibliothèque "HTTP" :
var http = require('http');

// On créé le serveur qui répond aux requêtes HTTP :
var server = http.createServer(function(input, output)
{
    // On écrit la réponse :
    output.writeHead(200, {"Content-Type" : "text/html"});
    output.end("<p>Salut tout le monde !</p>");
});

// On fait écouter le serveur sur le port 8080 :
server.listen(8080);