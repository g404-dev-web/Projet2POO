<?php
require('objet/bdd.php');
require('partials/nav.php');
require('objet/Destination.php');
require_once('objet/Manager.php');
require_once('objet/TourOperator.php');

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// die();


// $idTourOperator = $_POST['id_tour_operator'];
$manager = new Manager($bdd);
$location = $_POST['location'];
$dataOperator = $manager->getAllOperator('name');
$dataLocations = $manager->getAllDestination('location');
$locationByOperators = $manager->getReviewByOperator('tourOperator');
$locationByOperators = $manager->getOperateurByDestination($location);

?>

<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agences</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

</style>

<body>
    <!-- boucle tour operator -->
    <?php
    foreach ($locationByOperators as $locationByOperator) {
        $destination = new Destination($locationByOperator['id'], $locationByOperator['location'], $locationByOperator['price'], $locationByOperator['id_tour_operator'], $locationByOperator['image']);
        $operator = new TourOperator($locationByOperator['id'], $locationByOperator['name'], $locationByOperator['grade'], $locationByOperator['link'], $locationByOperator['is_premium'], $locationByOperator['img'], (int)$locationByOperator[1]);
        ?>
        <?php

        ?>

        <!-- Card tour operator -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo $operator->getImg() ?>" class="img_desti" alt="image">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <p class="card-text">
                            Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet; illud potius praecipiendum fuit, ut eam diligentiam
                            adhiberemus in amicitiis comparandis.<br>
                        </p>
                        <p class="card-text">
                            <strong class="text-muted">Prix : <?php echo $destination->getPrice() . ' €' ?></strong>
                        </p>
                        </p>
                        <div class="col-md-12">
                        <p class="card-text" >
                            <strong class="text-muted">Grade : <? $operator->getGrade()?></strong>
                        </p>  
                     </div>                 
                </div>
                </div>

                <!------------------------------------ Poster un commentaire -------------------------------->
                <?php
                try {
                    $bdd = new PDO('mysql:host=127.0.0.1;dbname=ComparOperatorAngRod;charset=utf8', 'root', '');
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
                ?>

<!-- card message -->
                <div class="col-md-20 offset-md-1 ">
                    <div class="card1" style="width: 80%">
                        <div class="card-body">

<!-- requete affichage message -->
                            <?php
                            $reponse = $bdd->query('SELECT * FROM reviews ORDER BY ID DESC LIMIT 0, 4');

                            $donnees = $reponse->fetchall();

                            foreach ($donnees as $donnee) {
                                echo "<pre>";
                                echo "<br>" . "<strong>" . "author: " . "</strong>" . $donnee['author'];
                                echo "<strong>" . "  message: " . "</strong>" . $donnee['message'] . "<br>";
                                echo "</pre>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
<!-- card poster message -->
                <div id="messages"></div>
                <div class="col-md-30 offset-md-1">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <form method="POST" action="pageAgence.php">

                                Pseudo : <input type="text" size="10" name="author" /><br />
                                Message : <textarea size="10" name="message"></textarea><br />
                                <input type="submit" size="10" name="submit" value="Envoyez votre message !" id="envoi   " />
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        </div>
        </div>
    <?php
}
?>

<!-- scrool -->
    </div>
    <a id="back2Top" title="Back to top" href="#" style="display: inline-block;">&#10148;</a>
    </div>

    <? require('partials/footer.php'); ?>

</body>

</html>