<?php
/*
Template Name: page_formulaire
*/

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/style_page_photo.css" />
        <link rel="stylesheet" href="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.css" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
       <script type="text/javascript" src="wp-content/themes/Site_portfolio_tib/custom/requete.js"></script>
       <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/libraries/jQuery/jquery-3.2.1.js"></script>
       <script src="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Titre</title>
    </head>
 <section>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark  nav_bar_color">
  <a class="navbar-brand" href="#"><img class="d-block img-fluid logo" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/images/tib.jpg" ></a>
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
         <?php
echo do_shortcode( '[contact-form-7 id="31" title="form_test"  html_class="form_placement"]' );
?>


            </div>
 </section>
            </html>