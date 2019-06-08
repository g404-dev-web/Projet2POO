<?php

$destinationLocation = $_GET['location'];
/* echo $destinationLocation;*/
$Manager = new Manager($bdd);
/* $allDestinations = $Manager->getAllDestinationsASObjects(); */
$TOs = $Manager->getTOsByDestinationAsObjects($destinationLocation);
?>

<!-- Tu peux t'inspirer de ça pour créer ta page : -->
<?php foreach ($TOs as $TO) : ?>
    <?php $destination = $Manager->getDestinationOfTO($destinationLocation, $TO->getId()); ?>
    <div class="container-fluid">
	<div class="row tour-operator">
	    <div class="col-lg-4 col-md-12">
		<img class="logo-to" src="/<?= $TO->getLogoPath() ?>" alt="logo-operateur">
	    </div>
	    <div class="col-lg-4 col-md-12 description-to">
		<h2><?= $TO->getName() ?></h2>
		<p>
		    <?= $destination->getDescription(); ?>
		</p>
	    </div>
	    <div class="col-lg-4 col-md-12">
		<div class="note">
		    <p><?= $TO->getGrade() ?>/10</p>
		</div>
		<div class="price">
		    <p><?= $destination->getPrice(); ?>€ / semaine</p>
		</div>

		<div class="container-btn">
		    <a class="btn btn-info" href="#">Réservez-moi</a>
		    <a class="btn btn-info" href="/view/tour_operateurs.php?id=<?= $TO->getId()?>">
			Résumé Tour Opérateur
		    </a>
		</div>
	    </div>
	</div>
    </div>
<?php endforeach ?>
