<?php
session_start();
if (empty($_SESSION['user'])) header('Location: index.php');

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
    <?php require('../partials/navbar.php'); ?>
    <?php require('../partials/sidebar.php');  ?>

    <div class="container adminIndex">
        <form action="../processings/process-update-to.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="form-group d-flex justify-content-center">
                        <input type="file" style="display: none;" name="logoTO" accept="image/png, image/jpeg, image/jpg" required>
                        <button onclick="document.querySelector('[type=file]').click();">Parcourir</button>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="form-group d-flex justify-content-center">
                        <select onchange="document.querySelector('[name=updateName]').value =document.querySelector('#jecpa').options[document.querySelector('#jecpa').selectedIndex].innerText.trim().charAt(0).toUpperCase()+document.querySelector('#jecpa').options[document.querySelector('#jecpa').selectedIndex].innerText.trim().slice(1)" style="text-transform: capitalize;" name="existingTos" id="jecpa">
                            <?php
                            $manager = new Manager($db);
                            $data = $manager->getAllOperators();

                            foreach ($data as $d) {
                                echo
                                    "<option value=\"{$d['id']}\" style=\"text-transform: capitalize;\">
                                        {$d['name']}
                                    </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <input class="form-control shadow" name="updateName" type="text" required>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <input class="form-control shadow" name="lienTO" type="text" placeholder="Entrer le lien du site vers le T.O" required>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Premium</label>
                        <input name="premium" value="1" type="checkbox">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <button name="submit" class="btn btn-outline-orange" type="submit">
                        Enregistrer votre T.O
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
