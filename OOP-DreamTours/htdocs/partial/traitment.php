<?php

    require('../objects/manager.php');
    require('../objects/bdd.php');
    require('../objects/review.php');
    require('../objects/tour_operator.php');

    $message = $_POST['message'];
    $author = $_POST['author'];
    $rate = $_POST['rate'];
    $id_tour_operator = $_POST['id_tour_operator'];

    $review = new Review('id', $message, $author, $rate, $id_tour_operator);
    $manager = new Manager($bdd);
    $manager->createReview($review);
    $manager->getAverage('average');
    header('Location: ../reviews.php');

?>