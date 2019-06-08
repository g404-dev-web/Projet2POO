<?php
$Manager = new Manager($bdd);
$allDestinations = $Manager->getAllDestinationsASObjects();
?>

<div class="d-flex container-destinations">
    <?php foreach ($allDestinations as $destination) : ?>
        <div class="col-md-3 container destination">

	    <div class="row">
		<div class="col-12 paddingZero">
                    <img class="img_description"
			 src="<?= $destination->getImgPath() ?>" alt="travel image">
                    <h2><?= $destination->getLocation() ?></h2>
		</div>

		<div class="container">
		    <div class="row container-description-and-btn">
			<div class="col-6 text_description">
			    <p><?= $destination->getDescription() ?></p>
			</div>
			
			<div class="col-6 container-btn btn">
			    <a class="btn btn-info"
			       href="/view/destinations.php?location=<?= $destination->getLocation() ?>">
				Voir les opérateurs pour cette destination.
			    </a>
			</div>
		    </div>
		</div>
		
	    </div>
	    
        </div>
    <?php endforeach ?>
</div>
