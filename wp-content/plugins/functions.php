
<?php
/*
  Plugin Name: function
 */
// include_once (plugin_dir_path(__FILE__) . '..wp-content/themes/Site_portfolio_tib/index.php');
//$connexion_string = "mysql:dbname=wordpress;host=127.0.0.1;charset=utf8";
//
//$login = "root";
//
//$mdp = "";
//
//function openBDD()
//
//{
//    global $connexion_string;
//    global $login;
//    global $mdp;
//    $bdd = new PDO($connexion_string, $login, $mdp);
//    return $bdd;
//    
//}
include_once (plugin_dir_path(__FILE__) . 'parameters/parameters.php');


function display_img(){
    try {


        $db = openBDD();
        $bdd = $db->query("SELECT * FROM photo_home");
        $result = $bdd->fetch(); // retourne sous forme d'un tableau la PREMIERE valeur.
        foreach ($bdd as $result) {
            echo '<div data-aos="zoom-in"  class="picture_bloc col-lg-3 col-md-6 col-12">' . 
                   '<img data-tilt class="pict_size" src="' . $result['url'] . '"/>' . 
                    '<p class="detail_photo_home">' . $result['id'] . '</p>'.
                '</div>';
        }
    } catch (PDOException $e) {
        echo"pas bon";
        return $e->getMessage();
    }
}

