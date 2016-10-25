<?php
	session_start();
	
	require_once("../boot.php");

	$livre = new Livre();
	$manga = $livre->findManga();
?>

<div class="row">
	<?php 
		foreach ($manga as $m) {
			echo '<div class="col-md-4">';
				echo '<div class="fiche_livre col-md-12">';
					echo '<div class="col-md-6">';
						echo '<img class="couverture" src="images/' . $m->couverture . '">';
					echo '</div>';
					echo '<div class="col-md-6">';
						echo '<p>' . $m->auteur . '</p>';
						echo '<hr>';
						echo '<h4>' . $m->titre . '</h4>';	
						echo '<p>Parution : ' . $m->parution . '</p>';
						echo '<p>Prix : ' . $m->prix . ' €</p>';
						if (isset($_SESSION['pseudo'])) { 
							echo '<form method="get" action="templates/ajout_panier.php">
							<input type="hidden" name="id_livre" value="' . $m->id_livre . '" />
							<input type="submit" class="btn btn-success" value="Ajouter au panier" />
							</form>';
						}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	?>
</div>