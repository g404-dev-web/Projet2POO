<?php

$nameTourOperator = $_POST['nameTourOperator'];
$linkTourOperator = $_POST['linkTourOperator']; 

//chargement de la  class Manager
require "manager.php";
$bdd = new Manager('127.0.0.1');

//on récupère tous les operators de la bdd
$allOperator = $bdd->getAllOperator();


//on vérifie si il n'existe pas un TO qui à le même nom
foreach ($allOperator as $operator) {
    if ($operator['name']== $nameTourOperator){
        header('Location: ../pages/admin.php?error=invalidName'); 
        exit;
    }
}


    //envoi l'imageimporté par l'user vers notre dossier img
    $randomNum = rand(1,100);
    $uploads_dir = '../assets/img/logoTO';
    $name = $randomNum. $_FILES['addLogoTO']['name'];
    $tmp_name = $_FILES['addLogoTO']['tmp_name'];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    //on déclare une variable qui contient le nouveau chemin de l'image
    $imgPath = "$uploads_dir/$name";


$bdd->createTourOperator($nameTourOperator, $linkTourOperator, $imgPath);
header('Location: ../pages/pagesAdmin/homePageAdmin.php?validation1=success'); 
