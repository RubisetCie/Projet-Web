/* 
 * Rôle     : Permet la connectique avec la base de donnée MySQL
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

class Database
{
    static HOST = "localhost";
    static USER = "root";
    static PASSWORD = "";
    
    static connect()
    {
        var mysql = require("mysql");

        // Connexion au serveur MySQL :
        var database = mysql.createConnection({host : HOST, user : USER, password : PASSWORD});

        // On se connecte au serveur :
        database.connect(function(err)
        {
            // Vérification des erreurs :
            if (err)
                throw err;
        });
    }
}
