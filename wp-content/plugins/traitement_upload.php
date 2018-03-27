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

    $nom = md5(uniqid(rand(), true));


    $nom = "fichier/$nom.{$extension_upload}";
   $resultat = move_uploaded_file($_FILES['icone']['tmp_name'], $nom);


    $url_img = "wp-content/plugins/$nom";

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    

 $db = openBDD();
        $db->query("INSERT INTO `photo_home`(`titre`, `url`, `description`) VALUES ('$titre', '$url_img', '$description')");
        
      header('Location: http://localhost/wordpress/page_admin/');
       
    }
}

?>



