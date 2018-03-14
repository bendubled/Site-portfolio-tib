<?php
/*
  Plugin Name: traitement_form
 */ 

 global $wpdb;
    $_POST['titre'];
//    $_POST['date'];
//    $_POST['details'];
//    $_POST['url'];
    
    
//    try {
//     $query = $wpdb->insert(
//                    'test', //table name
//                    array(
//                
//                'titre' => $details,
//                
//                    ), //columns
//                    array(
//                '%s',
//                
//                
//                    )
//            );
//    } catch (Exception $e) {
//        return $e->getMessage();
//    }
    
    
  
    try {


        $db = openBDD();
        $bdd = $db->query("INSERT INTO test VALUES");
        $result = $bdd->fetch(); // retourne sous forme d'un tableau la PREMIERE valeur.
     
    } catch (PDOException $e) {
        echo"pas bon";
        return $e->getMessage();
    }


?>