<?php
	session_start();
	
	require_once("../boot.php");

	$auteur = new Auteur();
	$auteurs = $auteur->findAll();
?>

<div class="jumbotron">
	<?php
		foreach ($auteurs as $a) {
			echo '<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">' . $a->auteur . ' <span class="caret"></span></button>
			<ul class="dropdown-menu">';
				$livresByAuteur = $auteur->livresByAuteur($a->auteur);
				foreach ($livresByAuteur as $livres){
					echo '<li><a href="#">' . $livres->titre . '</a></li>';
				}
	    	echo '</ul></div><br/>';
		}
	?>
</div>