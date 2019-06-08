<?php

$nameDestination = $_POST['nameDestination'];
$nameTO = $_POST['nameTO'];
$priceDestination = $_POST['price'];

//chargement de la  class Manager
require "manager.php";
$bdd = new Manager('127.0.0.1');

//on récupère tous les operators de la bdd
$allOperator = $bdd->getAllOperator();


//on recher l'Id du TO séléctionner
foreach ($allOperator as $operator) {
    if ($nameTO == 'selectorDestination') {
        header('Location: ../pages/pagesAdmin/addNewDestinationTO.php?error=invalid');
        exit;
    }

    if ($operator['name'] == $nameTO) {
        $idTO = $operator['id'];
    }
}

$bdd->createDestination($nameDestination, $priceDestination, $idTO);
header('Location: ../pages/pagesAdmin/homePageAdmin.php?validation=Success');
