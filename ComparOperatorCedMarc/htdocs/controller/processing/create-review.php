<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
$idTO = $_GET['id'];
header( "refresh:5;url=/view/tour_operateurs.php?id=".$idTO );

$Manager = new Manager($bdd);
$review = new Review(
    null,
    $_POST['message'],
    $_POST['author'],
    $idTO
);

$Manager->createReview($review);

?>

<p>Merci pour votre message !! Il a bien été pris en compte !</p>
<p>Redirection automatique dans 3 secondes</p>
<p>
    <a href="/view/tour_operateurs.php?id=<?= $idTO ?>">Cliquez içi</a> pour être redirigé sans attendre.
</p>
