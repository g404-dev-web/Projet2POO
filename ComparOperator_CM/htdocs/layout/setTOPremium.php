<?php

$nameTO = $_POST['nameTO']; 
$isPremium = $_POST['checkPremium'];

//chargement de la  class Manager
require "manager.php";
$bdd = new Manager('127.0.0.1');

//on récupère tous les operators de la bdd
$allOperator = $bdd->getAllOperator();


//on recherche l'Id du TO séléctionner et on vérifie qu'il n'est pas déjà Premium
foreach ($allOperator as $operator) {
    if ($operator['name']== $nameTO){
        $idTO= $operator['id'];
        if ($operator['is_premium']>=1){
            header('Location: ../pages/pagesAdmin/updateToPremium.php?error=invalid'); 
            exit;
        } 
    }
}

$bdd->updateOperatorToPremium($idTO);
header('Location: ../pages/pagesAdmin/homePageAdmin.php?validation2=Success'); 
