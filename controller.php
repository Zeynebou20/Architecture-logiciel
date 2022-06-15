<?php
    
require_once "modele/modele.php";

function run()
{
    $stmt=articles();
    $stmti = categories();
    require('view/accueil.php');
}

function categorie($id)
{
    $stmt=categorieModele($id);
    $stmti = categories();
    require('view/accueil.php');
}
