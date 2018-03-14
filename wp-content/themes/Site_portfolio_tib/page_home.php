<?php
/*
Template Name: page_home
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="wp-content/themes/Site_portfolio_tib/style.css" />
   
        <link rel="stylesheet" href="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.css" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
       <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
       <script type="text/javascript" src="wp-content/themes/Site_portfolio_tib/custom/requete.js"></script>
       <script type="text/javascript" src="wp-content/themes/Site_portfolio_tib/libraries/jQuery/jquery-3.2.1.js"></script>
       <script src="wp-content/themes/Site_portfolio_tib/libraries/aos-master/aos-master/dist/aos.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       
       

        <title>Home</title>
    </head>
    <?php

include_once (plugin_dir_path(__FILE__) . '../../plugins/functions.php');

 ?>
    <body>
   
        <section>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark  nav_bar_color">
  <a class="navbar-brand" href="#"><img class="d-block img-fluid logo" src="wp-content/themes/Site_portfolio_tib/images/tib.jpg" alt="First slide"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Contact</a>
      <a class="nav-item nav-link" href="http://localhost/wordpress/page_admin/">Administration</a>
       
      
    </div>
  </div>
</nav>
<div class="row">  
                    <div class="logo_rs">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-google-plus-square fa-2x"></i>
                    </div>
                </div>
                <div>
                   <p class="style_citation"> <span class="taille_cote_citation">"</span>Si vous vous contentez de voir ce qui est évident, vous ne verrez rien<span class="taille_cote_citation">"</span></p>
                </div>
                
                <div class="cadre_car col-lg-12 col-md-12 col-12">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item item active taille2">
      <img class="d-block img-fluid taille" src="wp-content/themes/Site_portfolio_tib/images/chatea-nantes.jpg" alt="First slide">
    </div>
    <div class="carousel-item item">
      <img class="d-block img-fluid taille" src="wp-content/themes/Site_portfolio_tib/images/lambiotte.jpg" alt="Second slide">
    </div>
    <div class="carousel-item item">
      <img class="d-block img-fluid taille" src="wp-content/themes/Site_portfolio_tib/images/Tourismus.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                </div>



<div class="row col-lg-6">
    <p class="col-lg-3 col-md-6 title_bar_photo">EAU</p>
    <p class="col-lg-3 col-md-6 title_bar_photo">TERRE</p>
    <p class="col-lg-3 col-md-6 title_bar_photo">AIR</p>
    <p class="col-lg-3 col-md-6 title_bar_photo">FEU</p>
</div>
                <div id="list_photos" class="row">
                    <?php
                     if (function_exists('display_img')) {
                     echo display_img();
                    }
                    ?>
                    
                </div>
            </div>
        </section>
        <script>
    AOS.init();
        </script>
        <script>
$('.carousel').carousel({
  interval: 4000
})
</script>
        <script src="wp-content/themes/Site_portfolio_tib/libraries/tilt.js-master/dest/tilt.jquery.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    </body>
</html>
