<?php
$idTO = $_GET['id'];
$Manager = new Manager($bdd);

$TO = $Manager->getTOAsObject($idTO);
$destinations = $Manager->getDestinationsOfTOAsObjects($idTO);
$reviews = $Manager->getAllReviewsAsObjects($idTO);
?>

<main id="review-to">
	<div class="container-fluid tour-operator">
		<section class="row">
			<div class="col-lg-4 col-md-12">
				<img class="logo-to" src="/<?= $TO->getLogoPath() ?>" alt="logo-operateur">
			</div>

			<div class="col-lg-4 col-md-12 name-to">
				<p><?= $TO->getName() ?></p>
			</div>

			<div class="col-lg-4 col-md-12 note">
				<p><?= $TO->getGrade() ?>/10</p>
			</div>
		</section>

		<!-- DEBUT PREMIUM -->
		<div class="container premium">
			<?php if ($TO->getIsPremium() == 1) {?>
			<a class="btn btn-info" href="<?= $TO->getLink() ?>" target="_blank">Notre Site</a> <?php }?>
		</div>
		<!-- FIN PREMIUM -->

		<h2>Destinations proposés :</h2>
		<!-- DEBUT CAROUSEL -->
		<section class="container" id="carouselDest">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $i = 0 ?>
					<?php foreach ($destinations as $destination) : ?>
						<li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?php if ($i == 1) : ?>active<?php endif ?>"></li>
						<?php $i++; ?>
					<?php endforeach ?>
				</ol>

				<div class="carousel-inner">
					<?php $i = 0 ?>
					<?php foreach ($destinations as $destination) : ?>
						<?php $i++; ?>

						<div class="carousel-item <?php if ($i == 1) : ?>active<?php endif ?>">
							<img src="/<?= $destination->getImgPath(); ?>" class="d-block w-100" alt="Image voyage">
							<h2><?= $destination->getLocation() ?></h2>
							<h3 class=""><?= $destination->getPrice() ?> euros / semaine</h3>
						</div>
					<?php endforeach ?>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Précédent</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div>
		</section>
				<!-- FIN CAROUSEL -->
	</div>
	</div>
</main>


				<!-- ######                                       
     				#     # ###### #    # # ###### #    #  ####  
     				#     # #      #    # # #      #    # #      
     				######  #####  #    # # #####  #    #  ####  
     				#   #   #      #    # # #      # ## #      # 
     				#    #  #       #  #  # #      ##  ## #    # 
     				#     # ######   ##   # ###### #    #  ####  
				-->

<section id="reviews" class="container">
	<?php if ($reviews != null) : ?>
		<?php foreach ($reviews as $review) : ?>
			<div>
				<h2 class="nameAuthor"><?= $review->getAuthor() ?></h2>

				<div class="container-bubble">
					<div class="bubble"></div>
					<blockquote>
					    <?= $review->getMessage() ?>
					</blockquote>
				</div>
			</div>
		<?php endforeach ?>
	<?php endif ?>
</section>


<!-- ######                                   #######                      
     #     # ###### #    # # ###### #    #    #        ####  #####  #    # 
     #     # #      #    # # #      #    #    #       #    # #    # ##  ## 
     ######  #####  #    # # #####  #    #    #####   #    # #    # # ## # 
     #   #   #      #    # # #      # ## #    #       #    # #####  #    # 
     #    #  #       #  #  # #      ##  ##    #       #    # #   #  #    # 
     #     # ######   ##   # ###### #    #    #        ####  #    # #    #  -->

<hr>

<section>
    <div class="container">
	<h2>Laissez un commentaire à propos du Tour Opérateur</h2>
	<form action="/controller/processing/create-review.php?id=<?= $idTO ?>" method="POST">
	    <div class="form-group">
		<label for="Author">Votre nom</label>
		<input type="text" name="author" class="form-control" id="Author" placeholder="VotreNom" required>
	    </div>

	    <div class="form-group">
		<label for="message">Votre message</label>
		<textarea name="message" class="form-control" id="message" rows="3" required></textarea>
	    </div>

	    <div class="col-auto">
		<button type="submit" class="btn btn-primary mb-2">Submit</button>
	    </div>
	</form>
    </div>
</section>
