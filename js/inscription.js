/* 
 * Rôle     : Permet de valider les formulaires d'inscription
 * Auteur   : Matthieu CARTERON
 * Date     : 25/01/2019
 */

function validateInscription()
{
    // On récupère le contenu des formulaires :
    var lastname = document.forms["inscriptionform"]["lastname"].value;
    var firstname = document.forms["inscriptionform"]["firstname"].value;
    
    var email = document.forms["inscriptionform"]["email"].value;
    
    var location = document.forms["inscriptionform"]["promotion"].value;
    
    var password = document.forms["inscriptionform"]["password"].value;
    var confpassword = document.forms["inscriptionform"]["confirm_password"].value;
    
    // On teste la longueur des champs :
    if (lastname.length > 25)
    {
        alert("Le nom ne doit pas dépasser 25 caractères !");
        return false;
    }
    
    if (firstname.length > 25)
    {
        alert("Le prénom ne doit pas dépasser 25 caractères !");
        return false;
    }
    
    if (email.length > 35)
    {
        alert("L'adresse email ne doit pas dépasser 35 caractères !");
        return false;
    }
    
    if (location.length > 40)
    {
        alert("La promotion ne doit pas dépasser 40 caractères !");
        return false;
    }
    
    if (password.length > 30 || confpassword.length > 30)
    {
        alert("Le mot de passe ne doit pas dépasser 30 caractères !");
        return false;
    }
    
    // On teste si les deux mots de passe coincident :
    if (password !== confpassword)
        return false;
    
    // On teste si l'adresse mail entrée est valide avec une expression régulière :
    var emailregex = new RegExp("@[a-z].[a-z]$");
    
    if(!emailregex.test(email))
    {
        alert("L'adresse email n'est pas valide !");
        return false;
    }
    
    return true;
}