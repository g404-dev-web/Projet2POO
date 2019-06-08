<?php

require('partials/nav.php');
require('objet/TourOperator.php');
require('objet/Destination.php');
require('objet/Review.php');
require('objet/bdd.php');

$manager = new Manager($bdd);
$dataLocations = $manager->getAllDestination('location');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($dataLocations as $dataLocation) {
                $destination = new destination($dataLocation['id'], $dataLocation['location'], $dataLocation['price'], $dataLocation['id_tour_operator'], $dataLocation['image']);
                ?>

                <div class="card col-5">
                    <h4>Destination : <?php echo $destination->getLocation() ?></h4>

                    <div class="row no-gutters">
                        <div class="col">
                            <img src="<?= $destination->getImage() ?>" class="img_desti" alt="image">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam<br>
                                    amicitiam valet; illud potius praecipiendum fuit.<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <form name="x" action="pageAgence.php" method="post">
                        <input type="hidden" name="location" value="<?= $destination->getLocation() ?>">
                        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Choisir cette destination">
                    </form>
                </div>

            <?php
        }
        ?>
        </div>
        <a id="back2Top" title="Back to top" href="#" style="display: inline-block;">&#10148;</a>
    </div>

    <? require('partials/footer.php'); ?>

</body>

</html>