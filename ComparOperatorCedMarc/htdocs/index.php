<?php
//include our settings, connect to database etc.
// TODO include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
// TODO? $DATA=dbgetarr("SELECT * FROM links");
$pagetitle = "ComparOpérateur";
//etc
//and then call a template:
$tpl = "view/layouts/index.tpl.php";
include "view/layouts/main_layout.php";

