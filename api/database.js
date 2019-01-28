/* 
 * Rôle     : Permet la connectique avec la base de donnée MySQL
 * Auteur   : Matthieu CARTERON
 * Date     : 21/01/2019
 */

module.exports =
{
    // Permet de se connecter à la base de données :
    connect : function()
    {
        var mysql = require("mysql");

        // Connexion au serveur MySQL :
        this.database = mysql.createConnection({host : "localhost", user : "root", password : "", database : "cesiprojet"});

        // On se connecte au serveur :
        this.database.connect(function(err)
        {
            // Vérification des erreurs :
            if (err)
                throw err;
        });
    },

    // Récupère une table complète :
    getAll : function(table, callback)
    {
        this.database.query("SELECT * FROM " + table, function(err, result)
        {
            // Vérification des erreurs :
            if (err)
                throw err;

            callback(JSON.stringify(result));
        });
    },

    // Récupère une ligne d'une table :
    getID : function(table, key, value, callback)
    {
        this.database.query("SELECT * FROM " + table + " WHERE " + key + " = " + value, function(err, result)
        {
            // Vérification des erreurs :
            if (err)
                throw err;

            callback(JSON.stringify(result));
        });
    }
};

