<?php	
	require_once("../boot.php");

	$user = new Utilisateur();
	$donnees = $user->sessionUser();
?>

<div class="jumbotron">
	<h2>Votre profil utilisateur</h2>
	<p>
	    <?php
			foreach ($donnees as $d) {
				echo '<p>Nom <input type="text" class="form-control" value="' . $d->nom . '"></p>';
				echo '<p>Prenom <input type="text" class="form-control" value="' . $d->prenom . '"></p>';
				echo '<p>Mot de passe <input type="text" class="form-control" value="' . $d->mdp . '"></p>';
				echo '<p>Mail <input type="text" class="form-control" value="' . $d->mail . '"></p>';
				echo '<p>Inscription : ' . $d->inscription . '</p>';
				echo '<a href="" class="navbar-form"><button type="submit" class="btn btn-primary">Modifier</button></a>'; 
			}
		?>
	</p>
</div>