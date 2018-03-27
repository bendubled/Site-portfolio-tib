<?php
/*
Template Name: page_photo
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
    <?php
    include_once (plugin_dir_path(__FILE__) . '../../plugins/functions.php');
// get_template_part("../../plugins/functions.php");
// get_template_part("../../plugins/create_table.php");
//include_once (plugin_dir_path(__FILE__) . '../../plugins/functions.php');
// display_img();
 ?>
   
    <body>
        <div class="fond">
            <section>
                <div class="container">

                    <nav class="navbar navbar-expand-lg navbar-dark  nav_bar_color">
  <a class="navbar-brand" href="#"><img class="d-block img-fluid logo" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/images/tib.jpg" alt=""></a>
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
                    <?php
                    if (function_exists('display_details_photo')) {
                        echo display_details_photo();
                        echo $_GET['param'];
                    }
                    ?>

                    <div class="row">  
                        <div class="logo_rs offset-10 clo-lg-12">
                            <i class="fab fa-twitter-square fa-2x"></i>
                            <i class="fab fa-facebook fa-2x"></i>
                            <i class="fab fa-google-plus-square fa-2x"></i>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </section>
            <script>
        AOS.init();
            </script>
            <script src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/libraries/tilt.js-master/dest/tilt.jquery.js"></script>
        </div>
    </body>
</html>