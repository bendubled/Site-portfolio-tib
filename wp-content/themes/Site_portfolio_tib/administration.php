<?php
/*
Template Name: page_administration
*/
?>
<!DOCTYPE html>
<?php
//include_once (plugin_dir_path(__FILE__) . '../../plugins/traitement_upload.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/style_admin.css" />
        <link rel="stylesheet" href="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.css" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
       
       <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/custom/requete.js"></script>
       <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/libraries/jQuery/jquery-3.2.1.js"></script>
       <script src="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
        <title>Administration</title>
    </head>

    <body>
       <section>
           <nav class="navbar navbar-expand-lg navbar-dark  nav_bar_color">
  <a class="navbar-brand" href="#"><img class="d-block img-fluid logo" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/images/tib.jpg" alt="First slide"></a>
  <a href="../../../../../../Users/jonab/Downloads/1501524971_nb-darcula-1.6.nbm"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://localhost/wordpress">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/wordpress/page_formulaire">Contact</a>
      <a class="nav-item nav-link" href="http://localhost/wordpress/page_admin/">Administration</a>
       
      
    </div>
  </div>
</nav>
        <div id="list_erreur">
            
        </div>
           <div class="form_placement">
        <form method="post" action="http://localhost/wordpress/wp-content/plugins/traitement_upload.php" enctype="multipart/form-data" onsubmit="formulaire()">
     <label for="icone" class="design_form">Upload image :</label><br />
     <input type="file" name="icone" id="icone" style="margin-left:12%"/><br />
<!--     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />-->
     <label for="titre" class="design_form">Titre du fichier (max. 50 caractères) :</label><br />
     <input type="text" name="titre" value="" id="titre"/><br />
     <label for="description" class="design_form">Description de votre fichier (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />
         
</form>
           
              <form method="post" action="http://localhost/wordpress/wp-content/plugins/traitement_upload.php" enctype="multipart/form-data" onsubmit="formulaire()">
     <label for="icone" class="design_form">MULTI Upload :</label><br />
     <input type="file" name="icone" id="icone" style="margin-left:12%" /><br />

     <input type="submit" name="submit" value="Envoyer" />
         
</form>
        <div id="mes_erreur">
            
        </div>
           </div>
       </section>
     </body>
</html>

