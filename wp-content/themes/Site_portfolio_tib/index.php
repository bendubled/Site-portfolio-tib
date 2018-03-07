

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
        <title>Titre</title>
    </head>
    <?php
// get_template_part("../../plugins/functions.php");
// get_template_part("../../plugins/create_table.php");
include_once (plugin_dir_path(__FILE__) . '../../plugins/functions.php');
// display_img();
 ?>
    <body>
        <section>
            <div class="container">
                <div data-tilt class="logo_home_bloc">
                    <img class="logo_home col-lg-12 col-md-12 col-12" src="wp-content/themes/Site_portfolio_tib/images/tib.jpg" alt="Papa Ours" />
                </div>
                <div class="row">  
                    <div class="logo_rs">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-google-plus-square fa-2x"></i>
                    </div>
                </div>
                <div  class="icone_contact_bloc">
                    <img class="icone_contact" src="wp-content/themes/Site_portfolio_tib/images/icone_black_contact.png" alt="CONTACT" />
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
        <script src="wp-content/themes/Site_portfolio_tib/libraries/tilt.js-master/dest/tilt.jquery.js"></script>
    </body>
</html>