/* 
 * Rôle     : Point d'entrée du serveur Node.js
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

var express = require("express");
var fs = require("fs");
var database = require("./database");
var app = express();

// On se connecte à la base de donnée :
database.connect();

// On définit les requêtes GET pour récupérer des données depuis la base :
app.get("/:table", function(input, output)
{
    database.getAll(input.params.table, function(json)
    {
        output.writeHead(200, {"Content-Type" : "text/html"});
        output.end("<p>" + json + "</p>");
    });
});

app.get("/:table/:key/:value", function(input, output)
{
    database.getID(input.params.table, input.params.key, input.params.value, function(json)
    {
        output.writeHead(200, {"Content-Type" : "text/html"});
        output.end("<p>" + json + "</p>");
    });
});

// On fait écouter le serveur sur le port 8080 :
var server = app.listen(8080, function()
{
    var host = server.address().address;
    var port = server.address().port;
    
    console.log("Example app listening at http://%s:%s", host, port);
});