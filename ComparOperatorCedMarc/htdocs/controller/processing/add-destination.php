<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
header( "refresh:2;url=/admin/");

$Manager = new Manager($bdd);

$folderImg = "assets/img/destinations/";
$target_dir = $path . "/" . $folderImg;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$id = null;
$priceDestination = $_POST['priceDestination'];
$nomDestination = $_POST['nomDestination'];
$descriptionDestination = $_POST['descriptionDestination'];
$idTO = $_POST['TOId'];
$imgPath = $folderImg . $_FILES["fileToUpload"]["name"];

$destination = new Destination(
    $id,
    $nomDestination,
    $priceDestination,
    $idTO,
    $imgPath,
    $descriptionDestination);

$Manager->addDestination($destination, $idTO);

?>

<div class="container">
    <p>La destination à bien été ajouté.</p>

    <p>Redirection automatique dans 2 secondes</p>
    <p>
	<a href="/admin/">Cliquez içi</a> pour être redirigé sans attendre.
    </p>
</div>
