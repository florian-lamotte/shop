<?php
  require_once("../boot.php");

  $auteur = new Auteur();
  $auteurs = $auteur->findAll();
?>

<h1 class="page-header">Auteurs<a class="btn btn-success" id="add" href="#/ajouter_auteur" role="button">Ajouter</a></h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Auteurs</th>
        <th>Modifier</th>
        <th>Supprimer</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($auteurs as $a) {
      echo '<tr>';
        echo '<td>' . $a->auteur . '</td>';
        echo '<td><a class="btn btn-warning" href="#/modifier_auteur" role="button">Modifier</a></td>';
        echo '<td><a class="btn btn-danger" href="#/supprimer_auteur" role="button">Supprimer</a></td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
</div>