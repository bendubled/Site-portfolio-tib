<?php

//global $wpdb;
//include_once (plugin_dir_path(__FILE__) . 'parameters/parameters.php');
//echo $_FILES[$index];
//echo $_FILES['icone']['name']  ;   //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
//echo $_FILES['icone']['type']  ;   //Le type du fichier. Par exemple, cela peut être « image/png ».
//echo $_FILES['icone']['size']   ;  //La taille du fichier en octets.
//echo $_FILES['icone']['tmp_name'] ;//L'adresse vers le fichier uploadé dans le répertoire temporaire.
//echo $_FILES['icone']['error'] ; 
//$index = $_FILES[$index];//Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
//upload($index,$destination,$maxsize=FALSE,$extensions=FALSE);
//function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
//{
//   //Test1: fichier correctement uploadé
//     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
//   //Test2: taille limite
////     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
//   //Test3: extension
//     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
//     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
//   //Déplacement
////     return move_uploaded_file($_FILES[$index]['s'],$destination);
    
  

//}
//add_action("blabla", "lalala");
//
//
//function lalala() {
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
//    $resultat = move_uploaded_file($_FILES['icone']['tmp_name'], $nom);
//    
//    if ($resultat)
//        echo "Transfert réussi";
//
//    $url_img = "wp-content/plugin/$nom";
//
//blabla($url_img);
//pause($url_img);
//}

//function pause($url_img){
//  $name1= $_FILES['icone']['name']  ; 
//$type= $_FILES['icone']['type']  ;   
//$size= $_FILES['icone']['size']   ;  
//$tmp_name1=$_FILES['icone']['tmp_name'] ;
//
//$url_img = $url_img;
//echo $name1  ;   
//echo $type  ;   
//echo $size   ;  
//echo $tmp_name1 ;
//
//blabla( $url_img);
//}
//  
//
//////Créer un dossier 'fichiers/1/'
////  mkdir('fichier/1/', 0777, true);
//// 


//    $_POST['titre'];
//    $_POST['date'];
//   $_POST['details'];
//    $_POST['url'];
//blabla($url_img);
//include_once (plugin_dir_path(__FILE__) . 'parameters/parameters.php');   
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
//
//  
//  
//
//}

//}
//    catch (Exception $e) {
//        return $e->getMessage();
//    }
   
    
  
//   try {
//
//
//       $db = openBDD();
//       $bdd = $db->query("INSERT INTO test VALUES");
//        $result = $bdd->fetch(); // retourne sous forme d'un tableau la PREMIERE valeur.
//    
//   } catch (PDOException $e) {
//       echo"pas bon";
//        return $e->getMessage();
//  }


  
                    

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







//
lalala();
function lalala(){
//    echo $_FILES['icone']['tmp_name'];
    if ($_FILES['icone']['tmp_name'] == ""){ echo "error";
    
    header('Location: http://localhost/wordpress/page_admin/');
    exit;
    }
//
//
    else{
    
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');

    $extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
    if (in_array($extension_upload, $extensions_valides))
        echo "Extension correcte";
///Créer un identifiant difficile à deviner
    $nom = md5(uniqid(rand(), true));


    $nom = "fichier/$nom.{$extension_upload}";
   $resultat = move_uploaded_file($_FILES['icone']['tmp_name'], $nom);
//    
//    if ($resultat)
//        echo "Transfert réussi";

    $url_img = "wp-content/plugin/$nom";

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    
//blabla($url_img);
 $db = openBDD();
        $db->query("INSERT INTO `test`(`titre`, `url`, `description`) VALUES ('$titre', '$url_img', '$description')");
        
      header('Location: http://localhost/wordpress/page_admin/');
       
    }
}
function multi_upload(){
    
    
}
?>



