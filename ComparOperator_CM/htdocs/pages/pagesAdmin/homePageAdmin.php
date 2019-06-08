<?php
require "../../layout/manager.php";
require "../../partials/classes/Destination.php";
require "../../partials/classes/TourOperator.php";
$bdd = new Manager('127.0.0.1');
$allDestinations = $bdd->getAllDestination();
$allOperators = $bdd->getAllOperator();

?>


<!DOCTYPE html>
<html id ='htmlAdmin' lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ComparOperator/Administrateur</title>
</head>

<?php include('../../partials/headerAdmin.php') ?>

<body id="bodyAdmin">
    <?php include('../../partials/sidebar.php') ?>

<div class="contentPage">
    <?php if (isset($_GET['validation'])) {
            echo '<p class="successMessage">La nouvelle destination a bien été enregistré!</p>';
        } else if (isset($_GET['validation1'])) {
            echo '<p class="successMessage">Le nouveau tour opérateur a bien été enregistré!</p>';
        } else if (isset($_GET['validation2'])) {
            echo '<p class="successMessage">Le  tour opérateur est bien passé en Premium!</p>';
        }?>
</div>

</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>