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