<?php
require('../partials/classes/Manager.php');
require('../partials/debug/pprint.php');
require('../partials/cfg/db.php');
require('../partials/classes/Review.php');
require('../partials/classes/TourOperator.php');

if (isset($_GET['to'])) {
    $manager = new Manager($db);
    $data = $manager->getReviewsByOperatorId($_GET['to']);
} else {
    die('Pas de get');
}


$manager = new Manager($db);

$dataOperatorById = $manager->getOperatorById($_GET['to']);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>commentaires</title>

    <style>
        #logoById {
            padding: 30px;
            text-transform: capitalize;
        }
    </style>

</head>

<body>
    <?php require('../partials/navbar.php') ?>

    <?php

    // pprint($dataOperatorById);

    // foreach ($dataOperatorById as $value) {
    //     echo $value['logo'];
    // }

    ?>
    <div id="logoById" class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center">
                <?php echo '<img  src="../assets/uploads/operators/' . $dataOperatorById[0]['logo'] . '" alt="logo du to " width="150px" height="150px">';
                ?>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center">

                <?php
                echo $dataOperatorById[0]['name'];
                ?>
            </div>

        </div>
    </div>
    <!-- Formulaire our laisser un commentaire -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <form action="../processings/process-review.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <input class="form-control" name="nom" type="text" placeholder="Nom ou pseudo" required>
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <textarea rows="1" class="form-control" name="commentaireTO" type="text" placeholder="Laisser votre review" required></textarea>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <select name="grades" class="form-control">
                    <option value="0">Laissez une note</option>
                    <option value="1" style="color: orange;">&starf;&star;&star;&star;&star;</option>
                    <option value="2" style="color: orange;">&starf;&starf;&star;&star;&star;</option>
                    <option value="3" style="color: orange;">&starf;&starf;&starf;&star;&star;</option>
                    <option value="4" style="color: orange;">&starf;&starf;&starf;&starf;&star;</option>
                    <option value="5" style="color: orange;">&starf;&starf;&starf;&starf;&starf;</option>
                </select>
            </div>

            <input type="hidden" name="to" value="<?= $_GET['to'] ?>">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex mt-3 justify-content-center">
                <button id="btn-commentaire" name="submit" class="btn btn-outline-orange" type="submit">Envoyer votre review</button>
            </div>
            </form>
        </div>
    </div>

    <!-- affichage des commentaires -->

    <div id="affichageCommentaire" class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Pseudo</th>
                                <th>Commentaire</th>
                                <th>Note</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $d) {
                                    $d['grade'] = $manager->drawGrades($d['grade']);
                                    echo '
                                    <tr>
                                    <td>' . $d['author'] . '</td>
                                    <td>' . $d['message'] . '</td>
                                    <td style="color: orange; user-select:none;">' . $d['grade'] . '</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FIN DU BLOCK COMMENTAIRE -->

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>
