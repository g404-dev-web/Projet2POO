<?php

if (isset($_POST['submit'])) {
    require('../partials/classes/Manager.php');
    require('../partials/debug/pprint.php');
    require('../partials/cfg/db.php');
    require('../partials/classes/TourOperator.php');

    if (empty($_POST['premium'])) $_POST['premium'] = 0;

    $manager = new Manager($db);

    $TourOperator = new TourOperator([
        'id' => (int) $_POST['existingTos'],
        'name' => $_POST['updateName'],
        'link' => $_POST['lienTO'],
        'grade' => 0,
        'isPremium' => (int)$_POST['premium'],
        'logo' => $_FILES['logoTO'],
    ]);

    $manager->updateTourOperator([
        'name' => $TourOperator->getName(),
        'link' => $TourOperator->getLink(),
        'grade' => $TourOperator->getGrade(),
        'isPremium' => $TourOperator->getIsPremium(),
        'logo' => $TourOperator->getLogo(),
    ], $TourOperator->getId());

    $TourOperator->uploadLogoToServer();
}

header('Location: ../admin/update.php');
