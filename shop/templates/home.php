<?php
	session_start();

	require_once("../boot.php");

	$livre = new Livre();
	$livres = $livre->findAll();
	$parutions = $livre->findSixParutions();
?>

<div class="jumbotron">
	<h2>Dernières parutions</h2>
	<?php foreach ($parutions as $p) { ?>
		<div class="parutions col-md-2">
			<img class="couverture" src="images/<?php echo $p->couverture; ?>">
		</div>
	<?php } ?>
	<p>
		<a class="btn btn-default btn-lg" href="#/parutions" role="button" aria-label="Left Align">Les dernières parutions <span class="glyphicon glyphicon-forward" aria-hidden="true"></span></a>
	</p>
</div>

<div class="row">
<?php foreach ($livres as $l) { ?>
	<div class="col-md-4">
		<div class="fiche_livre">
			<div class="col-md-6">
				<img class="couverture" src="images/<?php echo $l->couverture; ?>">
			</div>
			<div class="col-md-6">
				<p><?php echo $l->auteur; ?></p><hr>
				<h4><?php echo $l->titre; ?></h4>	
				<p>Parution : <?php echo $l->parution; ?></p>
				<p>Prix : <?php echo $l->prix; ?> €</p>
				<?php if (isset($_SESSION['pseudo'])) { ?>
					<form method="get" action="templates/ajout_panier.php">
						<input type="hidden" name="id_livre" value="<?php echo $l->id_livre; ?>" />
						<input type="submit" class="bouton btn btn-success" value="Ajouter au panier" />
					</form>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
</div>
