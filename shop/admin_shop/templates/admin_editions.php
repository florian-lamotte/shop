<?php
  require_once("../boot.php");

  $edition = new Edition();
  $editions = $edition->findAll();
?>

<h1 class="page-header">Maisons d'édition<a class="btn btn-success" id="add" href="#/ajouter_edition" role="button">Ajouter</a></h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Editions</th>
        <th>Modifier</th>
        <th>Supprimer</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($editions as $e) {
      echo '<tr>';
        echo '<td>' . $e->edition . '</td>';
        echo '<td><a class="btn btn-warning" href="#/modifier_edition" role="button">Modifier</a></td>';
        echo '<td><a class="btn btn-danger" href="#/supprimer_edition" role="button">Supprimer</a></td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
</div>