/* 
 * Rôle     : Permet d'importer un fichier
 * Auteur   : Killian DEROCHE
 * Date     : 25/01/2019
 */

$(function()
{
    // On peut attacher l'événement "fileselect" à n'importe quel type de fichier sur la page :
    $(document).on("change", ":file", function()
    {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, "");
        input.trigger("fileselect", [numFiles, label]);
    });

    // On peut démarrer notre événement "fileselect" comme-ci :
    $(document).ready(function()
    {
        $(':file').on('fileselect', function(event, numFiles, label)
        {
            var input = $(this).parents(".input-group").find(":text"),
                log = numFiles > 1 ? numFiles + " files selected" : label;

            if(input.length)
            {
                input.val(log);
            }
            else
            {
                if(log)
                    alert(log);
            }
        });
    });
});