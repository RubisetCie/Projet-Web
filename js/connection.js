/* 
 * Rôle     : Permet de valider les formulaires de connexion
 * Auteur   : Matthieu CARTERON
 * Date     : 25/01/2019
 */

function validateConnection()
{
    // On récupère le contenu des formulaires :
    var email = document.forms["connectionform"]["email"].value;

    // On teste si l'adresse mail entrée est valide avec une expression régulière :
    var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(!emailregex.test(email))
    {
        alert("L'adresse n'est pas un email valide !");
        return false;
    }
    
    return true;
}