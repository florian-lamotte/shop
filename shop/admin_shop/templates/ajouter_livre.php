<?php
  require_once("../boot.php");

  $auteur = new Auteur();
  $auteurs = $auteur->findAll();

  $genre = new Genre();
  $genres = $genre->findAll();

  $edition = new Edition();
  $editions = $edition->findAll();

  $langue = new Langue();
  $langues = $langue->findAll();
?>

<div class="form-group row">
	<label for="ajout-titre" class="col-xs-2 col-form-label">Titre</label>
	<div class="col-xs-10">
		<input type="text" class="form-control" id="ajout-titre"></input>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-auteur" class="col-xs-2 col-form-label">Auteur</label>
	<div class="col-xs-10">
		<select class="form-control" id="ajout-auteur">
			<option></option>
			<?php foreach ($auteurs as $a) {
				echo '<option>' . $a->auteur . '</option>';
			}
			?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-genre" class="col-xs-2 col-form-label">Genre</label>
	<div class="col-xs-10">
		<select class="form-control" id="ajout-genre">
			<option></option>
			<?php foreach ($genres as $g) {
				echo '<option>' . $g->genre . '</option>';
			}
			?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-edition" class="col-xs-2 col-form-label">Maison d'édition</label>
	<div class="col-xs-10">
		<select class="form-control" id="ajout-edition">
			<option></option>
			<?php foreach ($editions as $e) {
				echo '<option>' . $e->edition . '</option>';
			}
			?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-langue" class="col-xs-2 col-form-label">Langue</label>
	<div class="col-xs-10">
		<select class="form-control" id="ajout-langue">
			<option></option>
			<?php foreach ($langues as $l) {
				echo '<option>' . $l->langue . '</option>';
			}
			?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-parution" class="col-xs-2 col-form-label">Parution</label>
	<div class="col-xs-10">
		<input type="date" class="form-control" id="ajout-parution"></input>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-prix" class="col-xs-2 col-form-label">Prix</label>
	<div class="col-xs-10">
		<input type="number" class="form-control" id="ajout-prix"></input>
	</div>
</div>
<div class="form-group row">
	<label for="ajout-stock" class="col-xs-2 col-form-label">Stock</label>
	<div class="col-xs-10">
		<input type="number" class="form-control" id="ajout-stock"></input>
	</div>
</div>
<input class="btn btn-success" type="submit" value="Valider">