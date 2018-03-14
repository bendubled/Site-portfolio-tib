<?php
/*
Template Name: page_administration
*/
?>
<!DOCTYPE html>
<?php
include_once (plugin_dir_path(__FILE__) . '../../plugins/functions.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
    </head>

    <body>
    <form action="http://localhost/wordpress/wp-content/plugins/traitement_upload.php" method="post">
<!--        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                
        </p>-->
        <p>
            Titre de la photo :<br />
            <input type="text" name="titre"/>
        </p>
<!--        <p>
            Date :<br />
            <input type="text" name="date"/>
        </p>
        <p>
            Details :<br />
            <input type="text" name="date"/>
        </p>
        <p>
            url :<br />
            <input type="text" name="titre"/>
        </p>-->
        <input type="submit" value="Envoyer le fichier" />
</form>
    </body>
</html>

