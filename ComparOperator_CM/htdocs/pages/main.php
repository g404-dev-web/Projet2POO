<?php

//chargement de la  class Manager
require "../layout/manager.php";
//permet de charger automatiquement les classes dès qu'elles sont instanciées
function chargerClass($class)
{
    require "../partials/classes/" . $class . ".php";
}
spl_autoload_register('chargerClass');
$bdd = new Manager('192.168.1.15');
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

    <?php include('../partials/header.php') ?>

</head>
<?php include('../partials/callToActionBanner.php') ?>

<body>
    <?php
    //on récupère toutes les destinations dans la BDD
    $allDestinations = $bdd->getAllDestination();
    ?>

    <h3 class="titreContainerCard" id="titleContentDestinations">DÉCOUVREZ TOUTES NOS DESTINATIONS DE RÊVE</h3>
    <div class="container allCardDestination">
        <div class="row">
            <?php
            //pour chaque destinations
            foreach ($allDestinations as $destination) {

                //on récupère le nom de la destination
                $destination1 = new Destination($destination);
                $nameDestination = $destination1->getLocation();
                $imgDestiantion = $destination1->getImgName();

                //on affiche la card avec le nom de la destination
                $card = new Card($nameDestination, $imgDestiantion);
            }
            ?>
        </div>
    </div>
    <?php include('../partials/brandBanner.php') ?>
    <?php include('../partials/footer.php') ?>
</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>