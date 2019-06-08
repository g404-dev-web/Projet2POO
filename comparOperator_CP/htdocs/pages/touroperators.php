<?php
require('../partials/classes/Manager.php');
require('../partials/classes/Destination.php');
require('../partials/cfg/db.php');
require('../partials/debug/pprint.php');
$manager = new Manager($db);

$allowedDestinations = [
    'maroc',
    'bresil',
    'japon',
    'portugal',
    'japon',
    'usa',
    'mexique',
    'france',
    'ile maurice',
    'espagne',
    'test'
];

$maxReviewLength = 100;
$maxNickLength = 12;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Nos agences de voyages partenaires</title>
</head>

<body class="page-to">
    <?php require('../partials/navbar.php') ?>

    <div class="container to">
        <?php
        if (isset($_GET['destination'])) {
            $destination = htmlspecialchars($_GET['destination']);

            $dest = new Destination([
                'location' => $destination,
            ]);

            if (in_array($destination, $allowedDestinations)) {
                $operators = $manager->getOperatorByDestination(str_replace(' ', '', $destination));
                if ($operators == null) echo "<h5 class=\"text-center\">Il n'y a pas de TO pour cette destination.</h5>";
                foreach ($operators as $operator) {
                    $allDestinations = $manager->getDestinationsByOperatorId($operator['id']);
                    $dataMessages = $manager->getReviewsByOperatorId($operator['id'], 0, 3);


                    echo "<div class=\"row mb-5\">
                    <div class=\"card col-10 col-sm-12 col-md-12 mx-auto shadow\">
                        <div class=\"row no-gutters\">
                            <div class=\"card-logo col-10 col-sm-4 col-md-2 my-3 ml-3\">
                                <a href=\"#\">
                            <img class=\"shadow-sm img-operator img-fluid\" src=\"../assets/uploads/operators/{$operator['logo']}\" alt=\"picsum\">
                        </a>
                        ";
                    if ($manager->isOperatorPremium($operator['id'])) {
                        echo "<div class=\"premium mt-3 d-flex justify-content-center\">
                                <a href=\"{$operator['link']}\" target=\"_blank\" class=\"btn btn-outline-orange w-100\">Visiter</a>
                            </div>";
                    }
                    $grade = $manager->getAverageGradeByOperatorId($operator['id']);
                    echo " </div>
                    <div class=\"card-description col-10 col-sm-7 col-md-9 my-3 ml-3 text-center\">
                        <div class=\"row no-gutters\">
                            <div class=\"name col-12 col-sm-12 col-md-12 col-lg-8\">
                                {$operator['name']} &nbsp; <span class=\"stars\">" .
                        $manager->drawGrades((int)$grade) . "</span>";
                    echo "
                            </div>
                            <div class=\"location col-12 col-sm-9 col-md-9 col-lg-4 pt-2 mb-3\">
                                {$destination}
                            </div>
                        </div>
                        <div class=\"row no-gutters\">
                            <div class=\"review col-12 col-sm-8 col-md-9 col-lg-10\">
                            ";
                    foreach ($dataMessages as $n => $data) {
                        if (strlen($data['message']) > $maxReviewLength) {
                            $data['message'] = trim(substr($data['message'], 0, 100)) . '...';
                        }
                        if (strlen($data['author']) > $maxNickLength) {
                            $data['author'] = substr($data['author'], 0, 15);
                        }

                        if ($n % 2 == 0) {
                            echo "<p class=\"message even\">
                                        <span class=\"grade d-flex justify-content-center flex-wrap\">

                                        </span>
                                        <i>{$data['author']} :</i> {$data['message']}
                                    </p>";
                        } else {
                            echo "<p class=\"message odd\">
                                    <span class=\"grade d-flex justify-content-center flex-wrap\">

                                    </span>
                                    <i>{$data['author']} :</i> {$data['message']}
                                    </p>";
                        }
                    }
                    echo "</div>
                            <div class=\"price col-12 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center align-items-center\"><span class=\"currency\">
                            ";
                    foreach ($allDestinations as $dest) {
                        if ($dest['location'] == $destination && $dest['id_tour_operator'] == $operator['id']) {
                            echo $dest['price'] . '€';
                        }
                    }


                    echo "</span></div>
                        </div>
                        <!-- Makes the whole card clickable -->
                        <a href=\"review.php?to={$operator['id']}\" class=\"stretched-link\"></a>
                        </div>
                        </div>
                    </div>
                    </div>
                ";
                }
            }
        } ?>
    </div>
</body>

<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/script.js"></script>
</body>

</html>
