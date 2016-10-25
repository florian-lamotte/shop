<?php
  require_once("../boot.php");

  $livre = new Livre();
  $livres = $livre->findAll();
?>

<h1 class="page-header">Livres<a class="btn btn-success" id="add" href="#/ajouter_livre" role="button">Ajouter</a></h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Genre</th>
        <th>Langue</th>
        <th>Parution</th>
        <th>Edition</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Modifier</th>
        <th>Supprimer</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($livres as $l) {
      echo '<tr>';
        echo '<td>' . $l->titre . '</td>';
        echo '<td>' . $l->auteur . '</td>';
        echo '<td>' . $l->genre . '</td>';
        echo '<td>' . $l->langue . '</td>';
        echo '<td>' . $l->parution . '</td>';
        echo '<td>' . $l->edition . '</td>';
        echo '<td>' . $l->prix . '</td>';
        echo '<td>' . $l->stock . '</td>';
        echo '<td><a class="btn btn-warning" href="#/modifier_livre" role="button">Modifier</a></td>';
        echo '<td><a class="btn btn-danger" href="#/supprimer_livre" role="button">Supprimer</a></td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
</div>