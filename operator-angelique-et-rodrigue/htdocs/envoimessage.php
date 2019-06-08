<?php
require('objet/bdd.php');


try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=ComparOperatorAngRod;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$author = $_POST['author'];
$message = $_POST['message'];

$envoimessage = $bdd->prepare("INSERT INTO reviews(author, message) VALUES(?, ?)");
$envoimessage->execute(array($author,$message));

header('pageAgence.php');


