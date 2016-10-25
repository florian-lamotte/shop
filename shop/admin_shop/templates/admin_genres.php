<?php
  require_once("../boot.php");

  $genre = new Genre();
  $genres = $genre->findAll();
?>

<h1 class="page-header">Genres<a class="btn btn-success" id="add" href="#/ajouter_genre" role="button">Ajouter</a></h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Genres</th>
        <th>Modifier</th>
        <th>Supprimer</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($genres as $g) {
      echo '<tr>';
        echo '<td>' . $g->genre . '</td>';
        echo '<td><a class="btn btn-warning" href="#/modifier_genre" role="button">Modifier</a></td>';
        echo '<td><a class="btn btn-danger" href="#/supprimer_genre" role="button">Supprimer</a></td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
</div>