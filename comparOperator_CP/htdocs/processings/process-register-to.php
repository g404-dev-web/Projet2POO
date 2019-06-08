<?php

if (isset($_POST['submit'])) {
    require('../partials/classes/Manager.php');
    require('../partials/debug/pprint.php');
    require('../partials/cfg/db.php');
    require('../partials/classes/TourOperator.php');

    if(empty($_POST['premium'])) $_POST['premium'] = 0;

    $manager = new Manager($db);

    $TourOperator = new TourOperator([
        'name' => $_POST['nomTO'],
        'link' => $_POST['lienTO'],
        'grade' => 0,
        'isPremium' => (int) $_POST['premium'],
        'logo' => $_FILES['logoTO'],
        ]);

    $manager->createTourOperator([
        'name' => $TourOperator->getName(),
        'link' => $TourOperator->getLink(),
        'grade' => $TourOperator->getGrade(),
        'isPremium' => $TourOperator->getIsPremium(),
        'logo' => $TourOperator->getLogo(),
    ]);

    $TourOperator->uploadLogoToServer();
}

header('Location: ../admin/create.php');
