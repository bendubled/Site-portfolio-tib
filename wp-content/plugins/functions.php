
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
            $id= $result['id'];
            echo '<div data-aos="zoom-in"  class="picture_bloc col-lg-3 col-md-6 col-12">' . '<a href=http://localhost/wordpress/page_photo/?param='.$id.'>' .
                   '<img data-tilt class="pict_size" src="' . $result['url'] . '"/>' . 
                    '<p id="'.$id .'" class="detail_photo_home">' . $result['id'] . '</p>'.
                     '</a>' .
                '</div>';
            $id++;
        }
    } catch (PDOException $e) {
        echo"pas bon";
        return $e->getMessage();
    }
}
function display_details_photo() {

    $id = $_GET['param'];


    try {


        $db = openBDD();
        $bdd = $db->query("SELECT * FROM tes WHERE id = " . $id);

        $result = $bdd->fetch();

        echo '<div class="row">' . '<div class="col-lg-4 details_text">' . '<p class="icone_contact_bloc">' .
             '<img class="icone_contact" src="http://localhost/wordpress/wp-content/themes/Site_portfolio_tib/images/icone_black_contact.png" alt="CONTACT" />' . '</p>' . '<p>' . $result['titre'] . '</p>' . '<p>' . $result['date'] . '</p>' . $result['details'] . '<p>' . '</p>' . '</div>' .
             '<img class="img_page_photo col-lg-8" src="' . $result['url'] . '" />'
        . '</div>';
    } catch (PDOException $e) {
        echo"pas bon";
        return $e->getMessage();
    }
}

//function form_insert_to_db(){
//    $titre = $_POST['titre'];
//    $date = $_POST['date'];
//    $details = $_POST['details'];
//    $url =$_POST['url'];
//    
//    global $wpdb;
//     $query = $wpdb->insert(
//                    'tes', //table name
//                    array(
//                'url'=> $url,
//                'details' => $titre,
//                'date' => $date,
//                'titre' => $details,
//                
//                    ), //columns
//                    array(
//                '%s',
//                '%s',
//                '%s',
//                '%s',
//                
//                    )
//            );
//}