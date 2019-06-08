<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
header( "refresh:2;url=/admin/");

$Manager = new Manager($bdd);

$folderImg = "assets/img/logo/";
require $path . '/controller/processing/process_uploaded_img_file.php';

$id = null;
$TOName = $_POST['nomTO'];
$gradeTO = $_POST['gradeTO'];
$linkTO = $_POST['linkTO'];
$isPremium = $_POST['isPremium'];
$logoPath = $folderImg . $_FILES["fileToUpload"]["name"];

$TO = new TourOperator(
    $id,
    $TOName,
    $gradeTO,
    $linkTO,
    $isPremium,
    $logoPath);

$Manager->addTO($TO);

?>

<div class="container">
    <p>Le TO a bien été ajouté.</p>

    <p>Redirection automatique dans 2 secondes</p>
    <p>
	<a href="/admin/">Cliquez içi</a> pour être redirigé sans attendre.
    </p>
</div>
