<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . '/conf/conf.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?= $pagetitle ?></title>
	<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="/assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/styles/css/styles.css">
</head>

<body>
	<?php require $path . "/view/partials/header.php" ?>

	<?php require $tpl ?>

	<?php require $path . "/view/partials/footer.php" ?>

	<script src="/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
	<script src="/assets/vendor/popper/popper.1.15.0.min.js"></script>
	<script src="/assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="/assets/scripts/main.js"></script>
</body>


</html>
