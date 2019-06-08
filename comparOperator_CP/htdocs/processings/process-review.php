<?php
require('../partials/classes/Manager.php');
require('../partials/debug/pprint.php');
require('../partials/cfg/db.php');
require('../partials/classes/Review.php');

$manager = new Manager($db);

if (isset($_POST['submit'])) {
	$review = new Review([
		'author' => $_POST['nom'],
		'message' => $_POST['commentaireTO'],
		'idTourOperator' => (int)$_POST['to'],
		'grade' => (int)$_POST['grades']
	]);

	$manager->createReview([
		'author' => $review->getAuthor(),
		'message' => $review->getMessage(),
		'idTourOperator' => $review->getIdTourOperator(),
		'grade' => $review->getGrade()
	]);

	$avg = $manager->getAverageGradeByOperatorId($review->getIdTourOperator());
	$manager->updateAverageGradeForOperatorId($avg, $review->getIdTourOperator());
}

header('Location: ../pages/review.php?to=' . $_POST['to']);
