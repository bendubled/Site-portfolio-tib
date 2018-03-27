
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



function display_img(){
    try {


        $db = openBDD();
        $bdd = $db->query("SELECT * FROM photo_home");
        $result = $bdd->fetch(); // retourne sous forme d'un tableau la PREMIERE valeur.
        
        foreach ($bdd as $result) {
//            $num_rows = mysql_num_rows($result);
//            echo "blalala :".$num_rows;
            
            $id= $result['id'];
//            if (mysql_num_rows($result)>0){
            
            echo '<div data-aos="zoom-in"  class="picture_bloc col-lg-3 col-md-6 col-12">' . '<a href=http://localhost/wordpress/page_photo/?param='.$id.'>' .
                   '<img data-tilt class="pict_size" src="' . $result['url'] . '"/>' . 
                    '<p id="'.$id .'" class="detail_photo_home">' . $result['id'] . '</p>'.
                     '</a>' .
                '</div>';
//            }
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
        $bdd = $db->query("SELECT * FROM photo_home WHERE id = " . $id);

        $result = $bdd->fetch();

        echo '<div class="row">' . '<div class="col-lg-4 details_text">'  .
              '<p style_details_pagge_photo>' . $result['titre'] . '</p>'  .'<p style_details_pagge_photo>' . $result['description'] .  '</p>' . '</div>' .
             '<img class="img_page_photo col-lg-8" src="' . $result['url'] . '" />'
        . '</div>';
    } catch (PDOException $e) {
        echo"pas bon";
        return $e->getMessage();
    }
}

