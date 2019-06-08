<?php
$Manager = new Manager($bdd);

$TOs = $Manager->getTOsAsObjects();

?>
<main id="backOffice">
    <h1>Interface Administrateur</h1>
    <div class="container">

	<!-- Button trigger modal Ajout TO -->
	<button type="button" class="btn btn-primary big-button" data-toggle="modal" data-target="#modalTO">
	    Ajouter un Tour Opérateur
	</button>

	<!-- Modal Ajout TO -->
	<div class="modal fade" id="modalTO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		    </div>
		    <div class="modal-body">

			<form action="/controller/processing/add-TO.php" method="POST" enctype="multipart/form-data">
			    <div class="form-group">
				<label for="nomTO">Nom du Tour Opérateur</label>
				<input type="text" class="form-control" name="nomTO" placeholder="Nom du TO" required>
			    </div>

			    <div class="form-group">
				<label for="gradeTO">Note</label>
				<input type="number" class="form-control" name="gradeTO" placeholder="grade du TO" required>
				<small class="form-text text-muted">Note du TO sur 10</small>
			    </div>

			    <div class="form-group">
				<label for="linkTO">Lien du site web</label>
				<input type="text" class="form-control" name="linkTO" placeholder="lien site web"/>
				<small class="form-text text-muted">Site web du TO, sera affiché si premium.</small>
			    </div>

			    <div class="form-group">
				<label for="isPremium">Premium</label>
				<input type="number" class="form-control" name="isPremium" placeholder="O pour non 1 pour oui"/>
			    </div>

			    <div>
				<input type="file" name="fileToUpload" id="fileToUpload" required>
			    </div>
			    
			    <button type="submit" class="btn btn-primary">Envoyer</button>
			</form>
			
		    </div>
		    
		    <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		    </div>
		</div>
	    </div>
	</div>
	<!-- end modal Ajout TO -->
	
	<?php $i = 0 ?>
	<?php foreach ($TOs as $TO) : ?>
	    <?php $i++ ?>
            <div class="row destination TO-container-backOffice">
		<?php $destinations = $Manager->getDestinationsOfTOAsObjects($TO->getId()); ?>
		<div class="col-md-3 col-sm-12">
                    <img class="logo-to" src="/<?= $TO->getLogoPath() ?>" alt="logo TO">
		    <h2><?= $TO->getName() ?></h2>
		</div>

		<div class="col-md-3 col-sm-12">
                    <p><?= $TO->getLink() ?></p>
		    <p>Premium:
			<?php
			if ($TO->getIsPremium() == 1) { echo "Oui."; } else { echo "Non"; }; ?></p>

		    <form action="/controller/processing/toggle-premium.php" method="POST">
			<input type="hidden" name="TOId" value="<?php echo $TO->getId(); ?>">
			<input type="hidden" name="isPremium" value="<?php echo $TO->getIsPremium(); ?>">
			<button class="btn btn-info" name="submit">Toggle Premium</button>
		    </form>
		</div>

		<?php if ($destinations != null) : ?>
		    <div class="col-lg-3 col-md-12">
			<h3>Supprimer une destination</h3>
			<form action="/controller/processing/delete-destination.php" method="POST">
			    <select name="destId">
				<?php foreach ($destinations as $destination) : ?>
				    <option value="<?= $destination->getId() ?>"><?= $destination->getLocation() ?></option>
				<?php endforeach ?>
			    </select>
		    	    <button class="btn-danger btn" type="submit">Supprimer</button>
			</form>
		    </div>
		<?php endif ?>

		<?php if ($destinations == null) : ?>
		    <div class="col-lg-3 col-md-12">
			<p>Aucune destination actuellement enregistré dans la base de données pour ce Tour Opérateur.</p>
		    </div>
		<?php endif ?>
		
		
		<div class="col-lg-3 col-md-12">
		    <!-- Button trigger modal -->
		    <button type="button" class="btn btn-primary big-button" data-toggle="modal" data-target="#modal<?= $TO->getId(); ?>">
			Ajouter une destination
		    </button>

		    <!-- Modal -->
		    <div class="modal fade" id="modal<?= $TO->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
				<div class="modal-header">
				    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				    </button>
				</div>
				<div class="modal-body">

				    <form action="/controller/processing/add-destination.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="TOId" value="<?php echo $TO->getId(); ?>">
					<div class="form-group">
					    <label for="nomDestination">Nom de la destination</label>
					    <input type="text" class="form-control" name="nomDestination" placeholder="Nom de la destination" required>
					    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>

					<div class="form-group">
					    <label for="priceDestination">Prix</label>
					    <input type="text" class="form-control" name="priceDestination" placeholder="Prix" required>
					    <small class="form-text text-muted">Prix en euros par semaine</small>
					</div>

					<div class="form-group">
					    <label for="descriptionDestination">Description de la destination</label>
					    <textarea class="form-control" name="descriptionDestination" placeholder="Prix"> </textarea>
					    <small class="form-text text-muted">Mettre ici un texte qui décrit la destination proposé par le TO.</small>
					</div>

					<div>
					    <input type="file" name="fileToUpload" id="fileToUpload" required>
					</div>
					
					<button type="submit" class="btn btn-primary">Envoyer !</button>
					<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
				    </form>
				    
				</div>
				
				<div class="modal-footer">
				    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
				</div>
			    </div>
			</div>
		    </div>
		    <!-- end modal -->
		    
		</div>

            </div>
	<?php endforeach ?>
    </div>
</main>
