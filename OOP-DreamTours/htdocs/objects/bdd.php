<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=dreamtours;charset=utf8", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);