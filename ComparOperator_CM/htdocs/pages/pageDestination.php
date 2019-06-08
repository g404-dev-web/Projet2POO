<?php

//chargement de la  class Manager
require "../layout/manager.php";
//permet de charger automatiquement les classes dès qu'elles sont instanciées
function chargerClass($class)
{
  require "../partials/classes/" . $class . ".php";
}
spl_autoload_register('chargerClass');


$bdd = new Manager('127.0.0.1');
$nameDestination = $_GET['selectionDestination'];
//on séléctionne tous les TO qui proposent un séjour pour la destiantion choisie
$allOperators = $bdd->getOperatorByDestination($nameDestination);

//on séléctionne toutes la table destinations 
$allDestinations = $bdd->getAllDestination();

//on séléctionne toutes les infos de la destination qui a été selectionnée
foreach ($allDestinations as $destination) {
  if ($destination['location'] == $nameDestination) {
    $destinationSelected = new Destination($destination);
    $destinationSelectedName = $destinationSelected->getLocation();
    $destinationSelectedImg = $destinationSelected->getImgName();
  }
}

require "../partials/classes/Card.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <title>ComparOperator</title>
</head>
<?php include('../partials/header.php'); ?>

<body>


  <section id="imageDestination" style="background: url(../assets/img/<?php echo ($destinationSelectedImg) ?>);background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="titleDestination">
      <h2>Nos séjours :  <?= $destinationSelectedName ?> </h2>
    </div>
  </section>

  <div class="destinationParagraphe">
    <h3>Occaecat ex irure proident </h3>
    <p>Exercitation culpa Lorem laboris ad nisi veniam labore nostrud cillum adipisicing ipsum. Cupidatat cillum eu culpa aliqua enim excepteur labore in cupidatat excepteur in elit sint ad. Eiusmod consectetur proident quis aute enim dolore ex nulla. Nisi est ullamco pariatur irure et enim do occaecat anim amet reprehenderit voluptate sint tempor. Ipsum culpa ipsum irure ex non. Tempor et commodo nisi nulla deserunt voluptate occaecat magna. Duis consequat officia Lorem fugiat incididunt voluptate est ullamco labore elit consectetur.</p>
    <h3>Quis laboris enim aliqua dolor ! </h3>
    <p>Excepteur voluptate adipisicing sit consectetur sunt tempor quis Lorem non. Sit laborum ex irure sunt laborum proident magna sit esse esse ex dolor pariatur labore. Fugiat adipisicing incididunt sint cillum sunt mollit irure cupidatat duis excepteur ea cillum dolor labore.</p>
  </div>

  <h3 class="titreContainerCard">TOUS NOS TOURS OPÉRATEURS </h3>
  <div class="container">
    <div class="row justify-content-center">
      <?php
      foreach ($allOperators as $operator) {
        $nameTO = $operator['name'];
        $priceDestinationTO = $operator['price'];
        $logoTO = $operator['imgPath'];
        $idOperator = $operator['id'];
        $opertorNumberOfGrade = $operator['numberOfGrade'];
        $allReviewsByOperator= $bdd->getReviewByOperatorId($idOperator);

        $cardDestinationByTO = new CardDestinationTO($nameTO, $priceDestinationTO, $logoTO, $idOperator, $allReviewsByOperator,$destinationSelectedName, $opertorNumberOfGrade);
      }
      ?>



      <?php include('../partials/brandBanner.php') ?>
      <?php include('../partials/footer.php') ?>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script>
  //set button id on click to hide first modal
</script>

</html>