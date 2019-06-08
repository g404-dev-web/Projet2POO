<?php
include "objects/bdd.php";
include "objects/manager.php";
include "objects/destination.php";

if (isset($_POST['ok'])) {

	$folder = "img/";
	$image = $_FILES['image']['name'];
	$path = $folder . $image;
	$target_file = $folder . basename($_FILES["image"]["name"]);
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	$allowed = array('jpeg', 'png', 'jpg');
	$filename = $_FILES['image']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$location = (int)$_POST['location'];

	if (!in_array($ext, $allowed)) {

		echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
	} else {

		move_uploaded_file($_FILES['image']['tmp_name'], $path);
		$q = $bdd->prepare("UPDATE destinations SET image = ? WHERE id = ? ");
		$q->execute(array($image, $location));
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Signika&display=swap" rel="stylesheet">

	<title>Document</title>
</head>

<body>

	<!-- header -->
	<header>
		<?php include 'partial/header.php' ?>
	</header>
	<!-- header end -->
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="image" />
		<select name="location">
			<?php
			$reponse = $bdd->query('SELECT * FROM destinations');
			while ($donnees = $reponse->fetch()) {
				?>
				<option value="<?php echo $donnees['id']; ?>"> <?php echo $donnees['location']; ?></option>
			<?php
		}
		?>
		</select>
		<input type="submit" name="ok" />
		<a href="test.php">RETOUR</a>
	</form>

	<form action="" method="post">
		<input type="text" name="" id="">
		<input type="text" name="" id="">
		<input type="text" name="" id="">
		<input type="text" name="" id="">
		<input type="text" name="" id="">
		<input type="text" name="" id="">
	</form>
	<!-- footer -->
	<footer class="footer-operator">
		<?php include 'partial/footer.php' ?>
	</footer>
  <!-- footer end -->
  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
</body>
</html>