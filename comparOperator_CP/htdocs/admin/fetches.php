<?php

require('../partials/classes/Manager.php');
require('../partials/cfg/db.php');
require('../partials/debug/pprint.php');

$manager = new Manager($db);

$data = $manager->getDestinationsByOperatorId(1);

foreach ($data as $d) {
    echo $d['location'] . '<br>';
}


// TODO:
