<?php

$message = $_POST['review'];
$nameAuthor = $_POST['nameAuthor']; 
$idOperator = $_POST['idOperator'];
$nameDestination = $_POST['nameDestination'];
$grade = $_POST['grade'];


//chargement de la  class Manager
require "manager.php";
$bdd = new Manager('127.0.0.1');

$bdd->createReview($message, $nameAuthor, $idOperator);
$bdd->updateGrade($grade, $idOperator);
header('Location: ../pages/pageDestination.php?selectionDestination='.$nameDestination.''); 