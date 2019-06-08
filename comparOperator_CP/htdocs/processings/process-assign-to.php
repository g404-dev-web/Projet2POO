<?php

if (isset($_POST['submit'])) {
    require('../partials/classes/Manager.php');
    require('../partials/debug/pprint.php');
    require('../partials/cfg/db.php');
    require('../partials/classes/Destination.php');
    require('../partials/classes/TourOperator.php');

    $manager = new Manager($db);

    $toAssignDestination = new Destination([
        'location' => $_POST['destinationSelect'],
        'price' => $_POST['prix'],
        'idTourOperator' => (int) $_POST['toSelect'],
        ]);

    $manager->createDestination([
        'location' => $toAssignDestination->getLocation(),
        'price' => $toAssignDestination->getPrice(),
        'idTourOperator' => $toAssignDestination->getIdTourOperator(),
    ]);

}

header('Location: ../admin/assign.php');

