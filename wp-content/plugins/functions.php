
<?php

$connexion_string = "mysql:dbname=wordpress;localhost;charset=utf8";

$login = "root";

$mdp = "";

function openBDD()
{
    global $connexion_string;
    global $login;
    global $mdp;
    $bdd = new PDO($connexion_string, $login, $mdp);
    return $bdd;
}
//include_once (plugin_dir_path(__FILE__) . 'parameters/parameters.php');


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

        echo '<div class="row">' . '<div class="col-lg-4 details_text">'  .
              '<p style_details_pagge_photo>' . $result['titre'] . '</p>' . '<p style_details_pagge_photo>' . $result['date'] . '</p>' .'<p style_details_pagge_photo>' . $result['details'] .  '</p>' . '</div>' .
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
//lalala();
//function lalala(){
////    echo $_FILES['icone']['tmp_name'];
//    if ($_FILES['icone']['tmp_name'] == ""){ echo "error";
//    header('Location: ');
//    exit;
//    }
//
//
//    else{
//    
//    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
//
//    $extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
//    if (in_array($extension_upload, $extensions_valides))
//        echo "Extension correcte";
/////Créer un identifiant difficile à deviner
//    $nom = md5(uniqid(rand(), true));
//
//
//    $nom = "fichier/$nom.{$extension_upload}";
////    $resultat = move_uploaded_file($_FILES['icone']['tmp_name'], $nom);
////    
////    if ($resultat)
////        echo "Transfert réussi";
//
//    $url_img = "wp-content/plugin/$nom";
//
//    $titre = $_POST['titre'];
//    $description = $_POST['description'];
//    
////blabla($url_img);
// $db = openBDD();
//        $db->query("INSERT INTO `test`(`titre`, `url`, `description`) VALUES ('$titre', '$url_img', '$description')");
//        
//       header('Location: ');
//       
//    }
//}

//function blabla($url_img){
//    for($i=0;$i<1;$i++){
//        echo $i;
    
//    include "WP-ROOT-PATH/wp-config.php";
//$db = new mysqli(localhost, root, "", wordpress);
//// Test the connection:
//if (mysqli_connect_error()){
//    // Connection Error
//    exit("Couldn't connect to the database: ".mysqli_connect_error());
//}

//global $wpdb;
//$wpdb->insert(
//        'test', //table name
//        array(
//            'id'=> "",
//    'titre' => $url_img,
//        ), //columns
//        array(
//    '%d',
//    '%s',
//        )
//);
//echo "fonctionInsert";
//  $i=0;
//   $db = openBDD();
//        $db->query("INSERT INTO `test`(`titre`) VALUES ('$url_img')");
//// $result = $bdd->execute;
////        echo $bdd;
//        echo "FINfonctionInsert";
//         $i++;
//        echo "blabla:".$i;
//        exit;
       
//}

