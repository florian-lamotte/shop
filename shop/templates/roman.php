<?php
	session_start();

	require_once("../boot.php");

	$livre = new Livre();
	$roman = $livre->findRoman();
?>

<div class="row">
	<?php 
		foreach ($roman as $r) {
			echo '<div class="col-md-4">';
				echo '<div class="fiche_livre col-md-12">';
					echo '<div class="col-md-6">';
						echo '<img class="couverture" src="images/' . $r->couverture . '">';
					echo '</div>';
					echo '<div class="col-md-6">';
						echo '<p>' . $r->auteur . '</p>';
						echo '<hr>';
						echo '<h4>' . $r->titre . '</h4>';	
						echo '<p>Parution : ' . $r->parution . '</p>';
						echo '<p>Prix : ' . $r->prix . ' €</p>';
						if (isset($_SESSION['pseudo'])) { 
							echo '<form method="get" action="templates/ajout_panier.php">
							<input type="hidden" name="id_livre" value="' . $r->id_livre . '" />
							<input type="submit" class="btn btn-success" value="Ajouter au panier" />
							</form>';
						}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	?>
</div>