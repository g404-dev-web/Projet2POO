<?php
session_start();
require('../partials/classes/Manager.php');
require('../partials/classes/Destination.php');
require('../partials/cfg/db.php');
require('../partials/debug/pprint.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Administrateur</title>

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="w-100">
            <?php if (isset($_GET['err'])) echo '<h5 style="color:red;font-weight:bold;">Identifiants incorrects</h5>';  ?>
            <form action="../processings/process-admin.php" method="POST" autocomplete="off">
                <input class="form-control" type="text" name="login" placeholder="Identifiant">
                <input class="form-control mt-3" type="password" name="password" placeholder="Mot de passe">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-orange w-100 mt-5" name="submit" type="submit">Connexion</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
