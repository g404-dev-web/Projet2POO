<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
header( "refresh:2;url=/admin/");

$Manager = new Manager($bdd);
$isPremium = $_POST['isPremium'];

if ( $isPremium == 0 )
{
    $isPremium = 1;
} else {
    $isPremium = 0; }

$Manager->updateTOIsPremium($isPremium, $_POST["TOId"]);

?>

<div class="container">
    <p>La valeurn de Premium du TO à bien été changé.</p>

    <p>Redirection automatique dans 2 secondes</p>
    <p>
	<a href="/admin/">Cliquez içi</a> pour être redirigé sans attendre.
    </p>
</div>
