<?php

/*
 *
 * Plugin Name: Insertion des tables
 *
 */
include_once (plugin_dir_path(__FILE__) . 'parameters/parameters.php');
 

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
 if (function_exists('create_table')) {
                     create_table();
                    }

function create_table()
{
    $wpdb = openBDD();
    
    $wpdb->query("


DROP TABLE IF EXISTS `photo_home2`;
CREATE TABLE IF NOT EXISTS `photo_home2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
  
 ");
}