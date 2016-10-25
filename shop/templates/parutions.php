<?php
	session_start();

	require_once("../boot.php");

	$livre = new Livre();
	$parutions = $livre->findQuinzeParutions();
?>

<div class="row">
	<?php 
		foreach ($parutions as $p) {
			echo '<div class="col-md-4">';
				echo '<div class="fiche_livre col-md-12">';
					echo '<div class="col-md-6">';
						echo '<img class="couverture" src="images/' . $p->couverture . '">';
					echo '</div>';
					echo '<div class="col-md-6">';
						echo '<p>' . $p->auteur . '</p>';
						echo '<hr>';
						echo '<h4>' . $p->titre . '</h4>';	
						echo '<p>Parution : ' . $p->parution . '</p>';
						echo '<p>Prix : ' . $p->prix . ' €</p>';
						if (isset($_SESSION['pseudo'])) { 
							echo '<form method="get" action="templates/ajout_panier.php">
							<input type="hidden" name="id_livre" value="' . $p->id_livre . '" />
							<input type="submit" class="btn btn-success" value="Ajouter au panier" />
							</form>';
						}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	?>
</div>