<?php
require_once('objet/Manager.php');

  try {

    $bdd = new PDO("mysql:host=127.0.0.1;dbname=ComparOperatorAngRod", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {

    die("Oops !");
  }

?>