<?php
require "../../layout/manager.php";
require "../../partials/classes/TourOperator.php";
$bdd = new Manager('127.0.0.1');
$allOperators = $bdd->getAllOperator();

?>


<!DOCTYPE html>
<html id='htmlAdmin' lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ComparOperator/Ajout nouveau tour operateur</title>
</head>

<?php include('../../partials/headerAdmin.php') ?>
<body class="bodyAdmin">
    <?php include('../../partials/sidebar.php') ?>


    <!-- forumaire pour l'ajout d'un nouveau TO  -->
<div class="contentPage">
    <div class="formAdmin">
        <h3 class="titleForm">Ajouter un nouveau Tour Operateur</h3>
        <?php if (isset($_GET['error'])) {
            echo '<span class="text-danger">Ce tour opérateur est déjà enregistré dans la base de donnée !</span>';
        };
        ?>
        <form enctype="multipart/form-data" action="../../layout/addTourOperatorProcessing.php" method="post">
            <div class="form-group">
                <label for="nameTourOperator">Nom du Tour Operateur :</label>
                <input type="text" name="nameTourOperator" class="form-control" id="nameTourOperator" placeholder="Entrez le nom" required>
            </div>
            <div class="form-group">
                <label for="linkTourOperator">Lien vers le site du Tour Operateur : </label>
                <input type="text" class="form-control" name="linkTourOperator" id="linkTourOperator" placeholder="Entrez le lien" required>
                <small id="linkTourOperatorHelp" class="form-text" style="color:white">Le lien sera uniquement visible si le Tour Operatorest Premimum.</small>
            </div>
            <div class="form-group">
                <label for="addLogoTO">Ajouter un logo : </label>
                <input type="file" name="addLogoTO" id="addLogoTO" required>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
    </div>
</body>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>