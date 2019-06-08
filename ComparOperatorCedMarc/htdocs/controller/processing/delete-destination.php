<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
$destinationID = $_POST['destId'];

$Manager = new Manager($bdd);
$Manager->deleteDestination($destinationID);

header( "refresh:2;url=/admin/");
?>

<p>La destination à bien été supprimé.</p>

<p>Redirection automatique dans 2 secondes</p>
<p>
    <a href="/admin/">
	Cliquez içi
    </a> pour être redirigé sans attendre.
</p>

